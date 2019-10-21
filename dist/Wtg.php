<?php
// This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

namespace Wtg;

class Wtg extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, Wtg $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_header = new Header($this->_io, $this, $this->_root);
        switch ($this->header()->fileVersion()) {
            case 4:
                $this->_m_body = new BodyPre131($this->_io, $this, $this->_root);
                break;
            case 7:
                $this->_m_body = new BodyPre131($this->_io, $this, $this->_root);
                break;
            default:
                $this->_m_body = new BodyPost131($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_game;
    public function game() {
        if ($this->_m_game !== null)
            return $this->_m_game;
        $this->_m_game = ($this->_root()->header()->game() > 0 ? $this->_root()->header()->game() : $this->_root()->header()->fileVersion());
        return $this->_m_game;
    }
    protected $_m_header;
    protected $_m_body;
    public function header() { return $this->_m_header; }
    public function body() { return $this->_m_body; }
}

class VariableReference extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, Element $_parent = null, Wtg $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_id = $this->_io->readU4le();
        $this->_m_name = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytesTerm(0, false, true, true), "UTF-8");
        $this->_m_parentId = $this->_io->readU4le();
    }
    protected $_m_id;
    protected $_m_name;
    protected $_m_parentId;
    public function id() { return $this->_m_id; }
    public function name() { return $this->_m_name; }
    public function parentId() { return $this->_m_parentId; }
}

class Parameter extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, Wtg $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_type = $this->_io->readU4le();
        $this->_m_value = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytesTerm(0, false, true, true), "UTF-8");
        $this->_m_hasSubParameters = $this->_io->readU4le();
        if ($this->hasSubParameters() > 0) {
            $this->_m_subParameters = new SubParameters($this->_io, $this, $this->_root);
        }
        if ( (($this->_root()->game() == 4) && ($this->type() == 2)) ) {
            $this->_m_unknown0 = $this->_io->readU4le();
        }
        if ( (($this->_root()->game() == 4) && ($this->type() != 2)) ) {
            $this->_m_isArrayRoc = $this->_io->readU4le();
        }
        if ( (($this->_root()->game() == 7) && ($this->hasSubParameters() > 0)) ) {
            $this->_m_unknown1 = $this->_io->readU4le();
        }
        if ($this->_root()->game() == 7) {
            $this->_m_isArrayTft = $this->_io->readU4le();
        }
        if ( (($this->isArrayRoc() > 0) || ($this->isArrayTft() > 0)) ) {
            $this->_m_arrayIndex = new Parameter($this->_io, $this, $this->_root);
        }
    }
    protected $_m_type;
    protected $_m_value;
    protected $_m_hasSubParameters;
    protected $_m_subParameters;
    protected $_m_unknown0;
    protected $_m_isArrayRoc;
    protected $_m_unknown1;
    protected $_m_isArrayTft;
    protected $_m_arrayIndex;
    public function type() { return $this->_m_type; }
    public function value() { return $this->_m_value; }
    public function hasSubParameters() { return $this->_m_hasSubParameters; }
    public function subParameters() { return $this->_m_subParameters; }
    public function unknown0() { return $this->_m_unknown0; }
    public function isArrayRoc() { return $this->_m_isArrayRoc; }
    public function unknown1() { return $this->_m_unknown1; }
    public function isArrayTft() { return $this->_m_isArrayTft; }
    public function arrayIndex() { return $this->_m_arrayIndex; }
}

class BodyPre131 extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, Wtg $_parent = null, Wtg $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_categoryCount = $this->_io->readU4le();
        $this->_m_categories = [];
        $n = $this->categoryCount();
        for ($i = 0; $i < $n; $i++) {
            $this->_m_categories[] = new Category($this->_io, $this, $this->_root);
        }
        $this->_m_unknown0 = $this->_io->readU4le();
        $this->_m_variableCount = $this->_io->readU4le();
        $this->_m_variables = [];
        $n = $this->variableCount();
        for ($i = 0; $i < $n; $i++) {
            $this->_m_variables[] = new Variable($this->_io, $this, $this->_root);
        }
        $this->_m_triggerCount = $this->_io->readU4le();
        $this->_m_triggers = [];
        $n = $this->triggerCount();
        for ($i = 0; $i < $n; $i++) {
            $this->_m_triggers[] = new Trigger($this->_io, $this, $this->_root);
        }
    }
    protected $_m_categoryCount;
    protected $_m_categories;
    protected $_m_unknown0;
    protected $_m_variableCount;
    protected $_m_variables;
    protected $_m_triggerCount;
    protected $_m_triggers;
    public function categoryCount() { return $this->_m_categoryCount; }
    public function categories() { return $this->_m_categories; }
    public function unknown0() { return $this->_m_unknown0; }
    public function variableCount() { return $this->_m_variableCount; }
    public function variables() { return $this->_m_variables; }
    public function triggerCount() { return $this->_m_triggerCount; }
    public function triggers() { return $this->_m_triggers; }
}

class Variables extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, BodyPost131 $_parent = null, Wtg $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_count = $this->_io->readU4le();
        $this->_m_variables = [];
        $n = $this->count();
        for ($i = 0; $i < $n; $i++) {
            $this->_m_variables[] = new Variable($this->_io, $this, $this->_root);
        }
    }
    protected $_m_count;
    protected $_m_variables;
    public function count() { return $this->_m_count; }
    public function variables() { return $this->_m_variables; }
}

class Eca extends \Kaitai\Struct\Struct {
    public function __construct(int $isChild, \Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, Wtg $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_m_isChild = $isChild;
        $this->_read();
    }

    private function _read() {
        $this->_m_type = $this->_io->readU4le();
        if ($this->isChild() > 0) {
            $this->_m_group = $this->_io->readU4le();
        }
        $this->_m_functionName = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytesTerm(0, false, true, true), "UTF-8");
        $this->_m_isEnabled = $this->_io->readU4le();
        $this->_m_arguments = new ParametersByName($this->functionName(), $this->_io, $this, $this->_root);
        if ($this->_root()->game() == 7) {
            $this->_m_subEcaCount = $this->_io->readU4le();
        }
        if ($this->_root()->game() == 7) {
            $this->_m_subEcas = [];
            $n = ($this->subEcaCount() > 0 ? $this->subEcaCount() : 0);
            for ($i = 0; $i < $n; $i++) {
                $this->_m_subEcas[] = new Eca(1, $this->_io, $this, $this->_root);
            }
        }
    }
    protected $_m_type;
    protected $_m_group;
    protected $_m_functionName;
    protected $_m_isEnabled;
    protected $_m_arguments;
    protected $_m_subEcaCount;
    protected $_m_subEcas;
    protected $_m_isChild;
    public function type() { return $this->_m_type; }
    public function group() { return $this->_m_group; }
    public function functionName() { return $this->_m_functionName; }
    public function isEnabled() { return $this->_m_isEnabled; }
    public function arguments() { return $this->_m_arguments; }
    public function subEcaCount() { return $this->_m_subEcaCount; }
    public function subEcas() { return $this->_m_subEcas; }
    public function isChild() { return $this->_m_isChild; }
}

class SubParameters extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, Parameter $_parent = null, Wtg $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_functionType = $this->_io->readU4le();
        $this->_m_functionName = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytesTerm(0, false, true, true), "UTF-8");
        $this->_m_beginParameters = $this->_io->readU4le();
        if ($this->beginParameters() > 0) {
            $this->_m_arguments = new ParametersByName($this->functionName(), $this->_io, $this, $this->_root);
        }
    }
    protected $_m_functionType;
    protected $_m_functionName;
    protected $_m_beginParameters;
    protected $_m_arguments;
    public function functionType() { return $this->_m_functionType; }
    public function functionName() { return $this->_m_functionName; }
    public function beginParameters() { return $this->_m_beginParameters; }
    public function arguments() { return $this->_m_arguments; }
}

class Element extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, BodyPost131 $_parent = null, Wtg $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_elementType = $this->_io->readU4le();
        switch ($this->elementType()) {
            case 4:
                $this->_m_data = new Category($this->_io, $this, $this->_root);
                break;
            case 32:
                $this->_m_data = new Trigger($this->_io, $this, $this->_root);
                break;
            case 8:
                $this->_m_data = new Trigger($this->_io, $this, $this->_root);
                break;
            case 64:
                $this->_m_data = new VariableReference($this->_io, $this, $this->_root);
                break;
            case 16:
                $this->_m_data = new Trigger($this->_io, $this, $this->_root);
                break;
            default:
                $this->_m_data = new Error($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_elementType;
    protected $_m_data;
    public function elementType() { return $this->_m_elementType; }
    public function data() { return $this->_m_data; }
}

class BodyPost131 extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, Wtg $_parent = null, Wtg $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_unknown0 = $this->_io->readU4le();
        $this->_m_unknown1 = $this->_io->readU4le();
        $this->_m_unknown2 = $this->_io->readU4le();
        $this->_m_unknown3 = $this->_io->readU4le();
        $this->_m_categoryCount = $this->_io->readU4le();
        $this->_m_deletedCategories = new DeletedItemIds($this->_io, $this, $this->_root);
        $this->_m_triggerCount = $this->_io->readU4le();
        $this->_m_deletedTriggers = new DeletedItemIds($this->_io, $this, $this->_root);
        $this->_m_triggerCommentCount = $this->_io->readU4le();
        $this->_m_deletedTriggerComments = new DeletedItemIds($this->_io, $this, $this->_root);
        $this->_m_customScriptCount = $this->_io->readU4le();
        $this->_m_deletedCustomScripts = new DeletedItemIds($this->_io, $this, $this->_root);
        $this->_m_variableCount = $this->_io->readU4le();
        $this->_m_deletedVariables = new DeletedItemIds($this->_io, $this, $this->_root);
        $this->_m_unknown4 = $this->_io->readU4le();
        $this->_m_unknown5 = $this->_io->readU4le();
        $this->_m_unknown6 = $this->_io->readU4le();
        $this->_m_variables = new Variables($this->_io, $this, $this->_root);
        $this->_m_elementCount = $this->_io->readU4le();
        $this->_m_unknown7 = $this->_io->readU4le();
        $this->_m_unknown8 = $this->_io->readU4le();
        $this->_m_mapName = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytesTerm(0, false, true, true), "UTF-8");
        $this->_m_unknown9 = $this->_io->readU4le();
        $this->_m_unknown10 = $this->_io->readU4le();
        if ($this->_root()->game() == 7) {
            $this->_m_unknown11 = $this->_io->readU4le();
        }
        $this->_m_elements = [];
        $i = 0;
        while (!$this->_io->isEof()) {
            $this->_m_elements[] = new Element($this->_io, $this, $this->_root);
            $i++;
        }
    }
    protected $_m_unknown0;
    protected $_m_unknown1;
    protected $_m_unknown2;
    protected $_m_unknown3;
    protected $_m_categoryCount;
    protected $_m_deletedCategories;
    protected $_m_triggerCount;
    protected $_m_deletedTriggers;
    protected $_m_triggerCommentCount;
    protected $_m_deletedTriggerComments;
    protected $_m_customScriptCount;
    protected $_m_deletedCustomScripts;
    protected $_m_variableCount;
    protected $_m_deletedVariables;
    protected $_m_unknown4;
    protected $_m_unknown5;
    protected $_m_unknown6;
    protected $_m_variables;
    protected $_m_elementCount;
    protected $_m_unknown7;
    protected $_m_unknown8;
    protected $_m_mapName;
    protected $_m_unknown9;
    protected $_m_unknown10;
    protected $_m_unknown11;
    protected $_m_elements;
    public function unknown0() { return $this->_m_unknown0; }
    public function unknown1() { return $this->_m_unknown1; }
    public function unknown2() { return $this->_m_unknown2; }
    public function unknown3() { return $this->_m_unknown3; }
    public function categoryCount() { return $this->_m_categoryCount; }
    public function deletedCategories() { return $this->_m_deletedCategories; }
    public function triggerCount() { return $this->_m_triggerCount; }
    public function deletedTriggers() { return $this->_m_deletedTriggers; }
    public function triggerCommentCount() { return $this->_m_triggerCommentCount; }
    public function deletedTriggerComments() { return $this->_m_deletedTriggerComments; }
    public function customScriptCount() { return $this->_m_customScriptCount; }
    public function deletedCustomScripts() { return $this->_m_deletedCustomScripts; }
    public function variableCount() { return $this->_m_variableCount; }
    public function deletedVariables() { return $this->_m_deletedVariables; }
    public function unknown4() { return $this->_m_unknown4; }
    public function unknown5() { return $this->_m_unknown5; }
    public function unknown6() { return $this->_m_unknown6; }
    public function variables() { return $this->_m_variables; }
    public function elementCount() { return $this->_m_elementCount; }
    public function unknown7() { return $this->_m_unknown7; }
    public function unknown8() { return $this->_m_unknown8; }
    public function mapName() { return $this->_m_mapName; }
    public function unknown9() { return $this->_m_unknown9; }
    public function unknown10() { return $this->_m_unknown10; }
    public function unknown11() { return $this->_m_unknown11; }
    public function elements() { return $this->_m_elements; }
}

