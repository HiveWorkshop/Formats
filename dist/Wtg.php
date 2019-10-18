<?php
// This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

namespace Wtg;

class Wtg extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, Wtg $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_header = new \Wtg\Header($this->_io, $this, $this->_root);
        switch ($this->header()->fileVersion()) {
            case 4:
                $this->_m_body = new \Wtg\BodyPre131($this->_io, $this, $this->_root);
                break;
            case 7:
                $this->_m_body = new \Wtg\BodyPre131($this->_io, $this, $this->_root);
                break;
            default:
                $this->_m_body = new \Wtg\BodyPost131($this->_io, $this, $this->_root);
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
    public function __construct(\Kaitai\Struct\Stream $_io, \Wtg\Element $_parent = null, Wtg $_root = null) {
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
            $this->_m_subParameters = new \Wtg\SubParameters($this->_io, $this, $this->_root);
        }
        if ( (($this->_root()->game() == 4) && ($this->type() == 2)) ) {
            $this->_m_unknown0 = $this->_io->readU4le();
        }
        if ( (($this->_root()->game() == 7) && ($this->hasSubParameters() > 0)) ) {
            $this->_m_unknown1 = $this->_io->readU4le();
        }
        if ( (($this->_root()->game() == 4) && ($this->type() != 2)) ) {
            $this->_m_isArrayRoc = $this->_io->readU4le();
        }
        if ($this->_root()->game() == 7) {
            $this->_m_isArrayTft = $this->_io->readU4le();
        }
        if ( (($this->isArrayRoc() > 0) || ($this->isArrayTft() > 0)) ) {
            $this->_m_arrayIndex = new \Wtg\Parameter($this->_io, $this, $this->_root);
        }
    }
    protected $_m_type;
    protected $_m_value;
    protected $_m_hasSubParameters;
    protected $_m_subParameters;
    protected $_m_unknown0;
    protected $_m_unknown1;
    protected $_m_isArrayRoc;
    protected $_m_isArrayTft;
    protected $_m_arrayIndex;
    public function type() { return $this->_m_type; }
    public function value() { return $this->_m_value; }
    public function hasSubParameters() { return $this->_m_hasSubParameters; }
    public function subParameters() { return $this->_m_subParameters; }
    public function unknown0() { return $this->_m_unknown0; }
    public function unknown1() { return $this->_m_unknown1; }
    public function isArrayRoc() { return $this->_m_isArrayRoc; }
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
            $this->_m_categories[] = new \Wtg\Category($this->_io, $this, $this->_root);
        }
        $this->_m_unknown0 = $this->_io->readU4le();
        $this->_m_variableCount = $this->_io->readU4le();
        $this->_m_variables = [];
        $n = $this->variableCount();
        for ($i = 0; $i < $n; $i++) {
            $this->_m_variables[] = new \Wtg\Variable($this->_io, $this, $this->_root);
        }
        $this->_m_triggerCount = $this->_io->readU4le();
        $this->_m_triggers = [];
        $n = $this->triggerCount();
        for ($i = 0; $i < $n; $i++) {
            $this->_m_triggers[] = new \Wtg\Trigger($this->_io, $this, $this->_root);
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
    public function __construct(\Kaitai\Struct\Stream $_io, \Wtg\BodyPost131 $_parent = null, Wtg $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_count = $this->_io->readU4le();
        $this->_m_variables = [];
        $n = $this->count();
        for ($i = 0; $i < $n; $i++) {
            $this->_m_variables[] = new \Wtg\Variable($this->_io, $this, $this->_root);
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
        $this->_m_function = new \FunctionInfo\FunctionInfo($this->_io);
        $this->_m_isEnabled = $this->_io->readU4le();
        $this->_m_arguments = [];
        $n = $this->function()->argumentCount();
        for ($i = 0; $i < $n; $i++) {
            $this->_m_arguments[] = new \Wtg\Parameter($this->_io, $this, $this->_root);
        }
        if ($this->_root()->game() == 7) {
            $this->_m_subEcaCount = $this->_io->readU4le();
        }
        if ($this->_root()->game() == 7) {
            $this->_m_subEcas = [];
            $n = ($this->subEcaCount() > 0 ? $this->subEcaCount() : 0);
            for ($i = 0; $i < $n; $i++) {
                $this->_m_subEcas[] = new \Wtg\Eca(1, $this->_io, $this, $this->_root);
            }
        }
    }
    protected $_m_type;
    protected $_m_group;
    protected $_m_function;
    protected $_m_isEnabled;
    protected $_m_arguments;
    protected $_m_subEcaCount;
    protected $_m_subEcas;
    protected $_m_isChild;
    public function type() { return $this->_m_type; }
    public function group() { return $this->_m_group; }
    public function function() { return $this->_m_function; }
    public function isEnabled() { return $this->_m_isEnabled; }
    public function arguments() { return $this->_m_arguments; }
    public function subEcaCount() { return $this->_m_subEcaCount; }
    public function subEcas() { return $this->_m_subEcas; }
    public function isChild() { return $this->_m_isChild; }
}


class SubParameters extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Wtg\Parameter $_parent = null, Wtg $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_functionType = $this->_io->readU4le();
        $this->_m_function = new \FunctionInfo\FunctionInfo($this->_io);
        $this->_m_beginSubFunction = $this->_io->readU4le();
        if ($this->beginSubFunction() > 0) {
            $this->_m_arguments = [];
            $n = $this->function()->argumentCount();
            for ($i = 0; $i < $n; $i++) {
                $this->_m_arguments[] = new \Wtg\Parameter($this->_io, $this, $this->_root);
            }
        }
    }
    protected $_m_functionType;
    protected $_m_function;
    protected $_m_beginSubFunction;
    protected $_m_arguments;
    public function functionType() { return $this->_m_functionType; }
    public function function() { return $this->_m_function; }
    public function beginSubFunction() { return $this->_m_beginSubFunction; }
    public function arguments() { return $this->_m_arguments; }
}


