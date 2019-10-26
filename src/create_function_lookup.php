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

$lookups['action']['InitAdvancedTriggers'] = [];
$lookups['action']['Erdbeben'] = array_fill(0, 2, 'parameter');
$lookups['action']['TargetHeal'] = array_fill(0, 2, 'parameter');
$lookups['action']['ChangeDamage'] = array_fill(0, 3, 'parameter');
$lookups['action']['Gewitter'] = array_fill(0, 2, 'parameter');
$lookups['action']['UnitTypeIsInRegion'] = array_fill(0, 2, 'parameter');
$lookups['action']['TurnRegrowingTreesOn'] = ['parameter'];
$lookups['action']['FadingText'] = array_fill(0, 6, 'parameter');
$lookups['action']['GoldText'] = array_fill(0, 3, 'parameter');
$lookups['action']['SetHeroSaveLoadOptions'] = array_fill(0, 2, 'parameter');
$lookups['action']['SaveHeroData'] = array_fill(0, 2, 'parameter');
$lookups['action']['RestoreHeroAtLoc'] = array_fill(0, 3, 'parameter');
$lookups['action']['AddSpecialEffectLocWithTimer'] = array_fill(0, 3, 'parameter');
$lookups['action']['SetCustomStringValue'] = array_fill(0, 2, 'parameter');
$lookups['action']['SetCustomRealValue'] = array_fill(0, 2, 'parameter');
$lookups['action']['SetCustomBooleanValue'] = array_fill(0, 2, 'parameter');
$lookups['action']['PlaySoundForPlayer'] = array_fill(0, 2, 'parameter');
$lookups['action']['MakeUnitUnselectable'] = ['parameter'];
$lookups['action']['MakeUnitBurn'] = array_fill(0, 3, 'parameter');
$lookups['action']['AddSpecialEffectTargetUnitWithTimer'] = array_fill(0, 4, 'parameter');
$lookups['action']['SetCinematicSkipClearTextState'] = ['parameter'];
$lookups['action']['CinematicModeBJAdvanced'] = array_fill(0, 3, 'parameter');
$lookups['action']['CinematicFilterGenericForPlayer'] = array_fill(0, 12, 'parameter');
$lookups['action']['CamFollowUnit'] = array_fill(0, 3, 'parameter');
$lookups['action']['SetFollowDetails'] = array_fill(0, 3, 'parameter');
$lookups['action']['RestoreHeroData'] = array_fill(0, 2, 'parameter');
$lookups['action']['CamStopFollowing'] = ['parameter'];
$lookups['action']['CreateMissileEffect'] = array_fill(0, 5, 'parameter');
$lookups['action']['CreateSelectableHero'] = array_fill(0, 3, 'parameter');
$lookups['action']['ErrorMsg'] = array_fill(0, 2, 'parameter');
$lookups['action']['CreateSFXRain'] = array_fill(0, 4, 'parameter');
$lookups['action']['InitDebugTriggers'] = [];
$lookups['action']['AddHeroGlowNew'] = ['parameter'];
$lookups['action']['AdvancedLeaderboard'] = array_fill(0, 19, 'parameter');
$lookups['action']['Voting'] = array_fill(0, 28, 'parameter');
$lookups['action']['InitTownPortalSystem'] = array_fill(0, 2, 'parameter');
$lookups['action']['MakeUnitSlide'] = array_fill(0, 4, 'parameter');
$lookups['action']['TurnHeroDiedMsgOn'] = ['parameter'];
$lookups['action']['CancelAIOrders'] = array_fill(0, 2, 'parameter');
$lookups['action']['ChangeDefense'] = array_fill(0, 3, 'parameter');
$lookups['action']['ChangeLife'] = array_fill(0, 3, 'parameter');
$lookups['action']['ChangeMana'] = array_fill(0, 3, 'parameter');
$lookups['action']['ChangeRange'] = array_fill(0, 4, 'parameter');
$lookups['action']['MatrixStyle'] = ['parameter'];
$lookups['action']['ActionAnd'] = array_fill(0, 2, 'parameter');
$lookups['action']['ChangeAttackRate'] = array_fill(0, 4, 'parameter');
$lookups['action']['CreateSpecialEffectCircle'] = array_fill(0, 5, 'parameter');
$lookups['action']['SetFollowOptions'] = array_fill(0, 3, 'parameter');
$lookups['action']['UnitDropAllItemsOfType'] = array_fill(0, 3, 'parameter');
$lookups['action']['SetFollowOptions'] = array_fill(0, 3, 'parameter');
$lookups['action']['AttachSFXRainToUnit'] = array_fill(0, 4, 'parameter');
$lookups['action']['ReplaceUnitAdvanced'] = array_fill(0, 3, 'parameter');
$lookups['action']['TurnPlayerLeftMsgOn'] = ['parameter'];
$lookups['action']['RemoveBasicAbility'] = array_fill(0, 2, 'parameter');
$lookups['action']['StartSpellEnhancer'] = [];
$lookups['action']['WaitForEnterRectEvent'] = array_fill(0, 2, 'parameter');
$lookups['action']['WaitForEnterRectEvent'] = array_fill(0, 2, 'parameter');
$lookups['action']['AOEHealSimple'] = array_fill(0, 4, 'parameter');
$lookups['action']['AttachMovingSFXToUnit'] = array_fill(0, 6, 'parameter');
$lookups['action']['AddCustomSpellToEnhancer'] = array_fill(0, 5, 'parameter');
$lookups['action']['DialogOhneShortcut'] = array_fill(0, 17, 'parameter');
$lookups['action']['Transparenzverlauf'] = array_fill(0, 10, 'parameter');
$lookups['action']['TimerMitFenster'] = array_fill(0, 6, 'parameter');
$lookups['action']['EnableKeyboardScrolling'] = ['parameter'];
$lookups['action']['SFXWave'] = array_fill(0, 4, 'parameter');
$lookups['action']['ChangeMissileTargets'] = array_fill(0, 4, 'parameter');
$lookups['action']['CreateMovingSFX'] = array_fill(0, 7, 'parameter');
$lookups['action']['AutomaticMemoryCleanup'] = ['parameter'];
$lookups['action']['ReplaceResizeDoodad'] = array_fill(0, 5, 'parameter');
$lookups['action']['DestroyEffect'] = ['parameter'];
$lookups['action']['WaitForAnyOrderEvent'] = ['parameter'];
$lookups['action']['MorphUnit'] = array_fill(0, 2, 'parameter');
$lookups['action']['MakeHeroSelectable'] = ['parameter'];
$lookups['action']['InitCommander'] = [];
$lookups['action']['YDWESetAnyTypeLocalVariable'] = array_fill(0, 3, 'parameter');

