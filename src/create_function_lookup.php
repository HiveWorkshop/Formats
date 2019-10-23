<?php

ini_set('memory_limit', '1024M');

class Ini
{
    public $data;

    public function __construct($rawData, $stripQuotes = true)
    {
        $this->rawData = $rawData;
        $this->data = new \stdClass();
        $this->stripQuotes = $stripQuotes;
    }

    public function parse()
    {
        $lines = preg_split('#[\r\n]+#', $this->rawData);
        $groups = [];
        $groupName = null;
        foreach ($lines as $line) {
            if (preg_match('#^\[(\w+)\]#', $line, $result)) {
                /* Lower-cased because BOac was used in a map and Blizzard has Boac */
                $groupName = trim($result[1]);
                if (!array_key_exists($groupName, $groups)) {
                    $groups[$groupName] = [];
                }
                continue;
            }
            if (preg_match('#^(\w+)\=(.*)#', $line, $result)) {
                $groups[$groupName][] = [
                    'name' => $result[1],
                    'value' => $this->_cleanValue($result[2]),
                ];
            }
        }
        $this->data->groups = $groups;
    }

    protected function _cleanValue($value)
    {
        $value = trim($value);
        if ($this->stripQuotes) {
            if (strlen($value) > 0 && $value[0] == '"' && $value[strlen($value) - 1] == '"') {
                $value = substr($value, 1, strlen($value) - 2);
            }
        }

        return $value;
    }
}

function getFunctionList($file)
{
    $parser = new Ini(file_get_contents($file));
    $parser->parse();
    $areas = [
        'TriggerEvents' => 'event',
        'TriggerConditions' => 'condition',
        'TriggerActions' => 'action',
        'TriggerCalls' => 'parameter',
    ];
    $index = [];
    foreach ($areas as $area => $newKey) {
        $index[$newKey] = [];
        foreach ($parser->data->groups[$area] as $nameValue) {
            $name = $nameValue['name'];
            $value = $nameValue['value'];
            if ($name[0] == '_') {
                continue;
            }
            $args = explode(',', $value);
            $args = array_filter($args, function ($arg) {
                return !is_numeric($arg) && $arg != 'nothing' && trim($arg) != '';
            });
            if ($area == 'TriggerCalls') {
                array_shift($args);
            }
            $args = array_map(
                function ($arg) {
                    switch ($arg) {
                        case 'eventcall': return 'event';
                        case 'boolcall':  return 'condition';
                        case 'boolexpr':  return 'condition';
                        case 'code':      return 'action';
                        default:          return 'parameter';
                    }
                },
                $args
            );
            $args = array_values($args);
            $index[$newKey][$name] = $args;
        }
    }

    return $index;
}

$lookups = [];
foreach (['TriggerData.txt', 'TriggerDataWEU.txt', 'TriggerDataYDWE.txt'] as $filename) {
    $path = __DIR__.'/../resources/'.$filename;
    $index = getFunctionList($path);
    foreach ($index as $area => $areaIndex) {
        if (empty($lookups[$area])) {
            $lookups[$area] = [];
        }
        foreach ($areaIndex as $functionName => $arguments) {
            if (isset($lookups[$area][$functionName]) && count($lookups[$area][$functionName]) != count($arguments)) {
                echo "$filename has different number of arguments for $functionName\n";
            }
            $lookups[$area][$functionName] = $arguments;
        }
    }
}

function shorten($arg)
{
    switch ($arg) {
        case 'event': return 'evt';
        case 'condition': return 'con';
        case 'action': return 'act';
        case 'parameter': return 'par';
        default: return $arg;
    }
}

function getArgStructName($area, array $arguments)
{
    $shortened = array_map('shorten', $arguments);
    $grouped = array_reduce(
        $shortened,
        function ($carry, $item) {
            $lastIndex = count($carry) - 1;
            if (!$carry || $carry[$lastIndex][0] != $item) {
                $carry[] = [$item, 1];
            } else {
                ++$carry[$lastIndex][1];
            }

            return $carry;
        },
        []
    );
    $stringifiedGroups = array_map(function ($group) {
        return $group[1].'_'.$group[0];
    }, $grouped);
    $key = implode('_', $stringifiedGroups);
    if (!$key) {
        $key = 'noargs';
    }

    $key = "auto_{$area}_struct_{$key}";

    return $key;
}

$parameterTypeEnum = [
    'event' => 0,
    'condition' => 1,
    'action' => 2,
    'parameter' => 3,
];

// Put conditions inside parameters
$lookups['parameter'] = array_merge($lookups['parameter'], $lookups['condition']);

// Generate structs for various argument sizes
$argStructs = [];
foreach ($lookups as $area => $lookup) {
    foreach ($lookup as $arguments) {
        $structName = getArgStructName($area, $arguments);
        if (empty($argStructs[$structName])) {
            $code =
"meta:
  id: $structName
  imports:
    - parameter

params:
  - id: game
    type: u4

seq:";
            foreach ($arguments as $i => $arg) {
                $code .=
"
  - id: arg_$i
    type: 'parameter(game, {$parameterTypeEnum[$arg]})'";
            }
            if (!$arguments) {
                $code .= '  []
';
            }
            $argStructs[$structName] = $code;
            file_put_contents(__DIR__.'/grammar/'.$structName.'.ksy', $code);
        }
    }
}

// Generate structs for main container types event, condition, action, parameter
foreach ($lookups as $area => $index) {
    // $area is event, condition, action, parameter
    $structName = "auto_construct_$area";
    $switchCode = '';
    $imports = [];
    foreach ($index as $functionName => $arguments) {
        $argsContainerName = getArgStructName($area, $arguments);
        $imports[$argsContainerName] = true;
        $switchCode .=
"        '\"$functionName\"': $argsContainerName(game)
";
    }
    $importCode = '';
    foreach (array_keys($imports) as $import) {
        $importCode .=
"    - $import
";
    }
    $code =
"meta:
  id: $structName
  imports:
$importCode
    - wtg_error

params:
  - id: game
    type: u4
  - id: name
    type: str
  
seq:
  - id: arguments
    type:
      switch-on: name
      cases:
$switchCode
        _: wtg_error(name)
";
    file_put_contents(__DIR__.'/grammar/'.$structName.'.ksy', $code);
}

exit;
/*
$code = [];
foreach ($lookups as $filename => $lookup) {
    foreach ($lookup as $area => $index) {
        if (empty($code[$area])) {
            $code[$area] = [];
        }
        $code[$area][] = "# $filename";
        foreach ($index as $name => $argCount) {
            $code[$area][] = "        '\"$name\"': u4_container($argCount)";
        }
    }
}
foreach ($code as $area => $code_) {
    $code[$area] = implode("\n", $code_);
}

function createFile($name, array $codes)
{
    $code = implode("\n", $codes);
    $f =
"meta:
  id: $name
  endian: le
  imports:
    - u4_container
    - wtg_error

instances:
  argument_count:
    value: argument_count_container.as<u4_container>.value

seq:
  - id: name
    type: strz
    encoding: UTF-8
  - id: argument_count_container
    size: 0
    type:
      switch-on: name
      cases:
$code
        _: wtg_error(name)
";

    $file = __DIR__."/grammar/$name.ksy";
    file_put_contents($file, $f);
}

createFile('eca_parameter', [
    $code['TriggerEvents'],
    $code['TriggerActions'],
    $code['TriggerConditions'],
]);

createFile('function_parameter', [
    $code['TriggerActions'],
    // $code['TriggerEvents'],
    $code['TriggerConditions'],
    $code['TriggerCalls'],
]);
*/