class Element extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Wtg\BodyPost131 $_parent = null, Wtg $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_elementType = $this->_io->readU4le();
        switch ($this->elementType()) {
            case 4:
                $this->_m_data = new \Wtg\Category($this->_io, $this, $this->_root);
                break;
            case 32:
                $this->_m_data = new \Wtg\Trigger($this->_io, $this, $this->_root);
                break;
            case 8:
                $this->_m_data = new \Wtg\Trigger($this->_io, $this, $this->_root);
                break;
            case 64:
                $this->_m_data = new \Wtg\VariableReference($this->_io, $this, $this->_root);
                break;
            case 16:
                $this->_m_data = new \Wtg\Trigger($this->_io, $this, $this->_root);
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
        $this->_m_deletedCategories = new \Wtg\DeletedItemIds($this->_io, $this, $this->_root);
        $this->_m_triggerCount = $this->_io->readU4le();
        $this->_m_deletedTriggers = new \Wtg\DeletedItemIds($this->_io, $this, $this->_root);
        $this->_m_triggerCommentCount = $this->_io->readU4le();
        $this->_m_deletedTriggerComments = new \Wtg\DeletedItemIds($this->_io, $this, $this->_root);
        $this->_m_customScriptCount = $this->_io->readU4le();
        $this->_m_deletedCustomScripts = new \Wtg\DeletedItemIds($this->_io, $this, $this->_root);
        $this->_m_variableCount = $this->_io->readU4le();
        $this->_m_deletedVariables = new \Wtg\DeletedItemIds($this->_io, $this, $this->_root);
        $this->_m_unknown4 = $this->_io->readU4le();
        $this->_m_unknown5 = $this->_io->readU4le();
        $this->_m_unknown6 = $this->_io->readU4le();
        $this->_m_variables = new \Wtg\Variables($this->_io, $this, $this->_root);
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
        $n = ($this->elementCount() - 1);
        for ($i = 0; $i < $n; $i++) {
            $this->_m_elements[] = new \Wtg\Element($this->_io, $this, $this->_root);
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

namespace \Wtg;

class Variable extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Wtg $_root = null) {
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


class DeletedItemIds extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Wtg\BodyPost131 $_parent = null, Wtg $_root = null) {
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
            $this->_m_ecas[] = new \Wtg\Eca(0, $this->_io, $this, $this->_root);
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
