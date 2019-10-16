<?php

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

$triggerDataFile = dirname(__FILE__).'/resources/TriggerData.txt';
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

echo '
meta:
  id: function_info

seq:
  - id: name
    type: strz
    encoding: UTF-8

instances:
  argument_count:
    value: \'';

foreach ($functionLookup as $name => $argCount) {
    echo "name == \"$name\" ? $argCount : (";
}
echo '-1';
echo str_repeat(')', count($functionLookup));
echo '\'';
