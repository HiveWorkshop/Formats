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

enums:
  arg_count:
    0: arg_count_0
    1: arg_count_1
    2: arg_count_2
    3: arg_count_3
    4: arg_count_4
    5: arg_count_5
    6: arg_count_6
    7: arg_count_7
    8: arg_count_8
    9: arg_count_9
    10: arg_count_10
    11: arg_count_11
    12: arg_count_12
    13: arg_count_13
    14: arg_count_14
    15: arg_count_15

instances:
  argument_count:
    value:
      switch-on: name
      cases:
';

foreach ($functionLookup as $name => $argCount) {
    echo "        '$name': arg_count::arg_count_$argCount
";
}