class Error extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, Wtg $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_error = $this->_io->ensureFixedContents("\x55\x4E\x45\x58\x50\x45\x43\x54\x45\x44\x5F\x57\x54\x46");
    }
    protected $_m_error;
    public function error() { return $this->_m_error; }
}

class Variable extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, Wtg $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_name = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytesTerm(0, false, true, true), "UTF-8");
        $this->_m_type = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytesTerm(0, false, true, true), "UTF-8");
        $this->_m_unknown0 = $this->_io->readU4le();
        $this->_m_isArray = $this->_io->readU4le();
        if ($this->_root()->game() == 7) {
            $this->_m_arraySize = $this->_io->readU4le();
        }
        $this->_m_isInitialized = $this->_io->readU4le();
        $this->_m_initialValue = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytesTerm(0, false, true, true), "UTF-8");
        if ($this->_root()->header()->fileVersion() > 7) {
            $this->_m_variableId = $this->_io->readU4le();
        }
        if ($this->_root()->header()->fileVersion() > 7) {
            $this->_m_parentCategoryId = $this->_io->readU4le();
        }
    }
    protected $_m_name;
    protected $_m_type;
    protected $_m_unknown0;
    protected $_m_isArray;
    protected $_m_arraySize;
    protected $_m_isInitialized;
    protected $_m_initialValue;
    protected $_m_variableId;
    protected $_m_parentCategoryId;
    public function name() { return $this->_m_name; }
    public function type() { return $this->_m_type; }
    public function unknown0() { return $this->_m_unknown0; }
    public function isArray() { return $this->_m_isArray; }
    public function arraySize() { return $this->_m_arraySize; }
    public function isInitialized() { return $this->_m_isInitialized; }
    public function initialValue() { return $this->_m_initialValue; }
    public function variableId() { return $this->_m_variableId; }
    public function parentCategoryId() { return $this->_m_parentCategoryId; }
}

class Category extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, Wtg $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_index = $this->_io->readU4le();
        $this->_m_name = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytesTerm(0, false, true, true), "UTF-8");
        if ($this->_root()->game() == 7) {
            $this->_m_isComment = $this->_io->readU4le();
        }
        if ($this->_root()->header()->fileVersion() > 7) {
            $this->_m_unknown0 = $this->_io->readU4le();
        }
        if ($this->_root()->header()->fileVersion() > 7) {
            $this->_m_parentId = $this->_io->readU4le();
        }
    }
    protected $_m_index;
    protected $_m_name;
    protected $_m_isComment;
    protected $_m_unknown0;
    protected $_m_parentId;
    public function index() { return $this->_m_index; }
    public function name() { return $this->_m_name; }
    public function isComment() { return $this->_m_isComment; }
    public function unknown0() { return $this->_m_unknown0; }
    public function parentId() { return $this->_m_parentId; }
}

class Header extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, Wtg $_parent = null, Wtg $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_magic = $this->_io->ensureFixedContents("\x57\x54\x47\x21");
        $this->_m_fileVersion = $this->_io->readU4le();
        if ($this->fileVersion() > 7) {
            $this->_m_game = $this->_io->readU4le();
        }
    }
    protected $_m_magic;
    protected $_m_fileVersion;
    protected $_m_game;
    public function magic() { return $this->_m_magic; }
    public function fileVersion() { return $this->_m_fileVersion; }
    public function game() { return $this->_m_game; }
}

class ParametersByName extends \Kaitai\Struct\Struct {
    public function __construct(string $name, \Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, Wtg $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_m_name = $name;
        $this->_read();
    }

