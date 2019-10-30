<?php

// This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

namespace VindIT\Repository\Blizzard\KaitaiParser;

class WtgError extends \Kaitai\Struct\Struct {
    public function __construct(string $functionName, \Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \VindIT\Repository\Blizzard\KaitaiParser\WtgError $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_m_functionName = $functionName;
        $this->_read();
    }

    private function _read()
    {
        throw new Exception("Unexpected function name {$this->_m_functionName}");
    }

    protected $_m_assert;
    protected $_m_functionName;

    public function assert()
    {
        return $this->_m_assert;
    }

    public function functionName()
    {
        return $this->_m_functionName;
    }
}
