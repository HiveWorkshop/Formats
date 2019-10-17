<?php
// This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

namespace FunctionInfo;

class FunctionInfo extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, FunctionInfo $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_name = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytesTerm(0, false, true, true), "UTF-8");
        switch ($this->name()) {
            case "DestroyEffectBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SaveAbilityHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "CommentString":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "MultiboardMinimizeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SaveLightningHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "SetUnitTurnSpeedBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetUnitAcquireRangeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerEventDefeat":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "TriggerRegisterDeathEvent":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "LoadTrackableHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "IsFogEnabled":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetLastTransmissionDurationBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "KillDestructable":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetTimeOfDayScalePercentBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetRandomDirectionDeg":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetLastCreatedTerrainDeformation":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetItemPawnable":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "DisplayTextToForce":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetDestructableLife":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SaveGameExists":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "IsUnitType":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetTimeOfDayScalePercentBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetClickedDialogBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetImagePositionBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetUnitPropWindowBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "DisplayTimedTextToForce":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "DisplayCineFilterBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "LoadDialogHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "EnumItemsInRectBJMultiple":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "IsTerrainPathableBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SaveTrackableHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "MultiboardSetTitleTextColorBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "SetVariable":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IsPointBlightedBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "AsinBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetUnitsOfPlayerAll":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "LoadFogStateHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GroupTargetItemOrder":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "IsUnitAlly":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "LoadMultiboardItemHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "OperatorCompareUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "OrMultiple":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "ForLoopBMultiple":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetChangingUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "CountUnitsInGroup":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetUnitRallyPoint":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "ForForceMultiple":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetSpellTargetUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "CheckItemStatus":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "CreateUbersplatBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(8, $io, $this, $this->_root);
                break;
            case "SetForceAllianceStateBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SetUnitLookAt":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(6, $io, $this, $this->_root);
                break;
            case "EnableTrigger":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "EnumItemsInRectBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SaveWidgetHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "GetItemLevel":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetLastCreatedTimerDialogBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "LoadWidgetHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SetSkyModel":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "TriggerRegisterDestDeathInRegionEvent":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetItemDropOnDeathBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetHeroLevel":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetPlayersEnemies":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetUnitStateSwap":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetUnitRallyDestructable":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "AddUnitAnimationPropertiesBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetAbilityEffectBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetEventDamageSource":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetDestructableTypeId":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "LoadTriggerConditionHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "LeaderboardSetStyleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "TriggerRegisterUnitInRangeSimple":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "UnitRemoveBuffsBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "TerrainDeformationRippleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(8, $io, $this, $this->_root);
                break;
            case "LeaderboardSetPlayerItemValueColorBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(6, $io, $this, $this->_root);
                break;
            case "SetDestructableOccluderHeight":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "OperatorComparePlayerSlotStatus":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetLocationY":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "IsCustomCampaignButtonVisibile":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "LoadRegionHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SetDoodadAnimationBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "ModuloReal":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetDestructableLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetPlayerAlliance":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetUnitLevel":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "UnitAddTypeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SaveButtonHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "LoadDestructableHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "TriggerRegisterGameSavedEventBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetUnitColor":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerEventVictory":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetOrderPointLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetUnitFoodUsed":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetCinematicCameraForPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "AddResourceAmountBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetManipulatingUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "HaveStoredValue":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "SetSoundPositionLocBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "CountLivingPlayerUnitsOfTypeId":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetHeroLevel":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "LockGameSpeedBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "LeaderboardSetLabelColorBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "ReviveHeroLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SaveQuestItemHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "LoadTriggerActionHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetForceOfPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "PlaySoundAtPointBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "ClearSelectionForPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "RescueUnitBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "OperatorCompareItemType":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GroupRemoveGroup":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "StringCase":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetDestructableLife":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "UnitResetCooldown":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "RemoveUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "IsUnitInTransportBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetMissionAvailableBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "TimerDialogDisplayForPlayerBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SetUserControlForceOff":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "OperatorComparePlayerControl":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SubStringBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SetUnitExplodedBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SaveDialogHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "GetLastReplacedUnitBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetUnitLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetRectCenter":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "WaitForCondition":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "OperatorCompareGameDifficulty":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetSoundFileDurationBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "ModifyGateBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "TimerGetRemaining":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "IsItemOwned":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetMusicVolumeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "TriggerRegisterShowSkillEventBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "RectContainsItem":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetUnitManaBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "StringLength":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetRectWidthBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerEventAllianceChanged":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetBooleanAnd":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "DoNothing":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SaveUnitPoolHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "LoadAbilityHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "KillUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetTournamentScore":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "IfThenElseMultiple":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetRevivingUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "FogModifierStop":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "LockGuardPosition":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "IsTriggerEnabled":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "DestructableRestoreLife":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetUnitsInRectMatching":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetUnitMoveSpeed":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetPlayersByMapControl":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetUnitFlyHeight":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetUnitPropWindowBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IsPlayerInForce":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "MakeUnitsPassiveForPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "LoadBooleanBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "MultiboardSetItemIconBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "EnableCreepSleepBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetUnitUseFoodBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetLastPlayedMusic":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetHeroXP":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetLastCreatedLightningBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "OperatorReal":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetFilterPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "QuestItemSetCompletedBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "ModuloInteger":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetForLoopIndexB":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetRectCenterY":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetPlayerUnitMaxAllowed":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "RAbsBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SmartCameraPanBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SetImageType":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "CreateTextTagLocBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(8, $io, $this, $this->_root);
                break;
            case "SetDestructableLifePercentBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "RemoveDestructable":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "UnitSetUpgradeProgress":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "TriggerRegisterTimerExpireEventBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetTimeOfDay":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "LoadTextTagHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "CameraSetEQNoiseForPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetLastCreatedDestructable":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "TriggerRegisterUnitEvent":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "CinematicFilterGenericBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(11, $io, $this, $this->_root);
                break;
            case "GetPlayerTaxRateBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "DestroyLeaderboardBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetTriggeringTrigger":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetAmbientDaySound":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "UseTimeOfDayBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "ResetUbersplat":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetFoodUsed":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "MoveRectToLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "ShowImageBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SelectUnitSingle":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "IssueTargetDestructableOrder":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetDestructableName":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetUnitRallyDestructable":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SaveUnitHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "CreateImageBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "SaveItemPoolHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "SaveTimerHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "IAbsBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetHeroXP":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "ModifyHeroStat":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "GetEventTargetUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetUnitPointValueByType":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetRandomPercentageBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "DialogSetMessageBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetImageRender":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetItemLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetLastCreatedTimerBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SelectGroupBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "UnitRemoveBuffBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IsQuestItemCompleted":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "Location":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "AndMultiple":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetCurrentCameraBoundsMapRectBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetUnitAnimation":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "RMinBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "PauseGameOn":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "StartMeleeAI":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetUnitRallyUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetDestructableMaxLifeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IsFogMaskEnabled":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "TerrainDeformationWaveBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(6, $io, $this, $this->_root);
                break;
            case "GetTransportUnitBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "MultiboardAllowDisplayBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetTextTagVelocityBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "QueueDestructableAnimationBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "ShowUnitHide":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "CameraClearNoiseForPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "OperatorCompareButton":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "UnitUseItemDestructable":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "ResetTerrainFogBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "HaveSavedValue":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "SetTextTagPosBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetLastCreatedButtonBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "TriggerSleepAction":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetLastCreatedFogModifier":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetUnitPointValue":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "OperatorString":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SaveSoundHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "GetLearnedSkillBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetRescueBuildingColorChangeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "LoadFogModifierHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "UnitUseItem":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IsQuestDiscovered":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetRectMaxY":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetTerrainVarianceBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "R2S":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetCameraTargetPositionY":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetImageAboveWater":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "TriggerRegisterEnterRectSimple":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "IsTriggerQueueEmptyBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "ShowUnitShow":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "LeaderboardDisplayBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "MeleeStartingResources":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "OperatorCompareRace":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "ResetUnitLookAt":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "IsLocationMaskedToPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IsUnitIllusionBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SaveAndChangeLevelBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "LoadForceHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "UnitDamagePointLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(7, $io, $this, $this->_root);
                break;
            case "CreateQuestItemBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "UnitDropItemPointLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "OperatorCompareDestructible":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SetPlayerTechResearchedSwap":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "LeaderboardRemovePlayerItemBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetOrderTargetItem":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "PlayThematicMusicExBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetGameDifficulty":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "ModifyHeroSkillPoints":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "RSignBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetCameraTargetPositionX":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "LoadRealBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "TriggerRegisterGameLoadedEventBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "TerrainDeformationRandomBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(6, $io, $this, $this->_root);
                break;
            case "SetUnitAbilityLevelSwapped":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SetTextTagFadepointBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "QuestSetEnabledBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "RecycleGuardPosition":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetRectHeightBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "OperatorCompareItem":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GroupClear":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "ChooseRandomNPBuildingBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "TimerGetTimeout":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "DestroyFogModifier":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "ChooseRandomItemBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "UnitAddSleepPerm":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetBooleanOr":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "UnitRemoveItemSwapped":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "CameraSetupApplyForPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "UnitAddItemByIdSwapped":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "CinematicModeExBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetCameraField":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "LoadLocationHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SaveStringBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "OperatorCompareHeroSkill":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetUnitManaPercent":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "MultiboardClear":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetCameraBoundsToRectForPlayerBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "FlushParentHashtableBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "TransmissionFromUnitTypeWithNameBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(10, $io, $this, $this->_root);
                break;
            case "RotateCameraAroundLocBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "OperatorCompareTerrainType":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "UnitAddIndicatorBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "GetTrainedUnitType":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerUnitEventSimple":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "FlushChildHashtableBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "EnumDestructablesInCircleBJMultiple":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetPlayerHandicapXPBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetTriggerEvalCount":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SaveEffectHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "RandomItemInRectSimpleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetUnitLifeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetAllUnitTypeSlots":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "IsSuspendedXP":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "DestroyMultiboardBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetResearchingUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "IfThenElse":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "ResetUnitAnimation":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "DestructableAddIndicatorBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "GetUnitMoveSpeed":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetUnitTypeSlots":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SaveTriggerActionHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "SetReservedLocalHeroButtons":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "OperatorCompareMeleeDifficulty":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetLastCreatedQuestItemBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetBlightRectBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "OffsetRectBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SelectUnitForPlayerSingle":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "LoadLightningHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "OperatorCompareReal":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetCameraTargetPositionLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "QuestMessageBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "FlushStoredMissionBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetUnitRallyPoint":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "ReloadGameCachesFromDisk":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "MultiboardDisplayBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "UnitId2StringBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "UnitAddItemSwapped":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IsUnitGroupEmptyBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetAllyColorFilterState":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "DialogAddButtonBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IsUnitGroupInRectBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetDestructableInvulnerableBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "CustomDefeatBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "DestroyTextTagBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetConvertedPlayerId":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SaveFogModifierHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "OperatorCompareUnitCode":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "CopySaveGameBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetPlayerUnitAvailableBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "CreateLeaderboardBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "QuestSetDiscoveredBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetSpellAbilityId":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "FlushGameCacheBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetCameraOrientControllerForPlayerBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "LeaderboardSortItemsBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetHeroStatBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetSummoningUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "IsLocationFoggedToPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "LoadQuestHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetLastCreatedTextTag":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "CreateMultiboardBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "ForceAddPlayerSimple":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "LoadEffectHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetPlayerHandicapBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "RemoveItemFromAllStock":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetDyingDestructable":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetTerrainCliffLevelBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "FogMaskEnableOff":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetItemLifeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "LoadPlayerHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetItemOfTypeFromUnitBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetUnitFacingToFaceUnitTimed":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SetNextLevelBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "ForGroupMultiple":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetLocationX":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetUnitAbilityLevelSwapped":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "UnlockGameSpeedBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "StoreUnitBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerChatEvent":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "IMinBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SaveGroupHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "GetEnteringUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "ChooseRandomItemExBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GroupAddUnitSimple":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetBlightRadiusLocBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "IsMultiboardMinimized":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "UnitCountBuffsExBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "SaveLocationHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "SaveGameCacheHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "MultiboardSetItemStyleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "LeaderboardSetPlayerItemLabelColorBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(6, $io, $this, $this->_root);
                break;
            case "SetTextTagPermanentBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetTextTagSuspendedBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "LoadButtonHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "IsQuestFailed":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "UnitUseItemPointLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "DefeatConditionSetDescriptionBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetIssuedOrderIdBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetRandomReal":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "String2OrderIdBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetLastRestoredUnitBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "IsTriggerQueuedBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerEventEndCinematic":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetWaterBaseColorBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "SetUnitAnimationWithRarity":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "CosBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetEventDamage":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "AttachSoundToUnitBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "DestroyLightningBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "DestroyImage":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetUnitVertexColorBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "GetPlayersAll":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "CreateTextTagUnitBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(8, $io, $this, $this->_root);
                break;
            case "GetUnitTurnSpeed":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "IsUnitHiddenBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "RemoveSaveDirectoryBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "LoadGroupHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetHandleIdBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "PauseAllUnitsBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "ClearSelection":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "EnableDragSelect":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "PanCameraToTimedLocWithZForPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "ForceRemovePlayerSimple":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "UnitInventorySizeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "StringHashBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "IsQuestRequired":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetLastCreatedLeaderboard":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SaveUbersplatHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "SetPlayerFlagBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetStoredIntegerBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "TriggerExecute":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetUnitPositionLocFacingBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "Deg2Rad":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "EnableMinimapFilterButtons":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "AddUnitToAllStock":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "AdjustPlayerStateBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SetTerrainPathableBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetFilterDestructable":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetSoundOffsetBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "UnitDropItemSlotBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetCameraEyePositionY":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "CreateDestructableLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "SetAltMinimapIcon":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "CameraSetupGetDestPositionLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "CreateNUnitsAtLocFacingLocBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "AddUnitToStockBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "IsPlayerAlly":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "AddSpecialEffectLocBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetOrderTargetUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetItemType":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "UnitWakeUpBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetLastCreatedImage":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "TriggerRegisterLeaveRectSimple":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "CinematicModeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "PlayerGetLeaderboardBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "TimerDialogDisplayBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetUnitPositionLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "AddHeroXPSwapped":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "LeaderboardSetPlayerItemValueBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetLightningColorRBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "TriggerRegisterUnitManaEvent":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetHeroProperName":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetLightningColorGBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "OperatorComparePlayerColor":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetAIDifficulty":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SelectUnitAdd":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetItemDroppableBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "FinishUbersplat":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "LoadBooleanExprHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetLastCreatedDefeatConditionBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetUnitOwner":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetTeams":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "RemoveItemFromStockBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "RemoveAllGuardPositions":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "R2SW":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "IsUnitMasked":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "ForLoopB":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "WaygateActivateBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetConstructingStructure":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "OperatorCompareItemCode":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "LoadSoundHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "UnitRemoveBuffsExBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "VolumeGroupResetBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "CreateFogModifierRadiusLocBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "SetWaterDeforms":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "PolarProjectionBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SetPlayerAllianceStateBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetDestructableOccluderHeight":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "QueuedTriggerAddBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "UnitRemoveAbilityBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetStoredBooleanBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "LoadUnitHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetPlayerColor":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetPlayerRace":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "FogMaskEnableOn":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "OperatorCompareTrigger":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "TriggerRegisterUnitLifeEvent":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetRectMinX":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "UnitApplyTimedLifeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "OperatorCompareTechCode":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "ForceUIKeyBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IssueImmediateOrder":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetSoundDistances":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "TriggerRegisterGameStateEventTimeOfDay":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "RandomDestructableInRectSimpleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetUnitManaPercentBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetCameraEyePositionX":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "ConditionalTriggerExecute":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetPlayerTechCountSimple":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "DistanceBetweenPoints":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "LoadQuestItemHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetEnumDestructable":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "MoveLightningLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SelectGroupForPlayerBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "RestoreUnitLocFacingPointBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(6, $io, $this, $this->_root);
                break;
            case "UnitRemoveTypeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IsUnitPausedBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "ShowInterfaceForceOff":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "PlaySoundBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetTextTagPosUnitBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "ShowCustomCampaignButton":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetTriggerExecCount":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "UnitInventoryCount":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "UnitShareVisionBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "WaygateIsActiveBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "PlayMusicExBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "DialogClearBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "LoadRectHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetAbilityName":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "Atan2BJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetCameraTargetControllerNoZForPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "EnablePreSelect":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetPlayerScore":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "S2R":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetMapMusicRandomBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "QueuedTriggerCountBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetUnitDefaultMoveSpeed":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SaveQuestHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "ForForce":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "UnitCanSleepBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SaveTimerDialogHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "UnitId2OrderIdBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "CustomVictoryBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "IssueTargetOrder":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SaveAndLoadGameBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "AddWeatherEffectSaveLast":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "CreatePermanentCorpseLocBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "FogModifierStart":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "PingMinimapLocForForce":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "CreateTimerDialogBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "MultiboardSetColumnCount":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "S2I":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetTrainedUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "CinematicFadeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(7, $io, $this, $this->_root);
                break;
            case "MultiboardGetColumnCount":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetPlayerAbilityAvailableBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "UnitSetCanSleepBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetEventPlayerChatString":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "StoreRealBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "SetThematicMusicOffsetBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "LoadTimerHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SetItemUserData":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IssuePointOrderLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetCancelledStructure":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SaveImageHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "GetBuyingUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetCameraEyePositionZ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GroupTargetOrder":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetStoredRealBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SquareRoot":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "IsUnitVisible":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "OperatorComparePlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetExpiredTimer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "BlightGoldMineForPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "FogEnableOff":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetLightningColorBBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetStoredStringBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetTriggerName":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "LeaderboardSetValueColorBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "ResetToGameCameraForPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetDyingUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetLastRemovedItem":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetSpellTargetLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "RectFromCenterSizeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "QuestSetCompletedBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "QueuedTriggerClearInactiveBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "RestoreUnitLocFacingAngleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(6, $io, $this, $this->_root);
                break;
            case "ShowUbersplatBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IssueTargetItemOrder":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "ChangeElevatorWalls":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "CameraSetTargetNoiseForPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "ForLoopVar":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "GroupPointOrderLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "RemoveWeatherEffectBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "PlayMusicBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "PauseUnitBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetTriggerUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "StringIdentity":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetPlayerTechMaxAllowedSwap":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SelectUnitRemove":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "MeleeStartingUnits":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetCameraBoundsMapRect":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetRescueUnitColorChangeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetLastCreatedGroup":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "EnableWorldFogBoundaryBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "UnitDamageTargetBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "GetLastCreatedEffectBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "ISignBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "FlashQuestDialogButtonBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "AtanBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "Rad2Deg":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetDoodadAnimationRectBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SetUnitBlendTimeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "AddTriggerEvent":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetPlayerOnScoreScreenBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetUnitsInRectAll":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "UnitItemInSlotBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerSelectionEventBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "EnumDestructablesInCircleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "LoadUnitPoolHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetLastCreatedQuestBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "LoadItemHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetRevivableUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "CreateCorpseLocBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "MeleeStartingUnitsForPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "WaygateGetDestinationLocBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "AddItemToStockBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "GetResearched":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetItemLifeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "StopSoundBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "StoreIntegerBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "SinBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetAbilitySoundBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetUnitsInRangeOfLocAll":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "EnableSelect":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetDecayingUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "ForceUICancelBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetSpellTargetItem":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "OperatorCompareOrderCode":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetFoodMade":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SaveTriggerHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "GetHeroSkillPoints":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "LoadTriggerHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SetStackedSoundBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "UnitIsSleepingBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "I2R":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "ForLoopAMultiple":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetSoundVolumeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetTextTagLifespanBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "TimerDialogSetTitleColorBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "SetLightningColorBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "SetTextTagColorBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "LoadImageHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "UnitSetUsesAltIconBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IsUnitFogged":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetCreepCampFilterState":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SaveLeaderboardHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "MultiboardSetItemColorBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(7, $io, $this, $this->_root);
                break;
            case "SetCameraFieldForPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "GetLastHauntedGoldMine":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetItemCharges":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetLearningUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "DisableTrigger":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SaveItemHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "SetTerrainTypeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "SetUnitPositionLocFacingLocBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "CountPlayersInForceBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetUnitAcquireRange":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "UnitDropItemTargetBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "RemoveUnitFromStockBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "ForLoopVarMultiple":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "PauseTimerBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IsUnitSelected":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "DoesUnitGenerateAlarms":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "CreateDeadDestructableLocBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "ExplodeUnitBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "LoadItemPoolHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "MapInitializationEvent":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "PreloadEnd":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "QuestItemSetDescriptionBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetPlayerState":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetSoldItem":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetTerrainTypeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "RenameSaveDirectoryBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "PolledWait":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetAttacker":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetRandomLocInRect":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "ConvertedPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "AddLightningLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GroupPickRandomUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "CreateItemLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IsUnitInvisible":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "UnitHasItemOfTypeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "EndThematicMusicBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "OffsetLocation":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetLastCreatedItem":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetTextTagAgeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IssueUpgradeOrderByIdBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "LoadIntegerBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "Rect":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "SaveBooleanBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "UnitRemoveItemFromSlotSwapped":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "AngleBetweenPoints":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "ForceClear":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetItemTypeId":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "MeleeClearExcessUnits":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetTerrainFogExBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(7, $io, $this, $this->_root);
                break;
            case "GetOrderedUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "TriggerEvaluate":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetPlayerTeam":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetItemPlayerBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "OperatorCompareInteger":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SetAllItemTypeSlots":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "IsDestructableDeadBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "OperatorInt":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SetUbersplatRender":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "CustomScriptCode":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SaveFogStateHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "MultiboardSetRowCount":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "LeaderboardSetPlayerItemStyleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "SaveForceHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "KillSoundWhenDoneBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetSellingUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerAllianceChange":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "StartTimerBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "RectContainsLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetConstructedStructure":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SaveMultiboardItemHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "GetPlayersMatching":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetLastCreatedHashtableBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "LoadMultiboardHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "IsDestructableInvulnerableBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "CameraResetSmoothingFactorBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetRectCenterX":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "PlaySoundOnUnitBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "TimerDialogSetTitleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "MeleeStartingHeroLimit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "UnitUseItemTarget":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SelectUnitRemoveForPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IssueTrainOrderByIdBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetUnitUserData":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "UnitGenerateAlarms":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "String2UnitIdBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetSaveBasicFilename":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetCurrentCameraSetup":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "MeleeStartingAI":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "ClearTextMessagesBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "CreateFogModifierRectBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "ChangeElevatorHeight":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetSoundPitchBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "CommandAI":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "UnitHasItem":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetAllyColorFilterState":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "IsItemHiddenBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "QuestSetDescriptionBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IsUnitEnemy":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "LeaderboardGetIndexedPlayerBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SaveTriggerEventHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "AddSpecialEffectTargetUnitBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "FogEnableOn":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SaveDestructableHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "SetDestAnimationSpeedPercent":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "DialogDisplayBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetLoadedUnitBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetPlayerMaxHeroesAllowed":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetEnumPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetUnitDefaultAcquireRange":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetUnitsOfPlayerMatching":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "MeleeGrantHeroItems":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetCampaignAvailableBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SaveTextTagHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "GetUnitDefaultFlyHeight":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "DestroyUbersplat":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetPlayerState":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IsQuestCompleted":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "StartCampaignAI":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "RemoveGuardPosition":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "ClearMapMusicBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "MeleeStartingVisibility":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetCampaignMenuRaceBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetPlayerController":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetUbersplatRenderAlways":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetLastCreatedUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetMusicOffsetBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetUnitUserData":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetUnitPathing":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SaveDefeatConditionHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "TimerGetElapsed":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetCameraEyePositionLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetLastCreatedMultiboard":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "IssueBuildOrderByIdLocBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "ForcePickRandomPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "TriggerRegisterBuildSubmenuEventBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetUnitScalePercent":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "QueuedTriggerClearBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SelectUnitAddForPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "OperatorCompareAbilityId":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "RemoveItem":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "PauseGameOff":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetPlayerHandicapBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetUserControlForceOn":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetPlayerUnitCount":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IsUnitIdType":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IsPlayerEnemy":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "EnableDawnDusk":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "PanCameraToTimedLocForPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetUnitsSelectedAll":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "QuestSetFailedBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetRandomInt":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetPlayableMapRect":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetItemPositionLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IsUnitGroupDeadBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetElevatorHeight":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "DestroyQuestBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetUnitCurrentOrder":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "ForceCinematicSubtitlesBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetUnitLifePercent":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetGameSpeed":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "TransmissionFromUnitWithNameBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(8, $io, $this, $this->_root);
                break;
            case "SetUnitRescueRange":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "ShowDestructableBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "DestroyDefeatConditionBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "InitHashtableBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetUnitFlyHeightBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "CameraSetupGetFieldSwap":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GroupTargetDestructableOrder":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "DestroyTimerDialogBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "OperatorCompareDestructableCode":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GroupRemoveUnitSimple":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetCameraQuickPositionLocForPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetLastCreatedGameCacheBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "ReturnAction":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "EnableOcclusionBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "OperatorCompareString":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SaveRectHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "AdjustCameraBoundsForPlayerBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(6, $io, $this, $this->_root);
                break;
            case "OrderId2StringBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "LeaderboardSetLabelBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "CreateNUnitsAtLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "AddItemToAllStock":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "IsUnitLoadedBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "QueuedTriggerRemoveBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetPlayerColorBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetRectMinY":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetChangingUnitPrevOwner":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetPlayerTaxRateBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "Preloader":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetDestructableAnimationBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "LeaderboardAddItemBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "IsLocationVisibleToPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetItemName":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "CreateQuestBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "SaveRegionHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "IMaxBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetLastCreatedWeatherEffect":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetItemPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetPlayerName":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetSummonedUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerEventLeave":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "ShareEverythingWithTeam":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetGameSpeed":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetPlayerAllianceBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "MakeUnitRescuableToForceBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetManipulatedItem":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "ForGroup":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetUnitLifePercentBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetEventPlayerChatStringMatched":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "MeleeInitVictoryDefeat":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetPlayerSlotState":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "LoadTimerDialogHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SaveGameCacheBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "ChooseRandomCreepBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "DecUnitAbilityLevelSwapped":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetPlayersAllies":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetTimeOfDay":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetOrderTargetDestructable":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "RandomDestructableInRectBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "Pow":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetLightningColorABJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetTextTagTextBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "Preload":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "EnumDestructablesInRectAllMultiple":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "TriggerRegisterTimerEventPeriodic":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "TimerDialogSetTimeColorBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "StoreStringBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "SetItemTypeSlots":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetLastCreatedUbersplat":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "CameraSetSmoothingFactorBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetFilterItem":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "LoadStringBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetClickedButtonBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetUnitDefaultTurnSpeed":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "OperatorCompareGameSpeed":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetTournamentFinishSoonTimeRemaining":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "QueueUnitAnimationBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "CameraSetSourceNoiseForPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "IsUnitDeadBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "LeaderboardHasPlayerItemBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IsItemInvulnerable":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "RectFromLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetSpellTargetDestructable":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "TerrainDeformationCraterBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "LoadLeaderboardHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "IncUnitAbilityLevelSwapped":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "UnitCanSleepPerm":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetCinematicAvailableBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "UnitPauseTimedLifeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IsMapFlagSet":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetUnitTypeId":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetAttackedUnitBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SaveIntegerBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "GetLevelingUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SaveTriggerConditionHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "SavePlayerHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "RMaxBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IsUnitAliveBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "RectContainsUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetEnumItem":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetImageRenderAlways":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "LoadTriggerEventHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetPlayerHandicapXPBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "TanBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetDestructableMaxLife":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetUnitsOfTypeIdAll":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "PlayThematicMusicBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerKeyEventBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "TriggerRegisterDialogEventBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "TriggerRegisterTimerEventSingle":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetUnitName":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetUnitsOfPlayerAndTypeId":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetOwningPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "AcosBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "ShowInterfaceForceOn":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "RemoveUnitFromAllStock":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "TriggerRegisterPlayerStateEvent":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "SetItemCharges":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "TriggerRegisterGameEvent":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "LoadGameBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "OperatorCompareBoolean":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetUnitFoodMade":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetLeavingUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "WaygateSetDestinationLocBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "R2I":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetUnitFacing":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "TriggerRegisterAnyUnitEventBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "IsMultiboardDisplayed":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetAmbientNightSound":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "EnableWeatherEffect":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetUnitFacingToFaceLocTimed":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetResourceAmount":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "UnitHasBuffBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "WaitForSoundBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetTriggerPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetUnitsInRangeOfLocMatching":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetItemUserData":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetUnitTimeScalePercent":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetUnitsInRectOfPlayer":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetPlayerStartLocationLoc":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "IsQuestEnabled":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "InitGameCacheBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "PingMinimapLocForForceEx":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(7, $io, $this, $this->_root);
                break;
            case "MultiboardGetTitleText":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetSpeechVolumeGroupsBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "RandomItemInRectBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "TriggerRegisterVariableEvent":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "MultiboardGetRowCount":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GroupTrainOrderByIdBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetForLoopIndexA":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "UnitSuspendDecayBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetResourceAmount":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetKillingUnitBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetCameraTargetPositionZ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "PlaySoundFromOffsetBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetPlayers":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "EnumDestructablesInRectAll":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GroupImmediateOrder":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SuspendHeroXPBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetImageConstantHeight":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "ShowTextTagForceBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "TerrainDeformStopAll":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetUnitFacingTimed":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetUnitDefaultPropWindowBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "OperatorCompareBuffId":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "LoadDefeatConditionHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetRectMaxX":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetEntireMapRect":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetFilterUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetSpellAbilityUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetCreepCampFilterState":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "ReplaceUnitBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "MultiboardSetTitleText":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SelectHeroSkill":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetItemInvulnerableBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SaveBooleanExprHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "GetPlayerStructureCount":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "MultiboardSetItemWidthBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "SaveRealBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "CreateDefeatConditionBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetPlayerName":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "ResumeMusicBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "UnitSetConstructionProgress":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetCineModeVolumeGroupsBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "ItemAddIndicatorBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "GetLastPlayedSound":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "IsPlayerFlagSetBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetSoldUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetRandomSubGroup":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "MultiboardSetItemValueBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "LeaderboardSetPlayerItemLabelBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetUnitRace":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "StopMusicBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "LeaderboardGetPlayerIndexBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "ForLoopA":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "GetEnumUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "SetPlayerTechMaxAllowedSwap":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "SetImageColorBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(5, $io, $this, $this->_root);
                break;
            case "I2S":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "QuestSetTitleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "UnitAddAbilityBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IsUnitInGroup":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetItemVisibleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetMapMusicIndexedBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "StoreBooleanBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "VolumeGroupSetVolumeBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "IsDestructableAliveBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "GetSoundDurationBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetUnitRallyUnit":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "CheckItemcodeStatus":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetUnitInvulnerable":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SetMapFlag":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "TerrainDeformationStopBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "GetLearnedSkillLevel":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "GetTournamentFinishNowRule":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
            case "LoadUbersplatHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(3, $io, $this, $this->_root);
                break;
            case "StopCameraForPlayerBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(1, $io, $this, $this->_root);
                break;
            case "SetSoundDistanceCutoffBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            case "SaveMultiboardHandleBJ":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(4, $io, $this, $this->_root);
                break;
            case "GroupAddGroup":
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(2, $io, $this, $this->_root);
                break;
            default:
                $this->_m__raw_argumentCountContainer = $this->_io->readBytes(0);
                $io = new \Kaitai\Struct\Stream($this->_m__raw_argumentCountContainer);
                $this->_m_argumentCountContainer = new \FunctionInfo\U4Container(0, $io, $this, $this->_root);
                break;
        }
    }
    protected $_m_argumentCount;
    public function argumentCount() {
        if ($this->_m_argumentCount !== null)
            return $this->_m_argumentCount;
        $this->_m_argumentCount = $this->argumentCountContainer()->value();
        return $this->_m_argumentCount;
    }
    protected $_m_name;
    protected $_m_argumentCountContainer;
    protected $_m__raw_argumentCountContainer;
    public function name() { return $this->_m_name; }
    public function argumentCountContainer() { return $this->_m_argumentCountContainer; }
    public function _raw_argumentCountContainer() { return $this->_m__raw_argumentCountContainer; }
}

class U4Container extends \Kaitai\Struct\Struct {
    public function __construct(int $value, \Kaitai\Struct\Stream $_io, FunctionInfo $_parent = null, FunctionInfo $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_m_value = $value;
        $this->_read();
    }

    private function _read() {
    }
    protected $_m_value;
    public function value() { return $this->_m_value; }
}