    private function _read() {
        switch ($this->name()) {
            case "DestroyEffectBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveAbilityHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitWeaponIntegerField":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "CommentString":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveTriggerActionByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "MultiboardMinimizeBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsPointInRegion":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IsUnitDetected":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SaveLightningHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEIssueNeutralTargetOrderById":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetUnitTurnSpeedBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetUnitAcquireRangeBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerEventDefeat":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterDeathEvent":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityResearchTooltip":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LoadTrackableHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEConverUnitcodeToInt":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IsFogEnabled":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetLastTransmissionDurationBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "LoadSoundHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "KillDestructable":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetTimeOfDayScalePercentBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetRandomDirectionDeg":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetLastCreatedTerrainDeformation":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetItemPawnable":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IssueTargetItemOrderById":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "DisplayTextToForce":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityBooleanField":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWE_TP_SetTimeInterval":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetDestructableLife":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetQuestItemByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityIntegerFieldBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetItemID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzIsTargetIndicatorEnabled":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SaveGameExists":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IsUnitType":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetGroupByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetTimeOfDayScalePercentBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESyStemAnyUnitDamagedRegistTrigger":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetClickedDialogBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityResearchExtendedTooltip":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetRectFromLoc":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareTrackable":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetImagePositionBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzSetSpecialEffectScale":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GroupEnumUnitsInRangeOfLoc":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "GetUnitPropWindowBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "DisplayTimedTextToForce":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IsLocationInRegion":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "PanCameraToTimed":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetUnitByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "DisplayCineFilterBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LoadDialogHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "EnumItemsInRectBJMultiple":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetUnitTypeID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LoadFogModifierHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IsTerrainPathableBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetFogStateRect":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocationByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SaveTimerHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SaveTrackableHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveLightningByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzSetSpecialEffectY":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "MultiboardSetTitleTextColorBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableItemIDArray":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SaveSoundHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetVariable":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsPointBlightedBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "AsinBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GroupEnumUnitsInRect":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetUnitsOfPlayerAll":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LoadFogStateHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GroupTargetItemOrder":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "ExecuteFunc":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzSetSpecialEffectX":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "UnitDropItemSlot":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IsUnitAlly":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "LoadMultiboardItemHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "DialogAddButton":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "WaygateSetDestination":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "CreateCorpse":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareUnit":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableReal":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "OrMultiple":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "ForLoopBMultiple":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetChangingUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "CountUnitsInGroup":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "TerrainDeformRandom":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "YDWE_TP_GetRemainingTime":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEActorWalkProperties":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetUnitRallyPoint":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "ForForceMultiple":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWELogarithmLn":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableRealArray":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetSpellTargetUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetTextTagByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CheckItemStatus":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "AddUnitAnimationProperties":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetUnitCreepGuard":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CreateUbersplatBJ":
                $this->_m_body = new Parameters(8, $this->_io, $this, $this->_root);
                break;
            case "FirstOfGroup":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveGame":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetForceAllianceStateBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetUnitLookAt":
                $this->_m_body = new Parameters(6, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetUnitFoodUsed":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "EnableTrigger":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "EnumItemsInRectBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SaveWidgetHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "LoadQuestItemHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "CameraSetSourceNoiseEx":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityIntegerLevelField":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "RegionClearCellAtLoc":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetRescuer":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GroupPointOrderByIdLoc":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetItemIDByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetItemLevel":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetLastCreatedTimerDialogBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetUnitRescuable":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LoadWidgetHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetIntegerByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEDeg2R":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitAbilityCooldown":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityIcon":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEPlaceRandomUnit":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "SetSkyModel":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterDestDeathInRegionEvent":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetItemDropOnDeathBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetHeroLevel":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetForLoopIndexA":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveReal":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "LoadImageHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetPlayersEnemies":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetIntegerGameState":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetUnitStateSwap":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetUnitRallyDestructable":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveLeaderboardHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "AddUnitAnimationPropertiesBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetAbilityEffectBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveAbilityIDByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetEventDamageSource":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWEAIRecordLearn_sequence":
                $this->_m_body = new Parameters(6, $this->_io, $this, $this->_root);
                break;
            case "CreateItem":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEAddAIOrder":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "GetDestructableTypeId":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IssueNeutralTargetDestructableOrder":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "LoadTriggerConditionHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableUnitArray":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LeaderboardSetStyleBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityRealLevelArrayField":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterUnitInRangeSimple":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "DialogDisplay":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptActAnimSpeed":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LoadGroupHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "UnitRemoveBuffsBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEFlyEnable":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptActCameraLockReset":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESetAttackDamageWeaponType":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IsUnitInRangeXY":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetTriggerConditionByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "TerrainDeformationRippleBJ":
                $this->_m_body = new Parameters(8, $this->_io, $this, $this->_root);
                break;
            case "LeaderboardSetPlayerItemValueColorBJ":
                $this->_m_body = new Parameters(6, $this->_io, $this, $this->_root);
                break;
            case "SetDestructableOccluderHeight":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "OperatorComparePlayerSlotStatus":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetLocationY":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "CreateFogModifierRadius":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "SetCameraRotateMode":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableUnitID":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsCustomCampaignButtonVisibile":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveQuestByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LoadRegionHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetDoodadAnimationBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "ModuloReal":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetDestructableLoc":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveBoolexprByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IntegerTertiaryOp":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLightningByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "ResetTrigger":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "MultiboardSetItemValueColor":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "YDWEMemoryLeakHelperMapIsOpenMemoryLeakHelper":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetPlayerAlliance":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetUnitLevel":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveRegionHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "UnitAddTypeBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "ShowUnit":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEFadeFilterUnit":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveButtonHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "LoadDestructableHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterGameSavedEventBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveButtonByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetUnitColor":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "UnitPauseTimedLife":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzGetTriggerPlayerMouseButton":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerEventVictory":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "HaveStoredBoolean":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetHeroAgi":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetOrderPointLoc":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetUnitFoodUsed":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetCinematicCameraForPlayer":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "AddResourceAmountBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "StoreReal":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetSoundByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityBooleanLevelArrayField":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "CreateTimerBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetManipulatingUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "HaveStoredValue":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetSoundPositionLocBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetUnitIDByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CountLivingPlayerUnitsOfTypeId":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzAddAbilityIntegerLevelArrayFieldBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SaveDestructableHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetHeroLevel":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LockGameSpeedBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "CreateTimerDialog":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "RegionClearRect":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWELoadAbilityHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "UnitSuspendDecay":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "UnitAddIndicator":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "LeaderboardSetLabelColorBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetDialogByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "LoadDialogHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "ReviveHeroLoc":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveRegionByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptActAnimReset":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SaveQuestItemHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzRemoveAbilityBooleanLevelArrayFieldBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityRealLevelField":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetTriggerActionByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "LoadTriggerActionHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetStringByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityBooleanField":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "UnitAddAbility":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetLastAbilityCastingUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SubString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetForceOfPlayer":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "PlaySoundAtPointBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "ClearSelectionForPlayer":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "RescueUnitBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzGetUnitWeaponRealField":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IssueInstantTargetOrder":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareItemType":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GroupRemoveGroup":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "MultiboardSetItemsStyle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityIntegerField":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetSoundPlayPosition":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetBoolexprByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "StringCase":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetItemName":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetDestructableLife":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "CreateRegion":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "UnitResetCooldown":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "RemoveUnit":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IsUnitInTransportBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetMissionAvailableBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "TimerDialogDisplayForPlayerBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityRealLevelFieldBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetUserControlForceOff":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "OperatorComparePlayerControl":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetUnitBuildTime":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "AddSpellEffectByIdLoc":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SubStringBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetUnitExplodedBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveStringByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SaveDialogHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWECreateUnitPool":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetLastReplacedUnitBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptFog":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "YDWECoordinateY":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEIsItemSwitch":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetUnitLoc":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetEffectByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "MultiboardSetItemStyle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetAbilityTypeID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetRectCenter":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LeaderboardDisplay":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "PingMinimapEx":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "YDWEConverAbilcodeToInt":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "CreateUbersplat":
                $this->_m_body = new Parameters(9, $this->_io, $this, $this->_root);
                break;
            case "WaitForCondition":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareGameDifficulty":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetSoundFileDurationBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "ModifyGateBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocationByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzGetUnitWeaponStringField":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "TimerGetRemaining":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IsItemOwned":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetDoodadAnimationRect":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzSetSpecialEffectColorByPlayer":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "FlushParentHashtable":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzSetSpecialEffectAlpha":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzUnitDisableAbility":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "ShowInterface":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWESyStemItemCombineRegistTrigger":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "IsUnitInRangeLoc":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetMusicVolumeBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzGetItemRealField":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLightningByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterShowSkillEventBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzGetItemIntegerField":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "RectContainsItem":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetUnitManaBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "DisplayTextToPlayer":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitAttackCooldown":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzSetItemRealField":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareRadian":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "StringLength":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveDialogHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "GetRectWidthBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetOrderPointX":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "UnitApplyTimedLife":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerEventAllianceChanged":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetBooleanAnd":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "TimerStart":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterGameStateEvent":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptCamera":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "DoNothing":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SaveUnitPoolHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetMusicPlayPosition":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LoadAbilityHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "KillUnit":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetTournamentScore":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IfThenElseMultiple":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetRevivingUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "FogModifierStop":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LockGuardPosition":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetTriggerEventByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEMemoryLeakHelperDisplayLeaks":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "IsTriggerEnabled":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "DestructableRestoreLife":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetEventUnitState":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitBooleanField":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEIssueNeutralImmediateOrderById":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GroupTargetOrderById":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetUnitsInRectMatching":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEPlaceRandomItem":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetUnitMoveSpeed":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetPlayersByMapControl":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveQuestItemByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "MultiboardSetItemsIcon":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetUnitFlyHeight":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetUnitPropWindowBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzRemoveAbilityRealLevelArrayField":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWETimerPatternJumpAttack":
                $this->_m_body = new Parameters(9, $this->_io, $this, $this->_root);
                break;
            case "IsPlayerInForce":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "MakeUnitsPassiveForPlayer":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveLightningHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "IsItemVisible":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LoadBooleanBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareTriggerAction":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "MultiboardSetItemIconBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SaveQuestHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "EnableCreepSleepBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IsUnitRace":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetUnitUseFoodBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzEndUnitAbilityCooldown":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "RandomDistReset":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetLastPlayedMusic":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWETimerRemoveItem":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitStringField":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetHeroXP":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetLastCreatedLightningBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "OperatorReal":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityIntegerField":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSpecialEffectClearSubAnimations":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWELocalVariableEnd":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetFilterPlayer":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityIntegerLevelFieldBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "QuestItemSetCompletedBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "ModuloInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptSubtitleLine":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetForLoopIndexB":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "LoadTextTagHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetRectCenterY":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerUnitMaxAllowed":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "TimerDialogSetTitleColor":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "RAbsBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetTextTagText":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SmartCameraPanBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetImageType":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsHeroUnitId":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEI2ItemId":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetFogStateRadius":
                $this->_m_body = new Parameters(6, $this->_io, $this, $this->_root);
                break;
            case "ShowUbersplat":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetForceByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CreateTextTagLocBJ":
                $this->_m_body = new Parameters(8, $this->_io, $this, $this->_root);
                break;
            case "SetDestructableLifePercentBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareRegion":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableInteger":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityActivatedExtendedTooltip":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "EnableUserControl":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "RemoveDestructable":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitName":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "UnitSetUpgradeProgress":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterTimerExpireEventBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWERemoveAttackWaveByUnitID":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetTimeOfDay":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "DestroyTrigger":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LoadTextTagHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "CameraSetEQNoiseForPlayer":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetLastCreatedDestructable":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterUnitEvent":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterEnterRegion":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CinematicFilterGenericBJ":
                $this->_m_body = new Parameters(11, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetBoolexprByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetPlayerTaxRateBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEManaChange":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetDestructableByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "DestroyLeaderboardBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetTriggeringTrigger":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetAmbientDaySound":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetItemIDByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "MultiboardSetItemsValueColor":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "UseTimeOfDayBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "ResetUbersplat":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "StoreInteger":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "GetFoodUsed":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetHeroAgi":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "OperatorComparePoint":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "MoveRectToLoc":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzGetLocalSpecialEffectZ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "ShowImageBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SelectUnitSingle":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetTriggerActionID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IsUnit":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetItemIntegerFieldBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptCameraIgnoreTerrain":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IssueTargetDestructableOrder":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetDestructableName":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetUnitRallyDestructable":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetHeroStr":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SaveUnitHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzSetEventDamage":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzSetItemExtendedTooltip":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CreateImageBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "SaveItemPoolHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SaveTimerHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "UnitAddItem":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IAbsBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareTimer":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetHeroXP":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "ModifyHeroStat":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityStringLevelField":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableItem":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityExtendedTooltip":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "UnitPoolRemoveUnitType":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "AddSpecialEffectLoc":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetEventTargetUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetUnitPointValueByType":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveEffectHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "GetRandomPercentageBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWELoadAbilityHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "DialogSetMessageBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetImageRender":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetItemLoc":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "QuestSetEnabled":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveTimerByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetLastCreatedTimerBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SelectGroupBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetUnitScale":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "UnitRemoveBuffBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsQuestItemCompleted":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetMultiboardID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetTriggerEventID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESavePlayerByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEIssueNeutralTargetDestructableOrderById":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "DestroyMultiboard":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "Location":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetTriggerConditionID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "AndMultiple":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetCurrentCameraBoundsMapRectBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetUnitAnimation":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "UnitRemoveAbility":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "RMinBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IssueNeutralTargetItemOrder":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "PauseGameOn":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "StartMeleeAI":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetUnitRallyUnit":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetDestructableMaxLifeBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsFogMaskEnabled":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "TerrainDeformationWaveBJ":
                $this->_m_body = new Parameters(6, $this->_io, $this, $this->_root);
                break;
            case "GetTransportUnitBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzGetLocalUnitZ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IssueNeutralTargetDestructableOrderById":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "MultiboardAllowDisplayBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveUnitByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetTextTagVelocityBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetTextTagID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "QueueDestructableAnimationBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "ShowUnitHide":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "CameraClearNoiseForPlayer":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SelectHeroSkill2":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareButton":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "UnitUseItemDestructable":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GroupPointOrder":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzGetUnitArmor":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "ResetTerrainFogBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzItemRemoveAbility":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetLocationZ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "HaveSavedValue":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetTextTagPosBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzRemoveAbilityStringLevelArrayField":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWECreateEwsp":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptActAnimPlay":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityRealField":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveDestructableByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzGetUnitBaseDamage":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetLastCreatedButtonBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "TriggerSleepAction":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzBitOr":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWECreateQuestItem":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "LoadUbersplatHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetLastCreatedFogModifier":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "CreateQuest":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableIntegerArray":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetUnitPointValue":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWETimerRunTrigger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityIcon":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "PauseCompAI":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityActivatedPosY":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerAbilityAvailable":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "OperatorString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "LeaderboardGetLabelText":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWERad2R":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEExitLoop":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWEItemAbilityStorage":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityBooleanLevelFieldBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveBoolexprByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLastItemPool":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWEIsTriggerEventId":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetCameraOrientController":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SaveSoundHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableItemIDArray":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetTextTagColor":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "FogEnable":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IsPlayerRacePrefSet":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetLearnedSkillBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetRescueBuildingColorChangeBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "DisplayTimedTextToPlayer":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "MoveLightningEx":
                $this->_m_body = new Parameters(8, $this->_io, $this, $this->_root);
                break;
            case "LoadFogModifierHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableEffectArray":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GroupImmediateOrderBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "UnitUseItem":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SaveUbersplatHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveDialogByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityResearchTooltip":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsQuestDiscovered":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetRectMaxY":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWELogarithmLg":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWES2ItemId":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetTerrainVarianceBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "R2S":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetCameraTargetPositionY":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetImageAboveWater":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterEnterRectSimple":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveMultiboardItemByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "DestroyGroup":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterLeaveRegion":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsTriggerQueueEmptyBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetTrackableByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "ShowUnitShow":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IssueBuildOrderById":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "StoreString":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptPointEffect":
                $this->_m_body = new Parameters(6, $this->_io, $this, $this->_root);
                break;
            case "LeaderboardDisplayBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveForceByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "MeleeStartingResources":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveItemIDByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareRace":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "ResetUnitLookAt":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IsLocationMaskedToPlayer":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetPlayerTypedUnitCount":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "IsUnitIllusionBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveAndChangeLevelBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LoadForceHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "UnitDamagePointLoc":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitDiceNumber":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "CreateQuestItemBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "UnitDropItemPointLoc":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IssuePointOrderByIdLoc":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareDestructible":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerTechResearchedSwap":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LeaderboardRemovePlayerItemBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableGroupArray":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "WaygateGetDestinationX":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "CameraSetupApplyForPlayerSmooth":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "GetOrderTargetItem":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityActivatedPosY":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzGetItemTooltip":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "PlayThematicMusicExBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzAddAbilityIntegerLevelArrayField":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "GetGameDifficulty":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "ModifyHeroSkillPoints":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "RSignBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetCameraTargetPositionX":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "LoadRealBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterGameLoadedEventBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "TerrainDeformationRandomBJ":
                $this->_m_body = new Parameters(6, $this->_io, $this, $this->_root);
                break;
            case "SetUnitAbilityLevelSwapped":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LoadTriggerConditionHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "Atan":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetLocalPlayer":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "WaygateGetDestinationY":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityStringFieldBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWECreateItemPool":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWESavePlayerByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "Sin":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzSetSpecialEffectZ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetTextTagFadepointBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableAbilityIDArray":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "QuestSetEnabledBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "RecycleGuardPosition":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitRealFieldBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GroupItemTargetOrderById":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetRectHeightBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetSoundPosition":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareItem":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GroupClear":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "RegionAddCell":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "ChooseRandomNPBuildingBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "TimerGetTimeout":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveRectByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "DestroyFogModifier":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveAbilityIDByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterLeaveRegionSimple":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "ChooseRandomItemBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "UnitAddSleepPerm":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "MultiboardSetTitleTextColor":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "YDWER2Deg":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetStoredBoolean":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWECinematicCameraDisable":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "MultiboardSetItemValue":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEConverOrdercodeToInt":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzGetItemIconPath":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IssuePointOrderLocBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetTextTagByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IssueImmediateOrderById":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CompareRectsBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "exitwhen":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzSetItemTooltip":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetBooleanOr":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "EnableOcclusion":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "UnitRemoveItemSwapped":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CameraSetupApplyForPlayer":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "IssuePointOrder":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveUnitIDByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "UnitAddItemByIdSwapped":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "UnitIgnoreAlarm":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "MultiboardGetItem":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "CinematicModeExBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetCameraField":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LoadLocationHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SaveStringBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityBooleanLevelField":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareHeroSkill":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "UnitRemoveType":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveBooleanByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetUnitManaPercent":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "MultiboardClear":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveUnitPoolHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetCameraBoundsToRectForPlayerBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "FlushParentHashtableBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableRectArray":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IssueNeutralTargetOrder":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "CreateUnitPool":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptActColour":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableUnitID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetLearnedSkill":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "TransmissionFromUnitTypeWithNameBJ":
                $this->_m_body = new Parameters(10, $this->_io, $this, $this->_root);
                break;
            case "RotateCameraAroundLocBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareTerrainType":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "UnitAddIndicatorBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveGroupByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetTrainedUnitType":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerUnitEventSimple":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "FlushChildHashtableBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "VolumeGroupSetVolume":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "EnumDestructablesInCircleBJMultiple":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerHandicapXPBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "RestartGame":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "CreateForce":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "QueuedTriggerGetIndex":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetTriggerEvalCount":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "AddSpellEffectByIdLocB":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetTerrainVariance":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitAbilityManaCost":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SaveEffectHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "OperatorRadianMultiply":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzItemRemoveAbilityBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "RandomItemInRectSimpleBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IssueNeutralImmediateOrder":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEHeroMaxSkillAI":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetUnitLifeBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetTimerByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetAllUnitTypeSlots":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IsSuspendedXP":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "UnitShareVision":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "Tan":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableBooleanArray":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "InitGameCache":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetDoodadAnimation":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "DestroyMultiboardBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "PlayCinematic":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetResearchingUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "IfThenElse":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "PlayThematicMusic":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "ResetUnitAnimation":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzSpecialEffectAddSubAnimation":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityStringLevelField":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "MultiboardMinimize":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityRealLevelArrayFieldBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "DestructableAddIndicatorBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "TimerDialogSetTimeColor":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetPlayerByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveAbilityHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEAttackWaveTimer":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "YDWERemoveAttackWaveReturnTimer":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetLastMovedItemInItemSlot":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "LoadUnitHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetUnitMoveSpeed":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityActivatedIcon":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetUnitTypeSlots":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SaveTriggerActionHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetReservedLocalHeroButtons":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareMeleeDifficulty":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetLastCreatedQuestItemBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetBlightRectBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWECameraPeriod":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetItemY":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "OffsetRectBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEWriteToScene":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetButtonByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SelectUnitForPlayerSingle":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzGetItemBooleanField":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetUnitFacing":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "LoadLightningHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareReal":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GroupTargetDestructableOrderS":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzSetItemBooleanFieldBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetCameraTargetPositionLoc":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "TriggerClearConditions":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "QuestMessageBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "FlushStoredMissionBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetUnitRallyPoint":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "FlushStoredInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "ReloadGameCachesFromDisk":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "MultiboardDisplayBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "UnitId2StringBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GroupTargetItemOrderById":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESyStemAbilityCastingOverRegistTrigger":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "UnitAddItemSwapped":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GroupEnumUnitsInRangeOfLocCounted":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveLightningByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "MultiboardReleaseItem":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IsUnitGroupEmptyBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetAllyColorFilterState":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "DialogAddButtonBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsUnitGroupInRectBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetDestructableInvulnerableBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityStringField":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "CustomDefeatBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CreateDestructableZA":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "FlushChildHashtable":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "ItemPoolAddItemType":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "DestroyTextTagBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "ClearTextMessages":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetConvertedPlayerId":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveFogModifierHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareUnitCode":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveTimerByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "CopySaveGameBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWE_TP_NewTimerPeriodic":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerUnitAvailableBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzGetUnitMaxHP":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GroupTargetOrderByIdD":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "CreateLeaderboardBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "QuestSetDiscoveredBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveLeaderboardByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "CameraSetTargetNoiseEx":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetSpellAbilityId":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "LoadHashtableHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "FlushGameCacheBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetCameraOrientControllerForPlayerBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetUnitAbilityLevel":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LeaderboardSortItemsBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetHeroStatBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetSummoningUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzSetSpecialEffectYaw":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzGetItemDescription":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveSoundByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "RemoveLocation":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEFlushMissionByInteger":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWETimerDestroyEffect":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "LoadButtonHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveDestructableByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IsLocationFoggedToPlayer":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveTriggerEventByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LoadQuestHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetLastCreatedTextTag":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "CreateMultiboardBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "ForceAddPlayerSimple":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEConverItemcodeToInt":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzUnitCancelTimedLife":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LoadEffectHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWES2Id":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveTriggerEventByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetPlayerHandicapBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerHandicapXP":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWE_PreloadSL_Save":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "RemoveItemFromAllStock":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetDyingDestructable":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "DestroyItemPool":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetTerrainCliffLevelBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "FlushStoredBoolean":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "FogMaskEnableOff":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetRegionID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetItemLifeBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerTeam":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "AddPlayerTechResearched":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LoadPlayerHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptFade":
                $this->_m_body = new Parameters(6, $this->_io, $this, $this->_root);
                break;
            case "GetItemOfTypeFromUnitBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetUnitFacingToFaceUnitTimed":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzAddAbilityBooleanLevelArrayFieldBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetRandomSeed":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetTriggeringRegion":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetNextLevelBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "ForGroupMultiple":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetLocationX":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetUnitAbilityLevelSwapped":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "UnlockGameSpeedBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWEParticlePeriod":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzUnitHideAbility":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "StoreUnitBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerChatEvent":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IMinBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SaveGroupHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetForceID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "UnitApplyTimedLifeB":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetEnteringUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "TriggerAddAction":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableUnit":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "ChooseRandomItemExBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "ResetToGameCamera":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GroupAddUnitSimple":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetBlightRadiusLocBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "IsMultiboardMinimized":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzSetItemRealFieldBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "UnitCountBuffsExBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityIntegerLevelArrayField":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "BlzGetUnitAbilityCooldown":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SaveLocationHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "UnitDropItem":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "ResumeTimer":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "UnitRemoveBuffs":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "OperatorDegreeMultiply":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "LoadTriggerHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SaveGameCacheHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityPosX":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "HaveStoredString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "MultiboardSetItemStyleBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "IncUnitAbilityLevel":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SaveHashtableHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "LeaderboardSetPlayerItemLabelColorBJ":
                $this->_m_body = new Parameters(6, $this->_io, $this, $this->_root);
                break;
            case "SetTextTagPermanentBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetTextTagSuspendedBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "LoadButtonHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityRealFieldBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IsQuestFailed":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LoadLeaderboardHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveTrackableByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerEvent":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetUnitY":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityRealLevelArrayField":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "AddLightningEx":
                $this->_m_body = new Parameters(8, $this->_io, $this, $this->_root);
                break;
            case "SetHeroStr":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "UnitUseItemPointLoc":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareRegionR":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "CreateTimer":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "DefeatConditionSetDescriptionBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetIssuedOrderIdBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetRandomReal":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "TimerDialogDisplay":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "String2OrderIdBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetLastRestoredUnitBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "IsTriggerQueuedBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerEventEndCinematic":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetWaterBaseColorBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetUnitAnimationWithRarity":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "CosBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetEventDamage":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "AttachSoundToUnitBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "DestroyLightningBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IssueNeutralPointOrder":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "IsUnitInForce":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "DestroyImage":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetEffectID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetUnitVertexColorBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "GetPlayersAll":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitDiceSides":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LoadPlayerHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GroupEnumUnitsInRangeCounted":
                $this->_m_body = new Parameters(6, $this->_io, $this, $this->_root);
                break;
            case "CreateTextTagUnitBJ":
                $this->_m_body = new Parameters(8, $this->_io, $this, $this->_root);
                break;
            case "GetUnitTurnSpeed":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "EnableWorldFogBoundary":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetDetectedUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "IsPlayerObserver":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IsUnitHiddenBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWENewItemsFormula":
                $this->_m_body = new Parameters(13, $this->_io, $this, $this->_root);
                break;
            case "RemoveSaveDirectoryBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LoadGroupHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetHandleIdBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareImage":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "PauseAllUnitsBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "ClearSelection":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SaveBoolean":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "GroupEnumUnitsInRectCounted":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityIntegerLevelField":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitWeaponStringFieldBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "EnableDragSelect":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "PanCameraToTimedLocWithZForPlayer":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetBlightRect":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SaveButtonHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetTerrainFogEx":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "YDWETimerDestroyTextTag":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "ForceRemovePlayerSimple":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWE_TP_PauseTimerPeriodic":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "UnitInventorySizeBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzEnableSelections":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsFoggedToPlayer":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "StringHashBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzSetSpecialEffectPitch":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWERemoveAttackWaveByTimer":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWECreateQuest":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "FlushStoredUnit":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IsQuestRequired":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableReal":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetMultiboardItemByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveEffectByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzGetUnitCollisionSize":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveBooleanByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableRealArray":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetLastCreatedLeaderboard":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SaveUbersplatHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerFlagBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveDialogByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IsItemSellable":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetStoredIntegerBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzGetItemExtendedTooltip":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "TriggerExecute":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableEffect":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetUnitPositionLocFacingBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWE_PreloadSL_Set":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "Deg2Rad":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "EnableMinimapFilterButtons":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitMaxMana":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "AddUnitToAllStock":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "AdjustPlayerStateBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "TerrainDeformWave":
                $this->_m_body = new Parameters(10, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterDialogEvent":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetEventPlayerState":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetTerrainPathableBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzBitAnd":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetFilterDestructable":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityActivatedPosX":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzGetTriggerPlayerMousePosition":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitWeaponBooleanFieldBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetSoundOffsetBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "UnitDropItemSlotBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetCameraEyePositionY":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityCooldown":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetStoredString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetButtonByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerTaxRate":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityBooleanLevelArrayFieldBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "DestroyForce":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LoadRegionHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableStringArray":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "CreateDestructableLoc":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "PauseTimer":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetUnitFoodMade":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "DestroyUnitPool":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetAltMinimapIcon":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "CameraSetupGetDestPositionLoc":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveTextTagByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityBooleanLevelField":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "IssueItemTargetOrderId":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "PlayerSetLeaderboard":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CreateNUnitsAtLocFacingLocBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLeaderboardByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "RandomDistChoose":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "AddUnitToStockBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetDestructableByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsVisibleToPlayer":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IsPlayerAlly":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptActWalk":
                $this->_m_body = new Parameters(6, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetQuestByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "AddSpecialEffectLocBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetOrderTargetUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "RemoveRegion":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetItemType":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveGroupHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "UnitWakeUpBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "UnitDamageTarget":
                $this->_m_body = new Parameters(8, $this->_io, $this, $this->_root);
                break;
            case "SaveAgentHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "GetLastCreatedImage":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterLeaveRectSimple":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableItemArray":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetRect":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "TriggerRemoveCondition":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CreateTrigger":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "CinematicModeBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "PlayerGetLeaderboardBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWETimerDestroyLightning":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "TimerDialogDisplayBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetUnitPositionLoc":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "AddHeroXPSwapped":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LeaderboardSetPlayerItemValueBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveRealByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetLightningColorRBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterUnitManaEvent":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetIntegerByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzGetTriggerPlayerMouseX":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocationID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterTrackableHitEvent":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetHeroProperName":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetStringByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptActCameraFace":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "GetHeroInt":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzGetLocalSpecialEffectX":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetLightningColorGBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzSetSpecialEffectTimeScale":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "OperatorComparePlayerColor":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptActCameraFaceReset":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetAIDifficulty":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SelectUnitAdd":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetItemDroppableBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableLocationArray":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "FinishUbersplat":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LoadBooleanExprHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetLastCreatedDefeatConditionBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptSystemPeriod":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetUnitOwner":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerMouseEventBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetTeams":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "RemoveItemFromStockBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWECinSActor":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "RemoveAllGuardPositions":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWETimerRunPeriodicTriggerOver":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "R2SW":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "UnitRemoveBuffNT":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsUnitMasked":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetSpecialEffectPosition":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveButtonByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetPlayerId":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveMultiboardItemByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "TriggerClearActions":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetRegionByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "ForLoopB":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "WaygateActivateBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetConstructingStructure":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableRect":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveMultiboardByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareItemCode":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LoadSoundHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetUnitPosition":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "AddSpecialEffectTarget":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableUnitArray":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveStringByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "UnitRemoveBuffsExBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareDialog":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "VolumeGroupResetBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "CreateFogModifierRadiusLocBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "SetWaterDeforms":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "PolarProjectionBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "TerrainDeformRipple":
                $this->_m_body = new Parameters(10, $this->_io, $this, $this->_root);
                break;
            case "BlzSetItemStringFieldBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerAllianceStateBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetDestructableOccluderHeight":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "PlayThematicMusicEx":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "QueuedTriggerAddBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "UnitRemoveAbilityBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetStoredBooleanBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LoadUnitHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GroupEnumUnitsOfType":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LoadReal":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetPlayerColor":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetPlayerRace":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "FogMaskEnableOn":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareTrigger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterUnitLifeEvent":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetRectMinX":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "UnitApplyTimedLifeBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareTechCode":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "ForceUIKeyBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CreateBlightedGoldmine":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "IssueImmediateOrder":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetTriggerByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEIssueNeutralTargetItemOrderById":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetSoundDistances":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetUnitState":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "StoreBoolean":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "IssueTargetOrderById":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterGameStateEventTimeOfDay":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "RandomDestructableInRectSimpleBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetUnitManaPercentBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetCameraEyePositionX":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "ConditionalTriggerExecute":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityPosY":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetPlayerTechCountSimple":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IssueBuyUnitOrder":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "DialogDestroy":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "DistanceBetweenPoints":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityStringLevelArrayField":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "GetUnitPropWindow":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetEventGameState":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "UnitDamagePoint":
                $this->_m_body = new Parameters(11, $this->_io, $this, $this->_root);
                break;
            case "SaveMultiboardItemHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetMapMusic":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LoadDestructableHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LoadQuestItemHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableUnitIDArray":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetEnumDestructable":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "MoveLightningLoc":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SelectGroupForPlayerBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetRect":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetUnitWoodCost":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "RestoreUnitLocFacingPointBJ":
                $this->_m_body = new Parameters(6, $this->_io, $this, $this->_root);
                break;
            case "UnitRemoveTypeBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsUnitPausedBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "ShowInterfaceForceOff":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "PlaySoundBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetTextTagPosUnitBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzItemAddAbility":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "ShowCustomCampaignButton":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetCameraBounds":
                $this->_m_body = new Parameters(8, $this->_io, $this, $this->_root);
                break;
            case "GetTriggerExecCount":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableLocationArray":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "UnitInventoryCount":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "UnitShareVisionBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveSoundByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzGetUnitDiceSides":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveRegionByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "WaygateIsActiveBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "PlayMusicExBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "RegionAddCellAtLoc":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzGetItemStringField":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetTerrainCliffLevel":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "DialogClearBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LoadRectHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLastPoolAbstractedUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetAbilityName":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "Atan2BJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableUnit":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetCameraTargetControllerNoZForPlayer":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "GroupEnumUnitsInRange":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "EnablePreSelect":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetPlayerScore":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsPointBlighted":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerTechMaxAllowed":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableGroupArray":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveItemByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "S2R":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetMapMusicRandomBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveItemIDByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "QueuedTriggerCountBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetUnitDefaultMoveSpeed":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveQuestHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "ForForce":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveLeaderboardByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWELifeChange":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitWeaponIntegerFieldBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SavePlayerHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "UnitCanSleepBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveTimerDialogHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "UnitId2OrderIdBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveTriggerActionByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BJDebugMsg":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "CustomVictoryBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IssueTargetOrder":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "EndThematicMusic":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "MoveLocation":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableItem":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzGetUnitMaxMana":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LoadItemHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LoadTimerDialogHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SaveAndLoadGameBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "CameraSetupApplyForceDuration":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveForceByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityTooltip":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SaveForceHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "RandomDistAddItem":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IssueNeutralTargetItemOrderById":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzUnitInterruptAttack":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptNextScene":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "AddWeatherEffectSaveLast":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CreatePermanentCorpseLocBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "BlzRemoveAbilityIntegerLevelArrayFieldBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "LoadTriggerEventHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "FogModifierStart":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "AddHeroXP":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "CreateImage":
                $this->_m_body = new Parameters(11, $this->_io, $this, $this->_root);
                break;
            case "PingMinimapLocForForce":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "OperatorDegreeAdd":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CreateTimerDialogBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzGetUnitAttackCooldown":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzEnableTargetIndicator":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetDestructableX":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "MultiboardSetColumnCount":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetItemTypeID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "S2I":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveLocationByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetGameDifficulty":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetTrainedUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "IssueBuyItemOrder":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "CinematicFadeBJ":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "MultiboardGetColumnCount":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWETimerSystemGetRunIndex":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "LeaderboardSetLabelColor":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "OperatorRadianAdd":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetSpellTargetY":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetTriggerActionByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerAbilityAvailableBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LoadQuestHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzGetUnitWeaponBooleanField":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "UnitSetCanSleepBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerOnScoreScreen":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetEventPlayerChatString":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "StoreRealBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "RegionAddRect":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetThematicMusicOffsetBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "MultiboardDisplay":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetUnitY":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "LoadTimerHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IssueTargetOrderBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEAngleBetweenUnits":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetItemUserData":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IssuePointOrderLoc":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetCancelledStructure":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SaveImageHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "GetBuyingUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetCameraEyePositionZ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetUnitAnimationByIndex":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GroupTargetOrder":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetStoredRealBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IsItemPawnable":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableIntegerArray":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveTriggerConditionByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SquareRoot":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitRealField":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetMultiboardByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsUnitVisible":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "OperatorComparePlayer":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetExpiredTimer":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlightGoldMineForPlayer":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityStringLevelFieldBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "GetUnitState":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "FogEnableOff":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetLightningColorBBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetStoredStringBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetTriggerName":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetUnitX":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "LeaderboardSetValueColorBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableItemArray":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SaveFogStateHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetMusicVolume":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareMouseButton":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SaveTriggerEventHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "ResetToGameCameraForPlayer":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveTimerDialogByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetUnitIDByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptPlaySound":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityRealLevelField":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWE_PreloadSL_Load":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "GetDyingUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableRectArray":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetLastRemovedItem":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetSpellTargetLoc":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzSetItemBooleanField":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetTerrainType":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "EndGame":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "RectFromCenterSizeBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetItemByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "QuestSetCompletedBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzRemoveAbilityRealLevelArrayFieldBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "QueuedTriggerClearInactiveBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "RestoreUnitLocFacingAngleBJ":
                $this->_m_body = new Parameters(6, $this->_io, $this, $this->_root);
                break;
            case "BlzAddAbilityBooleanLevelArrayField":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "ShowUbersplatBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetEventDetectingPlayer":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "IssueTargetItemOrder":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "ChangeElevatorWalls":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetForLoopIndexB":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "OperatorRadianDivide":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GroupItemTargetOrderBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "CameraSetTargetNoiseForPlayer":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "ForLoopVar":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "GroupPointOrderLoc":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEJumpTimer":
                $this->_m_body = new Parameters(6, $this->_io, $this, $this->_root);
                break;
            case "LoadStr":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "RemoveWeatherEffectBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "PlayMusicBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "PauseUnitBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetTriggerUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "StringIdentity":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableItemID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetPlayerTechMaxAllowedSwap":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SelectUnitRemove":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "MeleeStartingUnits":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetCameraBoundsMapRect":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetRescueUnitColorChangeBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzIsUnitSelectable":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetLastCreatedGroup":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "IssueItemTargetOrderS":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "EnableWorldFogBoundaryBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityManaCost":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "UnitDamageTargetBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "GetLastCreatedEffectBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "ISignBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "FlashQuestDialogButtonBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "LoadMultiboardHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SaveUnitHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetGroupID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveTriggerByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "AtanBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptActFace":
                $this->_m_body = new Parameters(8, $this->_io, $this, $this->_root);
                break;
            case "GetOrderPointY":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "IsUnitOwnedByPlayer":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SaveRectHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "Rad2Deg":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareDegree":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerHandicap":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetDoodadAnimationRectBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveMultiboardByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LoadTimerHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetUnitBlendTimeBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEMemoryLeakHelperProtectLastCaughtHandle":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "AddTriggerEvent":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsUnitInRegion":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLeaderboardByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerOnScoreScreenBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CreateDestructableZ":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "SetTextTagVelocity":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetUnitsInRectAll":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWETimerRunPeriodicTrigger":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "UnitItemInSlotBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CreateGroup":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerSelectionEventBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetCameraTargetController":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "AddSpellEffectTargetById":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "EnumDestructablesInCircleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "MultiboardSetItemIcon":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "LoadUnitPoolHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetLastCreatedQuestBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzSetSpecialEffectColor":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "LoadItemHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetRevivableUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "LeaderboardClear":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "CreateCorpseLocBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "MeleeStartingUnitsForPlayer":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "WaygateGetDestinationLocBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveQuestItemHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "AddItemToStockBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "GetResearched":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetDestructableAnimationSpeed":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetItemLifeBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetSpecialEffectPositionLoc":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "StopSoundBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "StoreIntegerBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SinBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveStr":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "GetHandleId":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetAbilitySoundBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "TerrainDeformCrater":
                $this->_m_body = new Parameters(6, $this->_io, $this, $this->_root);
                break;
            case "IssuePointOrderById":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetTimerDialogByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityActivatedExtendedTooltip":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "UnitCountBuffsEx":
                $this->_m_body = new Parameters(8, $this->_io, $this, $this->_root);
                break;
            case "GetUnitsInRangeOfLocAll":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "EnableSelect":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetItemIntegerField":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetDecayingUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzIsUnitInvulnerable":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "ForceUICancelBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetSpellTargetItem":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareOrderCode":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetFoodMade":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveTriggerHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "GetHeroSkillPoints":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveTriggerHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "OperatorDegreeSubtract":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "LoadTriggerHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LoadLocationHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetStackedSoundBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "AddWeatherEffect":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "UnitIsSleepingBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEMemoryLeakHelperProtectEffect":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "I2R":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "ForLoopAMultiple":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetSoundVolumeBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEDoubleItemSlotByItem":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetTextTagLifespanBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "TimerDialogSetTitleColorBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "SetLightningColorBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "YDWEWaitForLocalVariable":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzAddAbilityStringLevelArrayField":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetTextTagColorBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "SaveLocationHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "LoadImageHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "ReviveHero":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "UnitSetUsesAltIconBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "DialogAddQuitButton":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "IsUnitFogged":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetRectByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetCreepCampFilterState":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveRectByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetTimerID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveLeaderboardHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "MultiboardSetItemColorBJ":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "SetCameraFieldForPlayer":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "GetLastHauntedGoldMine":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetItemCharges":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareUnitState":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "ShowImage":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEInitCinematicSystem":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetLearningUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "DisableTrigger":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzGetLocalSpecialEffectY":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWECinSInitTempPoint":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveItemHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzSetHeroProperName":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetTerrainTypeBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "IsNoVictoryCheat":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableAbilityID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "RemovePlayer":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetUnitPositionLocFacingLocBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "CountPlayersInForceBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetUnitAcquireRange":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetLastAbilityTargetUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "LoadEffectHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "UnitDropItemTargetBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWECoordinateX":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptActCameraLock":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "RemoveUnitFromStockBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "ForLoopVarMultiple":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "PauseTimerBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "QueuedTriggerRemoveByIndex":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IsUnitSelected":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "LoadTriggerActionHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "CreateDeadDestructableZA":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "GroupRemoveUnit":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWELocalVariableInitiliation":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerFlag":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzSetItemIconPath":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "DoesUnitGenerateAlarms":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzGetUnitAbilityCooldownRemaining":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "StopCamera":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveLocationByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWE_PreloadSL_GetFile":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "CreateDeadDestructableLocBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "GetUnitX":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetItemX":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "ExplodeUnitBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetIntegerGameState":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LoadItemPoolHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "MapInitializationEvent":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableUnitIDArray":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWETimerRemoveUnit":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLeaderboardID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLightningID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "PreloadEnd":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "QuestItemSetDescriptionBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerState":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetSoldItem":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetTerrainTypeBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "RenameSaveDirectoryBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "PolledWait":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetAttacker":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetRandomLocInRect":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "ConvertedPlayer":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetCameraQuickPosition":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "AddLightningLoc":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEActorCreate":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GroupPickRandomUnit":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEPlayScene":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareTriggerCondition":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "FlushStoredString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetTriggerConditionByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEAroundSystem":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "UnitStripHeroLevel":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CreateItemLoc":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsUnitInvisible":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "FlushGameCache":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetBlight":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "LoadFogStateHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "AddSpellEffectById":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzSetSpecialEffectTime":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityActivatedPosX":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzIsSelectionCircleEnabled":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "MultiboardSetItemsWidth":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzGetUnitAbility":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "UnitHasItemOfTypeBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "RegionClearCell":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "EndThematicMusicBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "OffsetLocation":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetDestructableID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveTrackableHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "GetLastCreatedItem":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetTextTagAgeBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzPlaySpecialEffect":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IssueUpgradeOrderByIdBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "LoadIntegerBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWETimerPatternRushSlide":
                $this->_m_body = new Parameters(12, $this->_io, $this, $this->_root);
                break;
            case "Rect":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SaveBooleanBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetPlayerID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "Atan2":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CreateLeaderboard":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityResearchExtendedTooltip":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "UnitRemoveItemFromSlotSwapped":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "AngleBetweenPoints":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "ForceClear":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "CameraSetupGetField":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetItemTypeId":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerAlliance":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableGroup":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "UnitPoolAddUnitType":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SaveDefeatConditionHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "IssueNeutralTargetOrderById":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEDistanceBetweenUnits":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEHeroLearnSkillAI":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveItemByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "MeleeClearExcessUnits":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetTerrainFogExBJ":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "GetOrderedUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWE_PreloadSL_SetFile":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEGeneralBounsSystemUnitSetBonus":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityPosY":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "MultiboardSetItemsValue":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetUnitArmor":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SaveTimerDialogHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetSoundByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "AddLightning":
                $this->_m_body = new Parameters(6, $this->_io, $this, $this->_root);
                break;
            case "IssueTargetOrderByIdD":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "TriggerEvaluate":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetPlayerTeam":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetItemPlayerBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetMultiboardItemID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzGetUnitRealField":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityIntegerLevelArrayField":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetAllItemTypeSlots":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveAbilityHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "IsDestructableDeadBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "OperatorInt":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetUbersplatRender":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CustomScriptCode":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveEffectByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SaveFogStateHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterEnterRegionSimple":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "MultiboardSetRowCount":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSpecialEffectRemoveSubAnimation":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "LeaderboardSetPlayerItemStyleBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "SaveForceHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "UnitItemInSlot":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "KillSoundWhenDoneBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetSellingUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "DestroyTimer":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEInitHashtable":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerAllianceChange":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "HaveStoredUnit":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "StartTimerBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetTimerByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "UnitUseItemPoint":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEMeatHook":
                $this->_m_body = new Parameters(8, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterTimerExpireEvent":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "RectContainsLoc":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityPosX":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsTimerDialogDisplayed":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetConstructedStructure":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetTriggerID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveMultiboardItemHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SaveFogModifierHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveUnitByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetPlayersMatching":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetCameraField":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetLastCreatedHashtableBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWEAIRecordAbility":
                $this->_m_body = new Parameters(6, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableBoolean":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzRemoveAbilityIntegerLevelArrayField":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterUnitStateEvent":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "LoadMultiboardHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IsDestructableInvulnerableBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "DisableRestartMission":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzRemoveAbilityBooleanLevelArrayField":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableBoolean":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "FlushStoredReal":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "CameraResetSmoothingFactorBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetRectCenterX":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitWeaponRealFieldBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "DestructableAddIndicator":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "PlaySoundOnUnitBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetGroupByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetLocalizedString":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LoadTrackableHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LeaderboardSetValueColor":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "YDWER2Rad":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "TimerDialogSetTitleBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveQuestByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetUnitPropWindow":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "PauseGame":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "MeleeStartingHeroLimit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityStringLevelArrayField":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "UnitUseItemTarget":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SelectUnitRemoveForPlayer":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IssueTrainOrderByIdBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetUnitUserData":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "UnitGenerateAlarms":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "String2UnitIdBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetSaveBasicFilename":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWELogarithmLog":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetCurrentCameraSetup":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "MeleeStartingAI":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "ClearTextMessagesBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "CreateFogModifierRectBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "ChangeElevatorHeight":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetSoundPitchBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "LoadUnitPoolHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "CommandAI":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "UnitHasItem":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetTriggerEventId":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "MultiboardSetItemWidth":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetAllyColorFilterState":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IsItemHiddenBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetUnitVertexColor":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "QuestSetDescriptionBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzRemoveAbilityStringLevelArrayFieldBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "IsUnitEnemy":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetItemDropID":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityExtendedTooltip":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LeaderboardGetIndexedPlayerBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "LoadMultiboardItemHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SaveTriggerEventHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetUnitTimeScale":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "AddSpecialEffectTargetUnitBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetTimeOfDayScale":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "FogEnableOn":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerColor":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SaveDestructableHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptActEffect":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityStringLevelArrayFieldBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "FogMaskEnable":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetDestAnimationSpeedPercent":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "TriggerAddCondition":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterDialogButtonEvent":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "DialogDisplayBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetLoadedUnitBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityActivatedTooltip":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerMaxHeroesAllowed":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetEnumPlayer":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "PingMinimap":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetUnitDefaultAcquireRange":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "Cheat":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptActSize":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "GetUnitsOfPlayerMatching":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "MeleeGrantHeroItems":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetUnitItemSoftId":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetCampaignAvailableBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SaveTextTagHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SaveMultiboardHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "IssueItemTargetOrder":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "DoNotSaveReplay":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetUnitDefaultFlyHeight":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "DestroyUbersplat":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetPlayerTaxRate":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "ForceRemovePlayer":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetPlayerState":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsQuestCompleted":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "StartCampaignAI":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzItemAddAbilityBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "RemoveGuardPosition":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "FlushStoredMission":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetQuestItemByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "ClearMapMusicBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "MeleeStartingVisibility":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "MultiboardSuppressDisplay":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetCampaignMenuRaceBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEMemoryLeakHelperProtectGroup":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetPlayerController":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GroupImmediateOrderById":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitIntegerField":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "PlaceRandomUnit":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "SetUbersplatRenderAlways":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetLastCreatedUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetMusicOffsetBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveImageHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetUnitUserData":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetUnitPathing":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "DialogAddButtonWithHotkeyBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SaveDefeatConditionHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "AddSpecialEffect":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetDialogByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "TimerGetElapsed":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetObjectName":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetCameraEyePositionLoc":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetLastCreatedMultiboard":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "IssueBuildOrderByIdLocBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "ForcePickRandomPlayer":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterBuildSubmenuEventBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetUnitScalePercent":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "OperatorComparePlayerState":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "QueuedTriggerClearBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SelectUnitAddForPlayer":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareAbilityId":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "RemoveItem":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetEffectByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "PauseGameOff":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerHandicapBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetUserControlForceOn":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptActFaceReset":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEMemoryLeakHelperProtectLocation":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWE_TP_GetExpiredTimerIndex":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetUnitID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetPlayerUnitCount":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetUnitAbilityLevel":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GroupPointOrderLocBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IsUnitIdType":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEId2S":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IsPlayerEnemy":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetBooleanByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GroupAddUnit":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetTrackableByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "ShowDestructable":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "EnableDawnDusk":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableLocation":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "PanCameraToTimedLocForPlayer":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitArmor":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetUnitsSelectedAll":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "QuestSetFailedBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "LoadInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GroupItemTargetOrder":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptSubtitleClear":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetRandomInt":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetPlayableMapRect":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetItemVisible":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetItemPositionLoc":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareLightning":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IsUnitGroupDeadBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWE_TP_GetElapsedTime":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "DecUnitAbilityLevel":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "OperatorRadianSubtract":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetElevatorHeight":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "HaveStoredInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveGroupByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "DestroyQuestBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetUnitCurrentOrder":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "ForceCinematicSubtitlesBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetUnitLifePercent":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "UnitDropItemPoint":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetGameSpeed":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "TransmissionFromUnitWithNameBJ":
                $this->_m_body = new Parameters(8, $this->_io, $this, $this->_root);
                break;
            case "SetUnitRescueRange":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "ShowDestructableBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "DestroyDefeatConditionBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "InitHashtableBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "IsItemPowerup":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetRectByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetUnitFlyHeightBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetTriggeringTrackable":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "CameraSetupGetFieldSwap":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CreateDeadDestructableZ":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "GroupTargetDestructableOrder":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "DestroyTimerDialogBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzSetItemDescription":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "TerrainDeformStop":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareDestructableCode":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GroupRemoveUnitSimple":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetCameraQuickPositionLocForPlayer":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "EnableUserUI":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetLastCreatedGameCacheBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "ReturnAction":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "EnableOcclusionBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetHeroLevelNT":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzSetSpecialEffectHeight":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESetGuard":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "SaveRectHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "CreateUnit":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "AdjustCameraBoundsForPlayerBJ":
                $this->_m_body = new Parameters(6, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableEffectArray":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "OrderId2StringBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveItemPoolHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "IssueNeutralImmediateOrderById":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "UnitIgnoreAlarmToggled":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetStoredInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LeaderboardSetLabelBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CreateNUnitsAtLoc":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableLocation":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEI2UnitId":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "AddItemToAllStock":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IsUnitLoadedBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "QueuedTriggerRemoveBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerColorBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetRectMinY":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetChangingUnitPrevOwner":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveIntegerByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerTaxRateBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "Preloader":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetDestructableAnimationBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "LeaderboardAddItemBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzSetSpecialEffectOrientation":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareGameState":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IsLocationVisibleToPlayer":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetItemName":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "CreateQuestBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitBaseDamage":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetSoundVolume":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SaveRegionHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "IMaxBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWE_TP_GetTimeout":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "ChangeLevel":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetLastCreatedWeatherEffect":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetItemPlayer":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetRegionByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SaveTriggerActionHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerName":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetSummonedUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzAddAbilityStringLevelArrayFieldBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveTimerDialogByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptActAbilityLvl":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SaveBooleanExprHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetTriggerEventByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerEventLeave":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "ShareEverythingWithTeam":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetRealByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetGameSpeed":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityRealField":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWECameraSetupAssign":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerAllianceBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityTooltip":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "MakeUnitRescuableToForceBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetManipulatedItem":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityActivatedTooltip":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetBooleanByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "ForGroup":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetUnitLifePercentBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetEventPlayerChatStringMatched":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "UnitAddItemToSlotById":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "CreateUnitAtLoc":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "MeleeInitVictoryDefeat":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "ItemPoolRemoveItemType":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptActSlide":
                $this->_m_body = new Parameters(6, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetForceByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetPlayerSlotState":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LoadLightningHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetRectID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LoadTimerDialogHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "DialogCreate":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzFourCC2S":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetThematicMusicPlayPosition":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveGameCacheBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "MoveRectTo":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetCinematicCamera":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "UnitMakeAbilityPermanent":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "ChooseRandomCreepBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "DecUnitAbilityLevelSwapped":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveUnitIDByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetPlayersAllies":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetTimeOfDay":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LoadDefeatConditionHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetOrderTargetDestructable":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "RandomDestructableInRectBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWETimerDestroyTimer":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzGetUnitAbilityManaCost":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "Pow":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetLightningColorABJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitBooleanFieldBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetTextTagTextBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetTextTagVisibility":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "Preload":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetAbilitySoundById":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IssueImmediateOrderBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitWeaponRealField":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzSetSpecialEffectRoll":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableGroup":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "EnumDestructablesInRectAllMultiple":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterTimerEventPeriodic":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GroupTargetOrderBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "TimerDialogSetTimeColorBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "StoreStringBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetItemTypeSlots":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetLastCreatedUbersplat":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzGetTriggerPlayerMouseY":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "CameraSetSmoothingFactorBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableAbilityIDArray":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetFilterItem":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetTerrainPathable":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "LoadStringBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetImageColor":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "SetTextTagPos":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "GetClickedButtonBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetUnitDefaultTurnSpeed":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareGameSpeed":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetQuestByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableString":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetTournamentFinishSoonTimeRemaining":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "QueueUnitAnimationBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CameraSetSourceNoiseForPlayer":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IsUnitDeadBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GroupEnumUnitsOfPlayer":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LeaderboardHasPlayerItemBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsItemInvulnerable":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "RectFromLoc":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetSpellTargetDestructable":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "TerrainDeformationCraterBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "LoadLeaderboardHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareUbersplat":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "TriggerRemoveAction":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IncUnitAbilityLevelSwapped":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzGetUnitDiceNumber":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "UnitCanSleepPerm":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetCinematicAvailableBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "UnitPauseTimedLifeBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsMapFlagSet":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetRealByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetUnitTypeId":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "Cos":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetItemPosition":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "OperatorDegreeDivide":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetAbilityIDByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetItemStringField":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetAttackedUnitBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetStoredReal":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWES2UnitId":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetAbilityIDByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsTerrainPathable":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SaveIntegerBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "GetLevelingUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetTriggerByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLastUnitPool":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SaveTriggerConditionHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SavePlayerHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "Asin":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "RMaxBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsUnitAliveBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetAbilityEffectById":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzGetUnitStringField":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "RectContainsUnit":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetEnumItem":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetImageRenderAlways":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "LoadTriggerEventHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetPlayerHandicapXPBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveTextTagHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzIsSelectionEnabled":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "TanBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerUnitEvent":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "GetDestructableMaxLife":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LeaderboardGetItemCount":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetTerrainType":
                $this->_m_body = new Parameters(6, $this->_io, $this, $this->_root);
                break;
            case "SetHeroInt":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetPlayerByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetUnitsOfTypeIdAll":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "CreateFogModifierRect":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "PlayThematicMusicBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerKeyEventBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GroupEnumUnitsOfTypeCounted":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEFlushMissionByString":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterDialogEventBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterTimerEventSingle":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetUnitName":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetUnitsOfPlayerAndTypeId":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWETimerPatternMoonPriestessArrow":
                $this->_m_body = new Parameters(11, $this->_io, $this, $this->_root);
                break;
            case "GetOwningPlayer":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetLastCombinedItem":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "AcosBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetGameCurrentTime":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "ShowInterfaceForceOn":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "RemoveUnitFromAllStock":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "RemoveRect":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IssueNeutralPointOrderById":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerStateEvent":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveIntegerByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveQuestItemByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetItemCharges":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterGameEvent":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LoadGameBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareBoolean":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetUnitFoodMade":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetLeavingUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzAddAbilityRealLevelArrayFieldBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "WaygateSetDestinationLocBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "R2I":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetDestructableY":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveTriggerConditionHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "CreateMultiboard":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveTriggerConditionByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetUnitFacing":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveTextTagByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetMultiboardItemByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GroupTargetDestructableOrderById":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterAnyUnitEventBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IsMultiboardDisplayed":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzGetItemAbilityByIndex":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IssueTargetOrderD":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetAmbientNightSound":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitIntegerFieldBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableBooleanArray":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "UnitAddType":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "EnableWeatherEffect":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "UnitRemoveBuffsEx":
                $this->_m_body = new Parameters(8, $this->_io, $this, $this->_root);
                break;
            case "SetUnitFacingToFaceLocTimed":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWE_PreloadSL_Get":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWERemoveGuard":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LoadRectHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWEGeneralBounsSystemUnitGetBonus":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetResourceAmount":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "CreateItemPool":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "UnitHasBuffBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "PauseUnit":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "WaitForSoundBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzAddAbilityRealLevelArrayField":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterTrackableTrackEvent":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetTriggerPlayer":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetUnitsInRangeOfLocMatching":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetItemUserData":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SaveInteger":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SetUnitTimeScalePercent":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetUnitsInRectOfPlayer":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitStringFieldBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetPlayerStartLocationLoc":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "IsQuestEnabled":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESetMapLimitCoordinate":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetLocalVariableStringArray":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterItemDeathEvent":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "PanCameraToTimedWithZ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "IsNoDefeatCheat":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "InitGameCacheBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzS2FourCC":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWESyStemItemUnmovableRegistTrigger":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "TimerDialogSetSpeed":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "PingMinimapLocForForceEx":
                $this->_m_body = new Parameters(7, $this->_io, $this, $this->_root);
                break;
            case "MultiboardGetTitleText":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetSpeechVolumeGroupsBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "RandomItemInRectBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "HaveStoredReal":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "InitHashtable":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityActivatedIcon":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetWaterBaseColor":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetPlayerColorString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitWeaponBooleanField":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveTriggerByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "TriggerRegisterVariableEvent":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "MultiboardGetRowCount":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "YDWEIssueNeutralPointOrderById":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "GroupTrainOrderByIdBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetForLoopIndexA":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "CreateTextTag":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "UnitMakeAbilityPermanentBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "UnitSuspendDecayBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetResourceAmount":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "StringHash":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "Acos":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetKillingUnitBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetCameraTargetPositionZ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "PlaySoundFromOffsetBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetPlayers":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "EnumDestructablesInRectAll":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEDoubleItemSlotByAbility":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetUnitByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GroupImmediateOrder":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitMaxHP":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetSpellTargetX":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GroupPointOrderById":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "ItemAddIndicator":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetTimerDialogByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SuspendHeroXPBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "LoadBooleanExprHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetImageConstantHeight":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetLocalizedHotkey":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "ShowTextTagForceBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzSetUnitWeaponStringField":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "BlzGetUnitIntegerField":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "TerrainDeformStopAll":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetUnitUseFood":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptExternalFunc":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetUnitFacingTimed":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetUnitDefaultPropWindowBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "AddSpellEffectTargetByIdB":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "IsMaskedToPlayer":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SuspendHeroXP":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetImagePosition":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareBuffId":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "UnitModifySkillPoints":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GroupEnumUnitsSelected":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "LoadDefeatConditionHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetRectMaxX":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LoadForceHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetEntireMapRect":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetFilterUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetSpellAbilityUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetCreepCampFilterState":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "ReplaceUnitBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveTrackableByInteger":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "MultiboardSetTitleText":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWESaveRealByString":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SelectHeroSkill":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetItemInvulnerableBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzGetUnitWeaponIntegerField":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SaveItemHandle":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SaveBooleanExprHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "GetPlayerStructureCount":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "MultiboardSetItemWidthBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "SaveRealBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "CreateDefeatConditionBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetPlayerName":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "ResumeMusicBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetItemByString":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "UnitSetConstructionProgress":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetCineModeVolumeGroupsBJ":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "ItemAddIndicatorBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "GetLastPlayedSound":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityBooleanFieldBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzGetItemAbility":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "LoadItemPoolHandle":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "IsPlayerFlagSetBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetSoldUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "GetRandomSubGroup":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "OperatorCompareEventId":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetInventoryIndexOfItemTypeBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SyncSelections":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableItemID":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "MultiboardSetItemValueBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "LeaderboardSetPlayerItemLabelBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetUnitRace":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityStringField":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzSetAbilityIntegerLevelArrayFieldBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "LoadBoolean":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "StopMusicBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "LeaderboardGetPlayerIndexBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "ForLoopA":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GetEnumUnit":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "BlzIsLastInstanceObjectFunctionSuccessful":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "SetPlayerTechMaxAllowedSwap":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SetImageColorBJ":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "I2S":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "QuestSetTitleBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "UnitAddAbilityBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzBitXor":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "PlaceRandomItem":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "BlzGetUnitBooleanField":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsUnitInGroup":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptActTurn":
                $this->_m_body = new Parameters(5, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetUnitGoldCost":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetItemVisibleBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetMultiboardByInteger":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetMapMusicIndexedBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWEGetBoolexprID":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "StoreBooleanBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "YDWECreateLine":
                $this->_m_body = new Parameters(11, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableRect":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CreateTrackable":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "GetWinningPlayer":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "VolumeGroupSetVolumeBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "ForceAddPlayer":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "IsDestructableAliveBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "GetSoundDurationBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetUnitRallyUnit":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "CheckItemcodeStatus":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetUnitInvulnerable":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "SetMapFlag":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableAbilityID":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "TerrainDeformationStopBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "GetLearnedSkillLevel":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "YDWEScriptCameraStat":
                $this->_m_body = new Parameters(6, $this->_io, $this, $this->_root);
                break;
            case "GetTournamentFinishNowRule":
                $this->_m_body = new Parameters(0, $this->_io, $this, $this->_root);
                break;
            case "LoadUbersplatHandleBJ":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "StopCameraForPlayerBJ":
                $this->_m_body = new Parameters(1, $this->_io, $this, $this->_root);
                break;
            case "SetSoundDistanceCutoffBJ":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "YDWESetLocalVariableEffect":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            case "BlzGetAbilityBooleanLevelArrayField":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "IssueTargetDestructableOrderById":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "SaveMultiboardHandleBJ":
                $this->_m_body = new Parameters(4, $this->_io, $this, $this->_root);
                break;
            case "IsUnitInRange":
                $this->_m_body = new Parameters(3, $this->_io, $this, $this->_root);
                break;
            case "GroupAddGroup":
                $this->_m_body = new Parameters(2, $this->_io, $this, $this->_root);
                break;
            default:
                throw new \Exception("Unexpected function name '{$this->name()}'");
        }
    }
    protected $_m_body;
    protected $_m_name;
    public function body() { return $this->_m_body; }
    public function name() { return $this->_m_name; }
}

class Parameters extends \Kaitai\Struct\Struct {
    public function __construct(int $parameterCount, \Kaitai\Struct\Stream $_io, ParametersByName $_parent = null, Wtg $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_m_parameterCount = $parameterCount;
        $this->_read();
    }

    private function _read() {
        $this->_m_parameters = [];
        $n = $this->parameterCount();
        for ($i = 0; $i < $n; $i++) {
            $this->_m_parameters[] = new Parameter($this->_io, $this, $this->_root);
        }
    }
    protected $_m_parameters;
    protected $_m_parameterCount;
    public function parameters() { return $this->_m_parameters; }
    public function parameterCount() { return $this->_m_parameterCount; }
}

class DeletedItemIds extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, BodyPost131 $_parent = null, Wtg $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_itemCount = $this->_io->readU4le();
        $this->_m_itemIds = [];
        $n = $this->itemCount();
        for ($i = 0; $i < $n; $i++) {
            $this->_m_itemIds[] = $this->_io->readU4le();
        }
    }
    protected $_m_itemCount;
    protected $_m_itemIds;
    public function itemCount() { return $this->_m_itemCount; }
    public function itemIds() { return $this->_m_itemIds; }
}

class Trigger extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, Wtg $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_name = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytesTerm(0, false, true, true), "UTF-8");
        $this->_m_description = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytesTerm(0, false, true, true), "UTF-8");
        if ($this->_root()->game() == 7) {
            $this->_m_isComment = $this->_io->readU4le();
        }
        if ($this->_root()->header()->fileVersion() > 7) {
            $this->_m_id = $this->_io->readU4le();
        }
        $this->_m_isEnabled = $this->_io->readU4le();
        $this->_m_isCustom = $this->_io->readU4le();
        $this->_m_isInitiallyOff = $this->_io->readU4le();
        $this->_m_runOnInitialization = $this->_io->readU4le();
        $this->_m_triggerCategory = $this->_io->readU4le();
        $this->_m_ecaCount = $this->_io->readU4le();
        $this->_m_ecas = [];
        $n = $this->ecaCount();
        for ($i = 0; $i < $n; $i++) {
            $this->_m_ecas[] = new Eca(0, $this->_io, $this, $this->_root);
        }
    }
    protected $_m_name;
    protected $_m_description;
    protected $_m_isComment;
    protected $_m_id;
    protected $_m_isEnabled;
    protected $_m_isCustom;
    protected $_m_isInitiallyOff;
    protected $_m_runOnInitialization;
    protected $_m_triggerCategory;
    protected $_m_ecaCount;
    protected $_m_ecas;
    public function name() { return $this->_m_name; }
    public function description() { return $this->_m_description; }
    public function isComment() { return $this->_m_isComment; }
    public function id() { return $this->_m_id; }
    public function isEnabled() { return $this->_m_isEnabled; }
    public function isCustom() { return $this->_m_isCustom; }
    public function isInitiallyOff() { return $this->_m_isInitiallyOff; }
    public function runOnInitialization() { return $this->_m_runOnInitialization; }
    public function triggerCategory() { return $this->_m_triggerCategory; }
    public function ecaCount() { return $this->_m_ecaCount; }
    public function ecas() { return $this->_m_ecas; }
}