$lookups['parameter']['returnstring'] = ['parameter'];

// NOTE: Items that are both in `action` and `parameter` are likely to be miscategorized because we just enter 'parameter' for everything here.
$lookups['parameter']['GetXOrder'] = ['parameter'];
$lookups['parameter']['GetXTargetLoc'] = ['parameter'];
$lookups['parameter']['GetXTargetItem'] = ['parameter'];
$lookups['parameter']['GetXTargetDest'] = ['parameter'];
$lookups['parameter']['GetXTargetUnit'] = ['parameter'];
$lookups['parameter']['GetXLearnedSkill'] = ['parameter'];
$lookups['parameter']['GetXResearchedUpgrade'] = ['parameter'];
$lookups['parameter']['GetXSummonedItem'] = ['parameter'];
$lookups['parameter']['GetXAttackedUnit'] = ['parameter'];
$lookups['parameter']['GetXAcquiredItem'] = ['parameter'];
$lookups['parameter']['GetXDroppedItem'] = ['parameter'];
$lookups['parameter']['GetXSoldUnit'] = ['parameter'];
$lookups['parameter']['GetXSoldItem'] = ['parameter'];
$lookups['parameter']['GetXTrainedUnit'] = ['parameter'];
$lookups['parameter']['GetCustomStringValue'] = ['parameter'];
$lookups['parameter']['GetCustomRealValue'] = ['parameter'];
$lookups['parameter']['GetCustomBooleanValue'] = ['parameter'];
$lookups['parameter']['GetRandomSelectionHeroType'] = [];
$lookups['parameter']['ColoredString'] = array_fill(0, 3, 'parameter');
$lookups['parameter']['GetAnzahlSpieler'] = [];
$lookups['parameter']['AngleBetweenPointsXY'] = array_fill(0, 4, 'parameter');
$lookups['parameter']['Rect2Region'] = ['parameter'];
$lookups['parameter']['FindNextUnitMatching'] = array_fill(0, 2, 'parameter');
$lookups['parameter']['SetUnitPositionLoc'] = array_fill(0, 2, 'parameter');
$lookups['parameter']['HasUnitAbility'] = array_fill(0, 2, 'parameter');
$lookups['parameter']['Abilcode2Heroskillcode'] = ['parameter'];
$lookups['parameter']['GetRandomLocInRectOfCliffHeight'] = array_fill(0, 2, 'parameter');
$lookups['parameter']['UnitTypeIsInRegion'] = array_fill(0, 2, 'parameter');
$lookups['parameter']['AOEHealSimple'] = array_fill(0, 4, 'parameter');
$lookups['parameter']['Integer2SpellId'] = ['parameter'];
$lookups['parameter']['AngleDifference'] = array_fill(0, 2, 'parameter');
$lookups['parameter']['DeleteSubStringFromString'] = array_fill(0, 2, 'parameter');
$lookups['parameter']['TriggerName2Function'] = ['parameter'];
$lookups['parameter']['RandomPointInRange'] = array_fill(0, 2, 'parameter');
// $lookups['parameter']['SFXWave'] = array_fill(0, 4, 'parameter');
$lookups['parameter']['String2PointOrder'] = ['parameter'];
$lookups['parameter']['UnitRemoveItemFromSlotSwapped'] = array_fill(0, 2, 'parameter');
$lookups['parameter']['RemoveItem'] = ['parameter'];
$lookups['parameter']['CompareLocationsBJ'] = array_fill(0, 2, 'parameter');
$lookups['parameter']['String2UnitOrder'] = ['parameter'];
$lookups['parameter']['DistanceBetweenPointsXY'] = array_fill(0, 4, 'parameter');
$lookups['parameter']['WordParser'] = array_fill(0, 2, 'parameter');
$lookups['parameter']['DisableTrigger'] = ['parameter'];
$lookups['parameter']['UnitTypeIsInUnitGroup'] = array_fill(0, 2, 'parameter');
$lookups['parameter']['GetUnitGoldCostById'] = ['parameter'];
// Only one map and adding these doesn't make parsing complete.
// $lookups['parameter']['YDWEGetAnyTypeLocalVariable'] = ['parameter'];
// $lookups['parameter']['UnitAlive'] = ['parameter'];

