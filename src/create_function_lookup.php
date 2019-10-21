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

$triggerDataFile = dirname(__FILE__).'/../resources/TriggerData.txt';
$triggerDataParser = new Ini(file_get_contents($triggerDataFile));
$triggerDataParser->parse();
$areas = [
    'TriggerActions',
    'TriggerEvents',
    'TriggerConditions',
    'TriggerCalls',
];
$functionLookup = [];
foreach ($areas as $area) {
    foreach ($triggerDataParser->data->groups[$area] as $nameValue) {
        $name = $nameValue['name'];
        $value = $nameValue['value'];
        if ($name[0] == '_') {
            continue;
        }
        $args = explode(',', $value);
        $args = array_values(array_filter($args, function ($arg) {
            return $arg != '0' && $arg != '1' && $arg != 'nothing' && trim($arg) != '';
        }));
        $functionLookup[$name] = $area == 'TriggerCalls' ? (count($args) - 1) : count($args);
    }
}

$code = [];
foreach ($functionLookup as $name => $argCount) {
    $code[] = "            '\"$name\"': parameters($argCount)";
}
$code = implode("\n", $code);

$wtgFile = __DIR__ . '/grammar/wtg.ksy';

$f = file_get_contents($wtgFile);

$f = preg_replace('~
(\#\ BEGIN_PARAMETERS [\r\n]+)
.*?
([\r\n]+ \#\ END_PARAMETERS)
~xs', "\$1$code\$2", $f);

file_put_contents($wtgFile, $f);