$lookups['event']['AddMoveSlotEvent'] = ['parameter'];
$lookups['event']['AddSelectSpecificHeroEvent'] = [];
$lookups['event']['AddSelectRandomHeroEvent'] = [];

function getArgStructName(array $arguments)
{
    $argCount = count($arguments);
    if ($argCount == 0) {
        $suffix = 'noargs';
    } elseif ($argCount == 1) {
        $suffix = '1arg';
    } else {
        $suffix = $argCount.'args';
    }

    return 'auto_struct_'.$suffix;
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
    foreach ($lookup as $functionName => $arguments) {
        $structName = getArgStructName($arguments);
        if (!empty($argStructs[$structName])) {
            continue;
        }
        $code =
"meta:
  id: $structName
  imports:
    - parameter

params:
  - id: game
    type: u4
";

        foreach ($arguments as $i => $arg) {
            $code .=
"  - id: arg{$i}_type
    type: u4
";
        }

        $code .= '
seq:';
        foreach ($arguments as $i => $arg) {
            $code .=
"
  - id: arg_$i
    type: 'parameter(game, arg{$i}_type)'";
        }
        if (!$arguments) {
            $code .= ' []
';
        }
        $argStructs[$structName] = $code;
        file_put_contents(__DIR__.'/grammar/'.$structName.'.ksy', $code);
    }
}

// Generate structs for main container types event, condition, action, parameter
foreach ($lookups as $area => $index) {
    // $area is event, condition, action, parameter
    $structName = "auto_construct_$area";
    $switchCode = '';
    $imports = [];
    foreach ($index as $functionName => $arguments) {
        $argsContainerName = getArgStructName($arguments);
        $imports[$argsContainerName] = true;
        $switchCode .=
"        '\"$functionName\"': $argsContainerName(game".(count($arguments) ? ', ' : '').implode(', ', array_map(function ($arg, $i) use ($parameterTypeEnum) {
    return $parameterTypeEnum[$arg];
}, $arguments, array_keys($arguments))).')
';
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
