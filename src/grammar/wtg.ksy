meta:
  id: wtg
  file-extension: wtg
  endian: le

seq:
  - id: header
    type: header

  - id: body
    type:
      switch-on: header.file_version
      cases:
        4: body_pre_131
        7: body_pre_131
        _: body_post_131

instances:
  game:
    value: '_root.header.game > 0 ? _root.header.game : _root.header.file_version'

types:
  header:
    seq:
      - id: magic
        contents: WTG!
      - id: file_version
        type: u4
      - id: game
        type: u4
        if: file_version > 7

  body_pre_131:

    seq:
      - id: category_count
        type: u4
      - id: categories
        type: category
        repeat: expr
        repeat-expr: category_count

      - id: unknown_0
        type: u4

      - id: variable_count
        type: u4
      - id: variables
        type: variable
        repeat: expr
        repeat-expr: variable_count

      - id: trigger_count
        type: u4

      - id: triggers
        type: trigger
        repeat: expr
        repeat-expr: trigger_count

  body_post_131:
    seq:

      - id: unknown_0
        type: u4
      - id: unknown_1
        type: u4
      - id: unknown_2
        type: u4
      - id: unknown_3
        type: u4

      - id: category_count
        type: u4

      - id: deleted_categories
        type: deleted_item_ids

      - id: trigger_count
        type: u4

      - id: deleted_triggers
        type: deleted_item_ids

      - id: trigger_comment_count
        type: u4

      - id: deleted_trigger_comments
        type: deleted_item_ids

      - id: custom_script_count
        type: u4

      - id: deleted_custom_scripts
        type: deleted_item_ids

      - id: variable_count
        type: u4

      - id: deleted_variables
        type: deleted_item_ids

      - id: unknown_4
        type: u4

      - id: unknown_5
        type: u4

      - id: unknown_6
        type: u4

      - id: variables
        type: variables

      - id: element_count
        type: u4

      - id: unknown_7
        type: u4

      - id: unknown_8
        type: u4

      - id: map_name
        type: strz
        encoding: UTF-8

      - id: unknown_9
        type: u4

      - id: unknown_10
        type: u4

      - id: unknown_11
        type: u4
        if: _root.game == 7

      - id: elements
        type: element
        repeat: eos
        # repeat-expr: element_count - 1

  deleted_item_ids:
    seq:
      - id: item_count
        type: u4
      - id: item_ids
        type: u4
        repeat: expr
        repeat-expr: item_count

  variables:
    seq:
      - id: count
        type: u4
      - id: variables
        type: variable
        repeat: expr
        repeat-expr: count

  variable:
    seq:
      - id: name
        type: strz
        encoding: UTF-8
      - id: type
        type: strz
        encoding: UTF-8
      - id: unknown_0
        type: u4
      - id: is_array
        type: u4
      - id: array_size
        type: u4
        if: _root.game == 7
      - id: is_initialized
        type: u4
      - id: initial_value
        type: strz
        encoding: UTF-8
      - id: variable_id
        type: u4
        if: _root.header.file_version > 7
      - id: parent_category_id
        type: u4
        if: _root.header.file_version > 7

  element:
    seq:
      - id: element_type
        type: u4
      - id: data
        type:
          switch-on: element_type
          cases:
            4: category
            8: trigger
            16: trigger
            32: trigger
            64: variable_reference
            _: error

  variable_reference:
    seq:
      - id: id
        type: u4
      - id: name
        type: strz
        encoding: UTF-8
      - id: parent_id
        type: u4

  category:
    seq:
      - id: index
        type: u4
      - id: name
        type: strz
        encoding: UTF-8
      - id: is_comment
        type: u4
        if: _root.game == 7
      - id: unknown_0
        type: u4
        if: _root.header.file_version > 7
      - id: parent_id
        type: u4
        if: _root.header.file_version > 7

  trigger:
    seq:
      - id: name
        type: strz
        encoding: UTF-8
      - id: description
        type: strz
        encoding: UTF-8
      - id: is_comment
        type: u4
        if: _root.game == 7
      - id: id
        type: u4
        if: _root.header.file_version > 7
      - id: is_enabled
        type: u4
      - id: is_custom
        type: u4
      - id: is_initially_off
        type: u4
      - id: run_on_initialization
        type: u4
      - id: trigger_category
        type: u4
      - id: eca_count
        type: u4
      - id: ecas
        type: eca(0)
        repeat: expr
        repeat-expr: eca_count

  eca:
    params:
      - id: is_child
        type: u4
    seq:
      - id: type
        type: u4
      - id: group
        type: u4
        if: is_child > 0
      - id: function_name
        type: strz
        encoding: UTF-8
      - id: is_enabled
        type: u4
      - id: arguments
        type: parameters_by_name(function_name)
      - id: sub_eca_count
        type: u4
        if: _root.game == 7
      - id: sub_ecas
        type: eca(1)
        repeat: expr
        repeat-expr: 'sub_eca_count > 0 ? sub_eca_count : 0'
        if: _root.game == 7

  parameter:
    seq:
      - id: type
        type: u4
      - id: value
        type: strz
        encoding: UTF-8
      - id: has_sub_parameters
        type: u4
      - id: sub_parameters
        type: sub_parameters
        if: has_sub_parameters > 0
      - id: unknown_0
        type: u4
        if: _root.game == 4 and type == 2
      - id: is_array_roc
        type: u4
        if: _root.game == 4 and type != 2
      - id: unknown_1
        type: u4
        if: _root.game == 7 and has_sub_parameters > 0
      - id: is_array_tft
        type: u4
        if: _root.game == 7
      - id: array_index
        type: parameter
        if: is_array_roc > 0 or is_array_tft > 0

  sub_parameters:
    seq:
      - id: function_type
        type: u4
      - id: function_name
        type: strz
        encoding: UTF-8
      - id: begin_parameters
        type: u4
      - id: arguments
        type: parameters_by_name(function_name)
        if: begin_parameters > 0

  parameters:
    params:
      - id: parameter_count
        type: u4

    seq:
      - id: parameters
        type: parameter
        repeat: expr
        repeat-expr: parameter_count

  error:
    seq:
      - id: error
        contents: 'UNEXPECTED_WTF'

  parameters_by_name:

    params:
      - id: name
        type: str
        encoding: UTF-8

    seq:
      - id: body
        type:
          switch-on: name
          cases:
# BEGIN_PARAMETERS
            '"DoNothing"': parameters(0)
            '"CommentString"': parameters(1)
            '"CustomScriptCode"': parameters(1)
            '"TriggerSleepAction"': parameters(1)
            '"PolledWait"': parameters(1)
            '"WaitForCondition"': parameters(2)
            '"WaitForSoundBJ"': parameters(2)
            '"SetVariable"': parameters(2)
            '"ReturnAction"': parameters(0)
            '"IfThenElseMultiple"': parameters(0)
            '"IfThenElse"': parameters(3)
            '"ForLoopAMultiple"': parameters(2)
            '"ForLoopBMultiple"': parameters(2)
            '"ForLoopVarMultiple"': parameters(3)
            '"ForLoopA"': parameters(3)
            '"ForLoopB"': parameters(3)
            '"ForLoopVar"': parameters(4)
            '"StartMeleeAI"': parameters(2)
            '"StartCampaignAI"': parameters(2)
            '"CommandAI"': parameters(3)
            '"RemoveGuardPosition"': parameters(1)
            '"RemoveAllGuardPositions"': parameters(1)
            '"RecycleGuardPosition"': parameters(1)
            '"LockGuardPosition"': parameters(1)
            '"SetUnitAnimation"': parameters(2)
            '"SetUnitAnimationWithRarity"': parameters(3)
            '"QueueUnitAnimationBJ"': parameters(2)
            '"ResetUnitAnimation"': parameters(1)
            '"AddUnitAnimationPropertiesBJ"': parameters(3)
            '"SetUnitLookAt"': parameters(6)
            '"ResetUnitLookAt"': parameters(1)
            '"SetUnitScalePercent"': parameters(4)
            '"SetUnitVertexColorBJ"': parameters(5)
            '"SetUnitTimeScalePercent"': parameters(2)
            '"SetUnitTurnSpeedBJ"': parameters(2)
            '"SetUnitBlendTimeBJ"': parameters(2)
            '"SetUnitFlyHeightBJ"': parameters(3)
            '"SetUnitPropWindowBJ"': parameters(2)
            '"SetDestructableAnimationBJ"': parameters(2)
            '"QueueDestructableAnimationBJ"': parameters(2)
            '"SetDestAnimationSpeedPercent"': parameters(2)
            '"SetDoodadAnimationRectBJ"': parameters(3)
            '"SetDoodadAnimationBJ"': parameters(4)
            '"CameraSetupApplyForPlayer"': parameters(4)
            '"CameraSetupApplyForPlayerSmooth"': parameters(7)
            '"PanCameraToTimedLocForPlayer"': parameters(3)
            '"PanCameraToTimedLocWithZForPlayer"': parameters(4)
            '"SmartCameraPanBJ"': parameters(3)
            '"SetCameraFieldForPlayer"': parameters(4)
            '"RotateCameraAroundLocBJ"': parameters(4)
            '"SetCameraTargetControllerNoZForPlayer"': parameters(5)
            '"SetCameraOrientControllerForPlayerBJ"': parameters(4)
            '"SetCinematicCameraForPlayer"': parameters(2)
            '"StopCameraForPlayerBJ"': parameters(1)
            '"ResetToGameCameraForPlayer"': parameters(2)
            '"CameraSetSmoothingFactorBJ"': parameters(1)
            '"CameraResetSmoothingFactorBJ"': parameters(0)
            '"CameraSetSourceNoiseForPlayer"': parameters(3)
            '"CameraSetTargetNoiseForPlayer"': parameters(3)
            '"CameraSetEQNoiseForPlayer"': parameters(2)
            '"CameraClearNoiseForPlayer"': parameters(1)
            '"AdjustCameraBoundsForPlayerBJ"': parameters(6)
            '"SetCameraBoundsToRectForPlayerBJ"': parameters(2)
            '"SetCameraQuickPositionLocForPlayer"': parameters(2)
            '"BlzEnableTargetIndicator"': parameters(1)
            '"TransmissionFromUnitWithNameBJ"': parameters(8)
            '"TransmissionFromUnitTypeWithNameBJ"': parameters(10)
            '"ForceCinematicSubtitlesBJ"': parameters(1)
            '"CinematicModeBJ"': parameters(2)
            '"CinematicModeExBJ"': parameters(3)
            '"CinematicFadeBJ"': parameters(7)
            '"CinematicFilterGenericBJ"': parameters(11)
            '"DisplayCineFilterBJ"': parameters(1)
            '"PingMinimapLocForForce"': parameters(3)
            '"PingMinimapLocForForceEx"': parameters(7)
            '"UnitAddIndicatorBJ"': parameters(5)
            '"DestructableAddIndicatorBJ"': parameters(5)
            '"ItemAddIndicatorBJ"': parameters(5)
            '"ClearTextMessagesBJ"': parameters(1)
            '"ShowInterfaceForceOff"': parameters(2)
            '"ShowInterfaceForceOn"': parameters(2)
            '"SetUserControlForceOff"': parameters(1)
            '"SetUserControlForceOn"': parameters(1)
            '"EnableOcclusionBJ"': parameters(2)
            '"EnableWorldFogBoundaryBJ"': parameters(2)
            '"StartTimerBJ"': parameters(3)
            '"PauseTimerBJ"': parameters(2)
            '"CreateTimerDialogBJ"': parameters(2)
            '"DestroyTimerDialogBJ"': parameters(1)
            '"TimerDialogDisplayForPlayerBJ"': parameters(3)
            '"TimerDialogDisplayBJ"': parameters(2)
            '"TimerDialogSetTitleBJ"': parameters(2)
            '"TimerDialogSetTitleColorBJ"': parameters(5)
            '"TimerDialogSetTimeColorBJ"': parameters(5)
            '"CreateDestructableLoc"': parameters(5)
            '"CreateDeadDestructableLocBJ"': parameters(5)
            '"KillDestructable"': parameters(1)
            '"RemoveDestructable"': parameters(1)
            '"DestructableRestoreLife"': parameters(3)
            '"ShowDestructableBJ"': parameters(2)
            '"SetDestructableLifePercentBJ"': parameters(2)
            '"SetDestructableLife"': parameters(2)
            '"SetDestructableMaxLifeBJ"': parameters(2)
            '"ModifyGateBJ"': parameters(2)
            '"ChangeElevatorWalls"': parameters(3)
            '"ChangeElevatorHeight"': parameters(2)
            '"SetDestructableInvulnerableBJ"': parameters(2)
            '"SetDestructableOccluderHeight"': parameters(2)
            '"EnumDestructablesInRectAllMultiple"': parameters(1)
            '"EnumDestructablesInCircleBJMultiple"': parameters(2)
            '"EnumDestructablesInRectAll"': parameters(2)
            '"EnumDestructablesInCircleBJ"': parameters(3)
            '"DialogDisplayBJ"': parameters(3)
            '"DialogSetMessageBJ"': parameters(2)
            '"DialogAddButtonBJ"': parameters(2)
            '"DialogClearBJ"': parameters(1)
            '"AddWeatherEffectSaveLast"': parameters(2)
            '"EnableWeatherEffect"': parameters(2)
            '"RemoveWeatherEffectBJ"': parameters(1)
            '"TerrainDeformationCraterBJ"': parameters(5)
            '"TerrainDeformationRippleBJ"': parameters(8)
            '"TerrainDeformationWaveBJ"': parameters(6)
            '"TerrainDeformationRandomBJ"': parameters(6)
            '"TerrainDeformationStopBJ"': parameters(2)
            '"TerrainDeformStopAll"': parameters(0)
            '"SetWaterDeforms"': parameters(1)
            '"SetTerrainTypeBJ"': parameters(5)
            '"SetTerrainPathableBJ"': parameters(3)
            '"SetWaterBaseColorBJ"': parameters(4)
            '"SetSkyModel"': parameters(1)
            '"SetTerrainFogExBJ"': parameters(7)
            '"ResetTerrainFogBJ"': parameters(0)
            '"SetBlightRectBJ"': parameters(3)
            '"SetBlightRadiusLocBJ"': parameters(4)
            '"CreateTextTagLocBJ"': parameters(8)
            '"CreateTextTagUnitBJ"': parameters(8)
            '"DestroyTextTagBJ"': parameters(1)
            '"ShowTextTagForceBJ"': parameters(3)
            '"SetTextTagVelocityBJ"': parameters(3)
            '"SetTextTagColorBJ"': parameters(5)
            '"SetTextTagPosBJ"': parameters(3)
            '"SetTextTagPosUnitBJ"': parameters(3)
            '"SetTextTagTextBJ"': parameters(3)
            '"SetTextTagSuspendedBJ"': parameters(2)
            '"SetTextTagPermanentBJ"': parameters(2)
            '"SetTextTagLifespanBJ"': parameters(2)
            '"SetTextTagFadepointBJ"': parameters(2)
            '"SetTextTagAgeBJ"': parameters(2)
            '"DisplayTextToForce"': parameters(2)
            '"DisplayTimedTextToForce"': parameters(3)
            '"PauseGameOn"': parameters(0)
            '"PauseGameOff"': parameters(0)
            '"SetGameSpeed"': parameters(1)
            '"LockGameSpeedBJ"': parameters(0)
            '"UnlockGameSpeedBJ"': parameters(0)
            '"SetMapFlag"': parameters(2)
            '"SetTimeOfDay"': parameters(1)
            '"SetTimeOfDayScalePercentBJ"': parameters(1)
            '"UseTimeOfDayBJ"': parameters(1)
            '"ShareEverythingWithTeam"': parameters(1)
            '"MakeUnitsPassiveForPlayer"': parameters(1)
            '"SetNextLevelBJ"': parameters(1)
            '"CustomVictoryBJ"': parameters(3)
            '"CustomDefeatBJ"': parameters(2)
            '"SaveGame"': parameters(1)
            '"LoadGameBJ"': parameters(2)
            '"SaveAndLoadGameBJ"': parameters(3)
            '"SaveAndChangeLevelBJ"': parameters(3)
            '"RenameSaveDirectoryBJ"': parameters(2)
            '"RemoveSaveDirectoryBJ"': parameters(1)
            '"CopySaveGameBJ"': parameters(2)
            '"SetCampaignMenuRaceBJ"': parameters(1)
            '"SetMissionAvailableBJ"': parameters(2)
            '"SetCampaignAvailableBJ"': parameters(2)
            '"SetCinematicAvailableBJ"': parameters(2)
            '"ShowCustomCampaignButton"': parameters(2)
            '"SetAllyColorFilterState"': parameters(1)
            '"SetCreepCampFilterState"': parameters(1)
            '"EnableMinimapFilterButtons"': parameters(2)
            '"EnableSelect"': parameters(2)
            '"EnableDragSelect"': parameters(2)
            '"EnablePreSelect"': parameters(2)
            '"ForceUIKeyBJ"': parameters(2)
            '"ForceUICancelBJ"': parameters(1)
            '"Preload"': parameters(1)
            '"PreloadEnd"': parameters(1)
            '"Preloader"': parameters(1)
            '"InitGameCacheBJ"': parameters(1)
            '"SaveGameCacheBJ"': parameters(1)
            '"StoreUnitBJ"': parameters(4)
            '"StoreRealBJ"': parameters(4)
            '"StoreIntegerBJ"': parameters(4)
            '"StoreBooleanBJ"': parameters(4)
            '"StoreStringBJ"': parameters(4)
            '"InitHashtableBJ"': parameters(0)
            '"SaveRealBJ"': parameters(4)
            '"SaveIntegerBJ"': parameters(4)
            '"SaveBooleanBJ"': parameters(4)
            '"SaveStringBJ"': parameters(4)
            '"SavePlayerHandleBJ"': parameters(4)
            '"SaveWidgetHandleBJ"': parameters(4)
            '"SaveDestructableHandleBJ"': parameters(4)
            '"SaveItemHandleBJ"': parameters(4)
            '"SaveUnitHandleBJ"': parameters(4)
            '"SaveAbilityHandleBJ"': parameters(4)
            '"SaveTimerHandleBJ"': parameters(4)
            '"SaveTriggerHandleBJ"': parameters(4)
            '"SaveTriggerConditionHandleBJ"': parameters(4)
            '"SaveTriggerActionHandleBJ"': parameters(4)
            '"SaveTriggerEventHandleBJ"': parameters(4)
            '"SaveForceHandleBJ"': parameters(4)
            '"SaveGroupHandleBJ"': parameters(4)
            '"SaveLocationHandleBJ"': parameters(4)
            '"SaveRegionHandleBJ"': parameters(4)
            '"SaveRectHandleBJ"': parameters(4)
            '"SaveBooleanExprHandleBJ"': parameters(4)
            '"SaveSoundHandleBJ"': parameters(4)
            '"SaveEffectHandleBJ"': parameters(4)
            '"SaveUnitPoolHandleBJ"': parameters(4)
            '"SaveItemPoolHandleBJ"': parameters(4)
            '"SaveQuestHandleBJ"': parameters(4)
            '"SaveQuestItemHandleBJ"': parameters(4)
            '"SaveDefeatConditionHandleBJ"': parameters(4)
            '"SaveTimerDialogHandleBJ"': parameters(4)
            '"SaveLeaderboardHandleBJ"': parameters(4)
            '"SaveMultiboardHandleBJ"': parameters(4)
            '"SaveMultiboardItemHandleBJ"': parameters(4)
            '"SaveTrackableHandleBJ"': parameters(4)
            '"SaveGameCacheHandleBJ"': parameters(4)
            '"SaveDialogHandleBJ"': parameters(4)
            '"SaveButtonHandleBJ"': parameters(4)
            '"SaveTextTagHandleBJ"': parameters(4)
            '"SaveLightningHandleBJ"': parameters(4)
            '"SaveImageHandleBJ"': parameters(4)
            '"SaveUbersplatHandleBJ"': parameters(4)
            '"SaveFogStateHandleBJ"': parameters(4)
            '"SaveFogModifierHandleBJ"': parameters(4)
            '"RestoreUnitLocFacingAngleBJ"': parameters(6)
            '"RestoreUnitLocFacingPointBJ"': parameters(6)
            '"ReloadGameCachesFromDisk"': parameters(0)
            '"FlushGameCacheBJ"': parameters(1)
            '"FlushStoredMissionBJ"': parameters(2)
            '"FlushParentHashtableBJ"': parameters(1)
            '"FlushChildHashtableBJ"': parameters(2)
            '"SelectHeroSkill"': parameters(2)
            '"SetHeroLevel"': parameters(3)
            '"SetHeroXP"': parameters(3)
            '"AddHeroXPSwapped"': parameters(3)
            '"SuspendHeroXPBJ"': parameters(2)
            '"SetPlayerHandicapXPBJ"': parameters(2)
            '"ReviveHeroLoc"': parameters(3)
            '"ModifyHeroStat"': parameters(4)
            '"ModifyHeroSkillPoints"': parameters(3)
            '"SetReservedLocalHeroButtons"': parameters(1)
            '"UnitAddItemSwapped"': parameters(2)
            '"UnitAddItemByIdSwapped"': parameters(2)
            '"UnitRemoveItemSwapped"': parameters(2)
            '"UnitRemoveItemFromSlotSwapped"': parameters(2)
            '"UnitUseItemTarget"': parameters(3)
            '"UnitUseItemPointLoc"': parameters(3)
            '"UnitUseItemDestructable"': parameters(3)
            '"UnitUseItem"': parameters(2)
            '"CreateItemLoc"': parameters(2)
            '"RemoveItem"': parameters(1)
            '"SetItemVisibleBJ"': parameters(2)
            '"SetItemPositionLoc"': parameters(2)
            '"SetItemLifeBJ"': parameters(2)
            '"SetItemCharges"': parameters(2)
            '"SetItemInvulnerableBJ"': parameters(2)
            '"SetItemPawnable"': parameters(2)
            '"SetItemDroppableBJ"': parameters(2)
            '"SetItemDropOnDeathBJ"': parameters(2)
            '"SetItemPlayerBJ"': parameters(3)
            '"SetItemUserData"': parameters(2)
            '"EnumItemsInRectBJMultiple"': parameters(1)
            '"EnumItemsInRectBJ"': parameters(2)
            '"CreateImageBJ"': parameters(5)
            '"DestroyImage"': parameters(1)
            '"ShowImageBJ"': parameters(2)
            '"SetImageConstantHeight"': parameters(3)
            '"SetImagePositionBJ"': parameters(3)
            '"SetImageColorBJ"': parameters(5)
            '"SetImageRender"': parameters(2)
            '"SetImageRenderAlways"': parameters(2)
            '"SetImageAboveWater"': parameters(3)
            '"SetImageType"': parameters(2)
            '"CreateLeaderboardBJ"': parameters(2)
            '"DestroyLeaderboardBJ"': parameters(1)
            '"LeaderboardSortItemsBJ"': parameters(3)
            '"LeaderboardDisplayBJ"': parameters(2)
            '"LeaderboardSetLabelBJ"': parameters(2)
            '"LeaderboardSetLabelColorBJ"': parameters(5)
            '"LeaderboardSetValueColorBJ"': parameters(5)
            '"LeaderboardSetStyleBJ"': parameters(5)
            '"LeaderboardAddItemBJ"': parameters(4)
            '"LeaderboardRemovePlayerItemBJ"': parameters(2)
            '"LeaderboardSetPlayerItemLabelBJ"': parameters(3)
            '"LeaderboardSetPlayerItemLabelColorBJ"': parameters(6)
            '"LeaderboardSetPlayerItemValueBJ"': parameters(3)
            '"LeaderboardSetPlayerItemValueColorBJ"': parameters(6)
            '"LeaderboardSetPlayerItemStyleBJ"': parameters(5)
            '"AddLightningLoc"': parameters(3)
            '"DestroyLightningBJ"': parameters(1)
            '"MoveLightningLoc"': parameters(3)
            '"SetLightningColorBJ"': parameters(5)
            '"MeleeStartingVisibility"': parameters(0)
            '"MeleeStartingHeroLimit"': parameters(0)
            '"MeleeGrantHeroItems"': parameters(0)
            '"MeleeStartingResources"': parameters(0)
            '"MeleeClearExcessUnits"': parameters(0)
            '"MeleeStartingUnits"': parameters(0)
            '"MeleeStartingAI"': parameters(0)
            '"MeleeInitVictoryDefeat"': parameters(0)
            '"MeleeStartingUnitsForPlayer"': parameters(4)
            '"CreateMultiboardBJ"': parameters(3)
            '"DestroyMultiboardBJ"': parameters(1)
            '"MultiboardDisplayBJ"': parameters(2)
            '"MultiboardAllowDisplayBJ"': parameters(1)
            '"MultiboardMinimizeBJ"': parameters(2)
            '"MultiboardClear"': parameters(1)
            '"MultiboardSetTitleText"': parameters(2)
            '"MultiboardSetTitleTextColorBJ"': parameters(5)
            '"MultiboardSetRowCount"': parameters(2)
            '"MultiboardSetColumnCount"': parameters(2)
            '"MultiboardSetItemStyleBJ"': parameters(5)
            '"MultiboardSetItemValueBJ"': parameters(4)
            '"MultiboardSetItemColorBJ"': parameters(7)
            '"MultiboardSetItemWidthBJ"': parameters(4)
            '"MultiboardSetItemIconBJ"': parameters(4)
            '"AddResourceAmountBJ"': parameters(2)
            '"SetResourceAmount"': parameters(2)
            '"BlightGoldMineForPlayer"': parameters(2)
            '"WaygateActivateBJ"': parameters(2)
            '"WaygateSetDestinationLocBJ"': parameters(2)
            '"SetAltMinimapIcon"': parameters(1)
            '"UnitSetUsesAltIconBJ"': parameters(2)
            '"AddItemToStockBJ"': parameters(4)
            '"AddItemToAllStock"': parameters(3)
            '"AddUnitToStockBJ"': parameters(4)
            '"AddUnitToAllStock"': parameters(3)
            '"RemoveItemFromStockBJ"': parameters(2)
            '"RemoveItemFromAllStock"': parameters(1)
            '"RemoveUnitFromStockBJ"': parameters(2)
            '"RemoveUnitFromAllStock"': parameters(1)
            '"SetItemTypeSlots"': parameters(2)
            '"SetAllItemTypeSlots"': parameters(1)
            '"SetUnitTypeSlots"': parameters(2)
            '"SetAllUnitTypeSlots"': parameters(1)
            '"SetPlayerState"': parameters(3)
            '"AdjustPlayerStateBJ"': parameters(3)
            '"SetPlayerFlagBJ"': parameters(3)
            '"SetPlayerTaxRateBJ"': parameters(4)
            '"EnableCreepSleepBJ"': parameters(1)
            '"SetPlayerAllianceStateBJ"': parameters(3)
            '"SetPlayerAllianceBJ"': parameters(4)
            '"SetPlayerAbilityAvailableBJ"': parameters(3)
            '"SetPlayerUnitAvailableBJ"': parameters(3)
            '"SetPlayerUnitMaxAllowed"': parameters(3)
            '"SetPlayerMaxHeroesAllowed"': parameters(2)
            '"SetPlayerTechResearchedSwap"': parameters(3)
            '"SetPlayerTechMaxAllowedSwap"': parameters(3)
            '"SetPlayerColorBJ"': parameters(3)
            '"SetPlayerHandicapBJ"': parameters(2)
            '"SetPlayerOnScoreScreenBJ"': parameters(2)
            '"SetPlayerName"': parameters(2)
            '"ForForceMultiple"': parameters(1)
            '"ForForce"': parameters(2)
            '"ForceAddPlayerSimple"': parameters(2)
            '"ForceRemovePlayerSimple"': parameters(2)
            '"ForceClear"': parameters(1)
            '"SetForceAllianceStateBJ"': parameters(3)
            '"QuestMessageBJ"': parameters(3)
            '"CreateQuestBJ"': parameters(4)
            '"DestroyQuestBJ"': parameters(1)
            '"QuestSetEnabledBJ"': parameters(2)
            '"QuestSetCompletedBJ"': parameters(2)
            '"QuestSetFailedBJ"': parameters(2)
            '"QuestSetDiscoveredBJ"': parameters(2)
            '"QuestSetTitleBJ"': parameters(2)
            '"QuestSetDescriptionBJ"': parameters(2)
            '"CreateQuestItemBJ"': parameters(2)
            '"QuestItemSetCompletedBJ"': parameters(2)
            '"QuestItemSetDescriptionBJ"': parameters(2)
            '"CreateDefeatConditionBJ"': parameters(1)
            '"DestroyDefeatConditionBJ"': parameters(1)
            '"DefeatConditionSetDescriptionBJ"': parameters(2)
            '"FlashQuestDialogButtonBJ"': parameters(0)
            '"MoveRectToLoc"': parameters(2)
            '"ClearSelectionForPlayer"': parameters(1)
            '"SelectGroupForPlayerBJ"': parameters(2)
            '"SelectUnitForPlayerSingle"': parameters(2)
            '"SelectUnitAddForPlayer"': parameters(2)
            '"SelectUnitRemoveForPlayer"': parameters(2)
            '"BlzEnableSelections"': parameters(2)
            '"ClearSelection"': parameters(0)
            '"SelectGroupBJ"': parameters(1)
            '"SelectUnitSingle"': parameters(1)
            '"SelectUnitAdd"': parameters(1)
            '"SelectUnitRemove"': parameters(1)
            '"PlaySoundBJ"': parameters(1)
            '"PlaySoundAtPointBJ"': parameters(4)
            '"PlaySoundOnUnitBJ"': parameters(3)
            '"PlaySoundFromOffsetBJ"': parameters(3)
            '"StopSoundBJ"': parameters(2)
            '"KillSoundWhenDoneBJ"': parameters(1)
            '"SetSoundVolumeBJ"': parameters(2)
            '"SetSoundOffsetBJ"': parameters(2)
            '"SetSoundDistanceCutoffBJ"': parameters(2)
            '"SetSoundPitchBJ"': parameters(2)
            '"AttachSoundToUnitBJ"': parameters(2)
            '"SetSoundPositionLocBJ"': parameters(3)
            '"SetSoundDistances"': parameters(3)
            '"SetStackedSoundBJ"': parameters(3)
            '"SetAmbientDaySound"': parameters(1)
            '"SetAmbientNightSound"': parameters(1)
            '"EnableDawnDusk"': parameters(1)
            '"SetMapMusicIndexedBJ"': parameters(2)
            '"SetMapMusicRandomBJ"': parameters(1)
            '"ClearMapMusicBJ"': parameters(0)
            '"PlayMusicBJ"': parameters(1)
            '"PlayMusicExBJ"': parameters(3)
            '"PlayThematicMusicBJ"': parameters(1)
            '"PlayThematicMusicExBJ"': parameters(2)
            '"EndThematicMusicBJ"': parameters(0)
            '"StopMusicBJ"': parameters(1)
            '"ResumeMusicBJ"': parameters(0)
            '"SetMusicVolumeBJ"': parameters(1)
            '"SetMusicOffsetBJ"': parameters(1)
            '"SetThematicMusicOffsetBJ"': parameters(1)
            '"VolumeGroupSetVolumeBJ"': parameters(2)
            '"SetCineModeVolumeGroupsBJ"': parameters(0)
            '"SetSpeechVolumeGroupsBJ"': parameters(0)
            '"VolumeGroupResetBJ"': parameters(0)
            '"AddSpecialEffectLocBJ"': parameters(2)
            '"AddSpecialEffectTargetUnitBJ"': parameters(3)
            '"DestroyEffectBJ"': parameters(1)
            '"DisableTrigger"': parameters(1)
            '"EnableTrigger"': parameters(1)
            '"ConditionalTriggerExecute"': parameters(1)
            '"TriggerExecute"': parameters(1)
            '"QueuedTriggerAddBJ"': parameters(2)
            '"QueuedTriggerRemoveBJ"': parameters(1)
            '"QueuedTriggerClearBJ"': parameters(0)
            '"QueuedTriggerClearInactiveBJ"': parameters(0)
            '"AddTriggerEvent"': parameters(2)
            '"CreateNUnitsAtLoc"': parameters(5)
            '"CreateNUnitsAtLocFacingLocBJ"': parameters(5)
            '"CreateCorpseLocBJ"': parameters(3)
            '"CreatePermanentCorpseLocBJ"': parameters(5)
            '"KillUnit"': parameters(1)
            '"RemoveUnit"': parameters(1)
            '"ExplodeUnitBJ"': parameters(1)
            '"ReplaceUnitBJ"': parameters(3)
            '"ShowUnitHide"': parameters(1)
            '"ShowUnitShow"': parameters(1)
            '"SetUnitColor"': parameters(2)
            '"SetUnitOwner"': parameters(3)
            '"UnitShareVisionBJ"': parameters(3)
            '"SetUnitPositionLoc"': parameters(2)
            '"SetUnitPositionLocFacingBJ"': parameters(3)
            '"SetUnitPositionLocFacingLocBJ"': parameters(3)
            '"SetUnitRallyPoint"': parameters(2)
            '"SetUnitRallyUnit"': parameters(2)
            '"SetUnitRallyDestructable"': parameters(2)
            '"SetUnitLifePercentBJ"': parameters(2)
            '"SetUnitManaPercentBJ"': parameters(2)
            '"SetUnitLifeBJ"': parameters(2)
            '"SetUnitManaBJ"': parameters(2)
            '"BlzEndUnitAbilityCooldown"': parameters(2)
            '"BlzSetAbilityTooltip"': parameters(3)
            '"BlzSetAbilityActivatedTooltip"': parameters(3)
            '"BlzSetAbilityExtendedTooltip"': parameters(3)
            '"BlzSetAbilityActivatedExtendedTooltip"': parameters(3)
            '"BlzSetAbilityResearchTooltip"': parameters(3)
            '"BlzSetAbilityResearchExtendedTooltip"': parameters(3)
            '"BlzSetAbilityIcon"': parameters(2)
            '"BlzSetAbilityActivatedIcon"': parameters(2)
            '"BlzSetAbilityPosX"': parameters(2)
            '"BlzSetAbilityActivatedPosX"': parameters(2)
            '"BlzSetAbilityPosY"': parameters(2)
            '"BlzSetAbilityActivatedPosY"': parameters(2)
            '"BlzSetEventDamage"': parameters(1)
            '"BlzSetItemName"': parameters(2)
            '"BlzSetItemTooltip"': parameters(2)
            '"BlzSetItemDescription"': parameters(2)
            '"BlzSetItemExtendedTooltip"': parameters(2)
            '"BlzSetItemIconPath"': parameters(2)
            '"BlzSetUnitMaxHP"': parameters(2)
            '"BlzSetUnitMaxMana"': parameters(2)
            '"BlzSetUnitArmor"': parameters(2)
            '"BlzUnitHideAbility"': parameters(3)
            '"BlzUnitDisableAbility"': parameters(4)
            '"BlzUnitCancelTimedLife"': parameters(1)
            '"BlzUnitInterruptAttack"': parameters(1)
            '"BlzSetUnitAbilityCooldown"': parameters(4)
            '"BlzSetUnitAbilityManaCost"': parameters(4)
            '"BlzSetUnitBaseDamage"': parameters(3)
            '"BlzSetUnitDiceNumber"': parameters(3)
            '"BlzSetUnitDiceSides"': parameters(3)
            '"BlzSetUnitAttackCooldown"': parameters(3)
            '"BlzSetUnitName"': parameters(2)
            '"BlzSetHeroProperName"': parameters(2)
            '"BlzSetAbilityBooleanFieldBJ"': parameters(3)
            '"BlzSetAbilityIntegerFieldBJ"': parameters(3)
            '"BlzSetAbilityRealFieldBJ"': parameters(3)
            '"BlzSetAbilityStringFieldBJ"': parameters(3)
            '"BlzSetAbilityBooleanLevelFieldBJ"': parameters(4)
            '"BlzSetAbilityIntegerLevelFieldBJ"': parameters(4)
            '"BlzSetAbilityRealLevelFieldBJ"': parameters(4)
            '"BlzSetAbilityStringLevelFieldBJ"': parameters(4)
            '"BlzSetAbilityBooleanLevelArrayFieldBJ"': parameters(5)
            '"BlzSetAbilityIntegerLevelArrayFieldBJ"': parameters(5)
            '"BlzSetAbilityRealLevelArrayFieldBJ"': parameters(5)
            '"BlzSetAbilityStringLevelArrayFieldBJ"': parameters(5)
            '"BlzAddAbilityBooleanLevelArrayFieldBJ"': parameters(4)
            '"BlzAddAbilityIntegerLevelArrayFieldBJ"': parameters(4)
            '"BlzAddAbilityRealLevelArrayFieldBJ"': parameters(4)
            '"BlzAddAbilityStringLevelArrayFieldBJ"': parameters(4)
            '"BlzRemoveAbilityBooleanLevelArrayFieldBJ"': parameters(4)
            '"BlzRemoveAbilityIntegerLevelArrayFieldBJ"': parameters(4)
            '"BlzRemoveAbilityRealLevelArrayFieldBJ"': parameters(4)
            '"BlzRemoveAbilityStringLevelArrayFieldBJ"': parameters(4)
            '"BlzItemAddAbilityBJ"': parameters(2)
            '"BlzItemRemoveAbilityBJ"': parameters(2)
            '"BlzSetItemBooleanFieldBJ"': parameters(3)
            '"BlzSetItemIntegerFieldBJ"': parameters(3)
            '"BlzSetItemRealFieldBJ"': parameters(3)
            '"BlzSetItemStringFieldBJ"': parameters(3)
            '"BlzSetUnitBooleanFieldBJ"': parameters(3)
            '"BlzSetUnitIntegerFieldBJ"': parameters(3)
            '"BlzSetUnitRealFieldBJ"': parameters(3)
            '"BlzSetUnitStringFieldBJ"': parameters(3)
            '"BlzSetUnitWeaponBooleanFieldBJ"': parameters(4)
            '"BlzSetUnitWeaponIntegerFieldBJ"': parameters(4)
            '"BlzSetUnitWeaponRealFieldBJ"': parameters(4)
            '"BlzSetUnitWeaponStringFieldBJ"': parameters(4)
            '"BlzSetSpecialEffectColorByPlayer"': parameters(2)
            '"BlzSetSpecialEffectColor"': parameters(4)
            '"BlzSetSpecialEffectAlpha"': parameters(2)
            '"BlzSetSpecialEffectScale"': parameters(2)
            '"BlzSetSpecialEffectPosition"': parameters(4)
            '"BlzSetSpecialEffectX"': parameters(2)
            '"BlzSetSpecialEffectY"': parameters(2)
            '"BlzSetSpecialEffectZ"': parameters(2)
            '"BlzSetSpecialEffectPositionLoc"': parameters(2)
            '"BlzSpecialEffectClearSubAnimations"': parameters(1)
            '"BlzSpecialEffectRemoveSubAnimation"': parameters(2)
            '"BlzSpecialEffectAddSubAnimation"': parameters(2)
            '"BlzPlaySpecialEffect"': parameters(2)
            '"BlzSetSpecialEffectHeight"': parameters(2)
            '"BlzSetSpecialEffectOrientation"': parameters(4)
            '"BlzSetSpecialEffectYaw"': parameters(2)
            '"BlzSetSpecialEffectPitch"': parameters(2)
            '"BlzSetSpecialEffectRoll"': parameters(2)
            '"BlzSetSpecialEffectTimeScale"': parameters(2)
            '"BlzSetSpecialEffectTime"': parameters(2)
            '"SetUnitInvulnerable"': parameters(2)
            '"PauseUnitBJ"': parameters(2)
            '"PauseAllUnitsBJ"': parameters(1)
            '"UnitPauseTimedLifeBJ"': parameters(2)
            '"UnitApplyTimedLifeBJ"': parameters(3)
            '"SetUnitExplodedBJ"': parameters(2)
            '"UnitSuspendDecayBJ"': parameters(2)
            '"UnitResetCooldown"': parameters(1)
            '"UnitSetConstructionProgress"': parameters(2)
            '"UnitSetUpgradeProgress"': parameters(2)
            '"UnitAddSleepPerm"': parameters(2)
            '"UnitSetCanSleepBJ"': parameters(2)
            '"UnitWakeUpBJ"': parameters(1)
            '"UnitGenerateAlarms"': parameters(2)
            '"RescueUnitBJ"': parameters(3)
            '"MakeUnitRescuableToForceBJ"': parameters(3)
            '"SetUnitRescueRange"': parameters(2)
            '"SetRescueUnitColorChangeBJ"': parameters(1)
            '"SetRescueBuildingColorChangeBJ"': parameters(1)
            '"SetUnitUseFoodBJ"': parameters(2)
            '"SetUnitFacingToFaceUnitTimed"': parameters(3)
            '"SetUnitFacingToFaceLocTimed"': parameters(3)
            '"SetUnitFacingTimed"': parameters(3)
            '"SetUnitMoveSpeed"': parameters(2)
            '"SetUnitPathing"': parameters(2)
            '"SetUnitAcquireRangeBJ"': parameters(2)
            '"SetUnitUserData"': parameters(2)
            '"UnitRemoveBuffsBJ"': parameters(2)
            '"UnitRemoveBuffsExBJ"': parameters(5)
            '"UnitRemoveBuffBJ"': parameters(2)
            '"UnitAddAbilityBJ"': parameters(2)
            '"UnitRemoveAbilityBJ"': parameters(2)
            '"UnitAddTypeBJ"': parameters(2)
            '"UnitRemoveTypeBJ"': parameters(2)
            '"IssueTargetOrder"': parameters(3)
            '"IssuePointOrderLoc"': parameters(3)
            '"IssueTargetDestructableOrder"': parameters(3)
            '"IssueTargetItemOrder"': parameters(3)
            '"IssueImmediateOrder"': parameters(2)
            '"IssueTrainOrderByIdBJ"': parameters(2)
            '"IssueUpgradeOrderByIdBJ"': parameters(2)
            '"IssueBuildOrderByIdLocBJ"': parameters(3)
            '"UnitDropItemPointLoc"': parameters(3)
            '"UnitDropItemSlotBJ"': parameters(3)
            '"UnitDropItemTargetBJ"': parameters(3)
            '"UnitDamagePointLoc"': parameters(7)
            '"UnitDamageTargetBJ"': parameters(5)
            '"DecUnitAbilityLevelSwapped"': parameters(2)
            '"IncUnitAbilityLevelSwapped"': parameters(2)
            '"SetUnitAbilityLevelSwapped"': parameters(3)
            '"ForGroupMultiple"': parameters(1)
            '"ForGroup"': parameters(2)
            '"GroupAddUnitSimple"': parameters(2)
            '"GroupAddGroup"': parameters(2)
            '"GroupRemoveUnitSimple"': parameters(2)
            '"GroupRemoveGroup"': parameters(2)
            '"GroupClear"': parameters(1)
            '"GroupTargetOrder"': parameters(3)
            '"GroupPointOrderLoc"': parameters(3)
            '"GroupTargetDestructableOrder"': parameters(3)
            '"GroupTargetItemOrder"': parameters(3)
            '"GroupImmediateOrder"': parameters(2)
            '"GroupTrainOrderByIdBJ"': parameters(2)
            '"CreateUbersplatBJ"': parameters(8)
            '"DestroyUbersplat"': parameters(1)
            '"ResetUbersplat"': parameters(1)
            '"FinishUbersplat"': parameters(1)
            '"ShowUbersplatBJ"': parameters(2)
            '"SetUbersplatRender"': parameters(2)
            '"SetUbersplatRenderAlways"': parameters(2)
            '"FogEnableOn"': parameters(0)
            '"FogEnableOff"': parameters(0)
            '"FogMaskEnableOn"': parameters(0)
            '"FogMaskEnableOff"': parameters(0)
            '"CreateFogModifierRectBJ"': parameters(4)
            '"CreateFogModifierRadiusLocBJ"': parameters(5)
            '"FogModifierStart"': parameters(1)
            '"FogModifierStop"': parameters(1)
            '"DestroyFogModifier"': parameters(1)
            '"MapInitializationEvent"': parameters(0)
            '"TriggerRegisterDeathEvent"': parameters(1)
            '"TriggerRegisterDestDeathInRegionEvent"': parameters(1)
            '"TriggerRegisterDialogEventBJ"': parameters(1)
            '"TriggerRegisterGameStateEventTimeOfDay"': parameters(2)
            '"TriggerRegisterVariableEvent"': parameters(3)
            '"TriggerRegisterGameLoadedEventBJ"': parameters(0)
            '"TriggerRegisterGameSavedEventBJ"': parameters(0)
            '"TriggerRegisterShowSkillEventBJ"': parameters(0)
            '"TriggerRegisterBuildSubmenuEventBJ"': parameters(0)
            '"TriggerRegisterGameEvent"': parameters(1)
            '"TriggerRegisterPlayerChatEvent"': parameters(3)
            '"TriggerRegisterPlayerEventEndCinematic"': parameters(1)
            '"TriggerRegisterPlayerSelectionEventBJ"': parameters(2)
            '"TriggerRegisterPlayerKeyEventBJ"': parameters(3)
            '"TriggerRegisterPlayerMouseEventBJ"': parameters(2)
            '"TriggerRegisterPlayerStateEvent"': parameters(4)
            '"TriggerRegisterPlayerEventAllianceChanged"': parameters(1)
            '"TriggerRegisterPlayerAllianceChange"': parameters(2)
            '"TriggerRegisterPlayerEventVictory"': parameters(1)
            '"TriggerRegisterPlayerEventDefeat"': parameters(1)
            '"TriggerRegisterPlayerEventLeave"': parameters(1)
            '"TriggerRegisterTimerEventSingle"': parameters(1)
            '"TriggerRegisterTimerEventPeriodic"': parameters(1)
            '"TriggerRegisterTimerExpireEventBJ"': parameters(1)
            '"TriggerRegisterUnitEvent"': parameters(2)
            '"TriggerRegisterPlayerUnitEventSimple"': parameters(2)
            '"TriggerRegisterAnyUnitEventBJ"': parameters(1)
            '"TriggerRegisterEnterRectSimple"': parameters(1)
            '"TriggerRegisterLeaveRectSimple"': parameters(1)
            '"TriggerRegisterUnitInRangeSimple"': parameters(2)
            '"TriggerRegisterUnitLifeEvent"': parameters(3)
            '"TriggerRegisterUnitManaEvent"': parameters(3)
            '"OperatorCompareBoolean"': parameters(3)
            '"OperatorCompareAbilityId"': parameters(3)
            '"OperatorCompareBuffId"': parameters(3)
            '"OperatorCompareDestructible"': parameters(3)
            '"OperatorCompareDestructableCode"': parameters(3)
            '"OperatorCompareButton"': parameters(3)
            '"OperatorCompareGameDifficulty"': parameters(3)
            '"OperatorCompareGameSpeed"': parameters(3)
            '"OperatorCompareHeroSkill"': parameters(3)
            '"OperatorCompareInteger"': parameters(3)
            '"OperatorCompareItem"': parameters(3)
            '"OperatorCompareItemType"': parameters(3)
            '"OperatorCompareItemCode"': parameters(3)
            '"OperatorCompareMouseButton"': parameters(3)
            '"OperatorCompareMeleeDifficulty"': parameters(3)
            '"OperatorCompareOrderCode"': parameters(3)
            '"OperatorComparePlayer"': parameters(3)
            '"OperatorComparePlayerColor"': parameters(3)
            '"OperatorComparePlayerControl"': parameters(3)
            '"OperatorComparePlayerSlotStatus"': parameters(3)
            '"OperatorCompareRace"': parameters(3)
            '"OperatorCompareReal"': parameters(3)
            '"OperatorCompareString"': parameters(3)
            '"OperatorCompareTechCode"': parameters(3)
            '"OperatorCompareTerrainType"': parameters(3)
            '"OperatorCompareTrigger"': parameters(3)
            '"OperatorCompareUnit"': parameters(3)
            '"OperatorCompareUnitCode"': parameters(3)
            '"GetBooleanAnd"': parameters(2)
            '"GetBooleanOr"': parameters(2)
            '"AndMultiple"': parameters(0)
            '"OrMultiple"': parameters(0)
            '"BlzIsTargetIndicatorEnabled"': parameters(0)
            '"IsDestructableAliveBJ"': parameters(1)
            '"IsDestructableDeadBJ"': parameters(1)
            '"IsDestructableInvulnerableBJ"': parameters(1)
            '"IsPointBlightedBJ"': parameters(1)
            '"IsTerrainPathableBJ"': parameters(2)
            '"IsMapFlagSet"': parameters(1)
            '"IsCustomCampaignButtonVisibile"': parameters(1)
            '"GetCreepCampFilterState"': parameters(0)
            '"SaveGameExists"': parameters(1)
            '"GetStoredBooleanBJ"': parameters(3)
            '"BlzIsUnitSelectable"': parameters(1)
            '"BlzIsUnitInvulnerable"': parameters(1)
            '"BlzIsSelectionEnabled"': parameters(0)
            '"BlzIsSelectionCircleEnabled"': parameters(0)
            '"BlzIsLastInstanceObjectFunctionSuccessful"': parameters(0)
            '"BlzGetAbilityBooleanField"': parameters(2)
            '"BlzGetAbilityBooleanLevelField"': parameters(3)
            '"BlzGetAbilityBooleanLevelArrayField"': parameters(4)
            '"BlzSetAbilityBooleanField"': parameters(3)
            '"BlzSetAbilityIntegerField"': parameters(3)
            '"BlzSetAbilityRealField"': parameters(3)
            '"BlzSetAbilityStringField"': parameters(3)
            '"BlzSetAbilityBooleanLevelField"': parameters(4)
            '"BlzSetAbilityIntegerLevelField"': parameters(4)
            '"BlzSetAbilityRealLevelField"': parameters(4)
            '"BlzSetAbilityStringLevelField"': parameters(4)
            '"BlzSetAbilityBooleanLevelArrayField"': parameters(5)
            '"BlzSetAbilityIntegerLevelArrayField"': parameters(5)
            '"BlzSetAbilityRealLevelArrayField"': parameters(5)
            '"BlzSetAbilityStringLevelArrayField"': parameters(5)
            '"BlzAddAbilityBooleanLevelArrayField"': parameters(4)
            '"BlzAddAbilityIntegerLevelArrayField"': parameters(4)
            '"BlzAddAbilityRealLevelArrayField"': parameters(4)
            '"BlzAddAbilityStringLevelArrayField"': parameters(4)
            '"BlzRemoveAbilityBooleanLevelArrayField"': parameters(4)
            '"BlzRemoveAbilityIntegerLevelArrayField"': parameters(4)
            '"BlzRemoveAbilityRealLevelArrayField"': parameters(4)
            '"BlzRemoveAbilityStringLevelArrayField"': parameters(4)
            '"BlzItemAddAbility"': parameters(2)
            '"BlzItemRemoveAbility"': parameters(2)
            '"BlzGetItemBooleanField"': parameters(2)
            '"BlzSetItemBooleanField"': parameters(3)
            '"BlzSetItemIntegerField"': parameters(3)
            '"BlzSetItemRealField"': parameters(3)
            '"BlzSetItemStringField"': parameters(3)
            '"BlzGetUnitBooleanField"': parameters(2)
            '"BlzSetUnitBooleanField"': parameters(3)
            '"BlzSetUnitIntegerField"': parameters(3)
            '"BlzSetUnitRealField"': parameters(3)
            '"BlzSetUnitStringField"': parameters(3)
            '"BlzGetUnitWeaponBooleanField"': parameters(3)
            '"BlzSetUnitWeaponBooleanField"': parameters(4)
            '"BlzSetUnitWeaponIntegerField"': parameters(4)
            '"BlzSetUnitWeaponRealField"': parameters(4)
            '"BlzSetUnitWeaponStringField"': parameters(4)
            '"GetHandleIdBJ"': parameters(1)
            '"StringHashBJ"': parameters(1)
            '"LoadIntegerBJ"': parameters(3)
            '"LoadRealBJ"': parameters(3)
            '"LoadStringBJ"': parameters(3)
            '"LoadBooleanBJ"': parameters(3)
            '"LoadPlayerHandleBJ"': parameters(3)
            '"LoadWidgetHandleBJ"': parameters(3)
            '"LoadDestructableHandleBJ"': parameters(3)
            '"LoadItemHandleBJ"': parameters(3)
            '"LoadUnitHandleBJ"': parameters(3)
            '"LoadAbilityHandleBJ"': parameters(3)
            '"LoadTimerHandleBJ"': parameters(3)
            '"LoadTriggerHandleBJ"': parameters(3)
            '"LoadTriggerConditionHandleBJ"': parameters(3)
            '"LoadTriggerActionHandleBJ"': parameters(3)
            '"LoadTriggerEventHandleBJ"': parameters(3)
            '"LoadForceHandleBJ"': parameters(3)
            '"LoadGroupHandleBJ"': parameters(3)
            '"LoadLocationHandleBJ"': parameters(3)
            '"LoadRegionHandleBJ"': parameters(3)
            '"LoadRectHandleBJ"': parameters(3)
            '"LoadBooleanExprHandleBJ"': parameters(3)
            '"LoadSoundHandleBJ"': parameters(3)
            '"LoadEffectHandleBJ"': parameters(3)
            '"LoadUnitPoolHandleBJ"': parameters(3)
            '"LoadItemPoolHandleBJ"': parameters(3)
            '"LoadQuestHandleBJ"': parameters(3)
            '"LoadQuestItemHandleBJ"': parameters(3)
            '"LoadDefeatConditionHandleBJ"': parameters(3)
            '"LoadTimerDialogHandleBJ"': parameters(3)
            '"LoadLeaderboardHandleBJ"': parameters(3)
            '"LoadMultiboardHandleBJ"': parameters(3)
            '"LoadMultiboardItemHandleBJ"': parameters(3)
            '"LoadTrackableHandleBJ"': parameters(3)
            '"LoadDialogHandleBJ"': parameters(3)
            '"LoadButtonHandleBJ"': parameters(3)
            '"LoadTextTagHandleBJ"': parameters(3)
            '"LoadLightningHandleBJ"': parameters(3)
            '"LoadImageHandleBJ"': parameters(3)
            '"LoadUbersplatHandleBJ"': parameters(3)
            '"LoadFogStateHandleBJ"': parameters(3)
            '"LoadFogModifierHandleBJ"': parameters(3)
            '"HaveStoredValue"': parameters(4)
            '"HaveSavedValue"': parameters(4)
            '"UnitHasItem"': parameters(2)
            '"UnitHasItemOfTypeBJ"': parameters(2)
            '"IsSuspendedXP"': parameters(1)
            '"CheckItemStatus"': parameters(2)
            '"CheckItemcodeStatus"': parameters(2)
            '"IsItemHiddenBJ"': parameters(1)
            '"IsItemOwned"': parameters(1)
            '"RectContainsItem"': parameters(2)
            '"IsItemInvulnerable"': parameters(1)
            '"LeaderboardHasPlayerItemBJ"': parameters(2)
            '"IsMultiboardDisplayed"': parameters(1)
            '"IsMultiboardMinimized"': parameters(1)
            '"WaygateIsActiveBJ"': parameters(1)
            '"IsPlayerFlagSetBJ"': parameters(2)
            '"IsPlayerAlly"': parameters(2)
            '"IsPlayerEnemy"': parameters(2)
            '"GetPlayerAlliance"': parameters(3)
            '"IsPlayerInForce"': parameters(2)
            '"IsQuestItemCompleted"': parameters(1)
            '"IsQuestEnabled"': parameters(1)
            '"IsQuestCompleted"': parameters(1)
            '"IsQuestFailed"': parameters(1)
            '"IsQuestDiscovered"': parameters(1)
            '"IsQuestRequired"': parameters(1)
            '"RectContainsLoc"': parameters(2)
            '"IsTriggerEnabled"': parameters(1)
            '"TriggerEvaluate"': parameters(1)
            '"IsTriggerQueuedBJ"': parameters(1)
            '"IsTriggerQueueEmptyBJ"': parameters(0)
            '"IsUnitType"': parameters(2)
            '"IsUnitIdType"': parameters(2)
            '"IsUnitInGroup"': parameters(2)
            '"RectContainsUnit"': parameters(2)
            '"IsUnitAliveBJ"': parameters(1)
            '"IsUnitDeadBJ"': parameters(1)
            '"IsUnitPausedBJ"': parameters(1)
            '"IsUnitHiddenBJ"': parameters(1)
            '"IsUnitIllusionBJ"': parameters(1)
            '"UnitCanSleepPerm"': parameters(1)
            '"UnitCanSleepBJ"': parameters(1)
            '"UnitIsSleepingBJ"': parameters(1)
            '"DoesUnitGenerateAlarms"': parameters(1)
            '"IsUnitLoadedBJ"': parameters(1)
            '"IsUnitInTransportBJ"': parameters(2)
            '"IsUnitSelected"': parameters(2)
            '"IsUnitAlly"': parameters(2)
            '"IsUnitEnemy"': parameters(2)
            '"UnitHasBuffBJ"': parameters(2)
            '"IsUnitGroupEmptyBJ"': parameters(1)
            '"IsUnitGroupInRectBJ"': parameters(2)
            '"IsUnitGroupDeadBJ"': parameters(1)
            '"IsFogEnabled"': parameters(0)
            '"IsFogMaskEnabled"': parameters(0)
            '"IsUnitVisible"': parameters(2)
            '"IsUnitInvisible"': parameters(2)
            '"IsUnitFogged"': parameters(2)
            '"IsUnitMasked"': parameters(2)
            '"IsLocationVisibleToPlayer"': parameters(2)
            '"IsLocationFoggedToPlayer"': parameters(2)
            '"IsLocationMaskedToPlayer"': parameters(2)
            '"OperatorInt"': parameters(3)
            '"GetForLoopIndexA"': parameters(0)
            '"GetForLoopIndexB"': parameters(0)
            '"StringLength"': parameters(1)
            '"R2I"': parameters(1)
            '"S2I"': parameters(1)
            '"BlzS2FourCC"': parameters(1)
            '"GetElevatorHeight"': parameters(1)
            '"GetTerrainCliffLevelBJ"': parameters(1)
            '"GetTerrainVarianceBJ"': parameters(1)
            '"GetLearnedSkillLevel"': parameters(0)
            '"GetPlayers"': parameters(0)
            '"GetTeams"': parameters(0)
            '"GetAllyColorFilterState"': parameters(0)
            '"GetTournamentFinishNowRule"': parameters(0)
            '"GetTournamentScore"': parameters(1)
            '"BlzGetAbilityPosX"': parameters(1)
            '"BlzGetAbilityActivatedPosX"': parameters(1)
            '"BlzGetAbilityPosY"': parameters(1)
            '"BlzGetAbilityActivatedPosY"': parameters(1)
            '"GetStoredIntegerBJ"': parameters(3)
            '"GetHeroLevel"': parameters(1)
            '"GetHeroXP"': parameters(1)
            '"GetHeroStatBJ"': parameters(3)
            '"GetHeroSkillPoints"': parameters(1)
            '"GetItemLevel"': parameters(1)
            '"GetItemCharges"': parameters(1)
            '"GetItemUserData"': parameters(1)
            '"LeaderboardGetPlayerIndexBJ"': parameters(2)
            '"GetRandomInt"': parameters(2)
            '"IMinBJ"': parameters(2)
            '"IMaxBJ"': parameters(2)
            '"IAbsBJ"': parameters(1)
            '"ISignBJ"': parameters(1)
            '"ModuloInteger"': parameters(2)
            '"MultiboardGetRowCount"': parameters(1)
            '"MultiboardGetColumnCount"': parameters(1)
            '"GetResourceAmount"': parameters(1)
            '"GetPlayerState"': parameters(2)
            '"GetPlayerTaxRateBJ"': parameters(3)
            '"GetPlayerScore"': parameters(2)
            '"GetConvertedPlayerId"': parameters(1)
            '"GetPlayerStructureCount"': parameters(2)
            '"GetPlayerUnitCount"': parameters(2)
            '"GetPlayerTechCountSimple"': parameters(2)
            '"GetPlayerTechMaxAllowedSwap"': parameters(2)
            '"GetPlayerTeam"': parameters(1)
            '"CountPlayersInForceBJ"': parameters(1)
            '"BlzGetTriggerPlayerMouseButton"': parameters(0)
            '"CountUnitsInGroup"': parameters(1)
            '"CountLivingPlayerUnitsOfTypeId"': parameters(2)
            '"GetUnitFoodUsed"': parameters(1)
            '"GetUnitFoodMade"': parameters(1)
            '"GetFoodUsed"': parameters(1)
            '"GetFoodMade"': parameters(1)
            '"GetUnitPointValue"': parameters(1)
            '"GetUnitPointValueByType"': parameters(1)
            '"GetUnitUserData"': parameters(1)
            '"GetUnitLevel"': parameters(1)
            '"GetUnitAbilityLevelSwapped"': parameters(2)
            '"UnitInventoryCount"': parameters(1)
            '"UnitInventorySizeBJ"': parameters(1)
            '"UnitCountBuffsExBJ"': parameters(5)
            '"BlzGetUnitMaxHP"': parameters(1)
            '"BlzGetUnitMaxMana"': parameters(1)
            '"BlzGetUnitBaseDamage"': parameters(2)
            '"BlzGetUnitDiceNumber"': parameters(2)
            '"BlzGetUnitDiceSides"': parameters(2)
            '"GetTriggerEvalCount"': parameters(1)
            '"GetTriggerExecCount"': parameters(1)
            '"QueuedTriggerCountBJ"': parameters(0)
            '"BlzGetAbilityManaCost"': parameters(2)
            '"BlzGetUnitAbilityManaCost"': parameters(3)
            '"BlzGetAbilityIntegerField"': parameters(2)
            '"BlzGetAbilityIntegerLevelField"': parameters(3)
            '"BlzGetAbilityIntegerLevelArrayField"': parameters(4)
            '"BlzGetUnitIntegerField"': parameters(2)
            '"BlzGetUnitWeaponIntegerField"': parameters(3)
            '"BlzGetItemIntegerField"': parameters(2)
            '"BlzBitOr"': parameters(2)
            '"BlzBitAnd"': parameters(2)
            '"BlzBitXor"': parameters(2)
            '"OperatorReal"': parameters(3)
            '"GetLocationX"': parameters(1)
            '"GetLocationY"': parameters(1)
            '"CameraSetupGetFieldSwap"': parameters(2)
            '"GetCameraField"': parameters(1)
            '"GetCameraTargetPositionX"': parameters(0)
            '"GetCameraTargetPositionY"': parameters(0)
            '"GetCameraTargetPositionZ"': parameters(0)
            '"GetCameraEyePositionX"': parameters(0)
            '"GetCameraEyePositionY"': parameters(0)
            '"GetCameraEyePositionZ"': parameters(0)
            '"GetLastTransmissionDurationBJ"': parameters(0)
            '"I2R"': parameters(1)
            '"S2R"': parameters(1)
            '"Deg2Rad"': parameters(1)
            '"Rad2Deg"': parameters(1)
            '"TimerGetElapsed"': parameters(1)
            '"TimerGetRemaining"': parameters(1)
            '"TimerGetTimeout"': parameters(1)
            '"GetDestructableLife"': parameters(1)
            '"GetDestructableMaxLife"': parameters(1)
            '"GetDestructableOccluderHeight"': parameters(1)
            '"GetEventDamage"': parameters(0)
            '"GetTournamentFinishSoonTimeRemaining"': parameters(0)
            '"GetTimeOfDay"': parameters(0)
            '"GetTimeOfDayScalePercentBJ"': parameters(0)
            '"GetStoredRealBJ"': parameters(3)
            '"GetItemLifeBJ"': parameters(1)
            '"GetLightningColorRBJ"': parameters(1)
            '"GetLightningColorGBJ"': parameters(1)
            '"GetLightningColorBBJ"': parameters(1)
            '"GetLightningColorABJ"': parameters(1)
            '"GetRandomReal"': parameters(2)
            '"GetRandomDirectionDeg"': parameters(0)
            '"GetRandomPercentageBJ"': parameters(0)
            '"DistanceBetweenPoints"': parameters(2)
            '"AngleBetweenPoints"': parameters(2)
            '"RMinBJ"': parameters(2)
            '"RMaxBJ"': parameters(2)
            '"RAbsBJ"': parameters(1)
            '"RSignBJ"': parameters(1)
            '"ModuloReal"': parameters(2)
            '"Pow"': parameters(2)
            '"SquareRoot"': parameters(1)
            '"SinBJ"': parameters(1)
            '"CosBJ"': parameters(1)
            '"TanBJ"': parameters(1)
            '"AsinBJ"': parameters(1)
            '"AcosBJ"': parameters(1)
            '"AtanBJ"': parameters(1)
            '"Atan2BJ"': parameters(2)
            '"GetPlayerHandicapXPBJ"': parameters(1)
            '"GetPlayerHandicapBJ"': parameters(1)
            '"BlzGetTriggerPlayerMouseX"': parameters(0)
            '"BlzGetTriggerPlayerMouseY"': parameters(0)
            '"BlzGetTriggerPlayerMousePosition"': parameters(0)
            '"GetRectCenterX"': parameters(1)
            '"GetRectCenterY"': parameters(1)
            '"GetRectMinX"': parameters(1)
            '"GetRectMinY"': parameters(1)
            '"GetRectMaxX"': parameters(1)
            '"GetRectMaxY"': parameters(1)
            '"GetRectWidthBJ"': parameters(1)
            '"GetRectHeightBJ"': parameters(1)
            '"GetSoundDurationBJ"': parameters(1)
            '"GetSoundFileDurationBJ"': parameters(1)
            '"GetUnitStateSwap"': parameters(2)
            '"GetUnitLifePercent"': parameters(1)
            '"GetUnitManaPercent"': parameters(1)
            '"GetUnitFacing"': parameters(1)
            '"GetUnitMoveSpeed"': parameters(1)
            '"GetUnitDefaultMoveSpeed"': parameters(1)
            '"GetUnitAcquireRange"': parameters(1)
            '"GetUnitDefaultAcquireRange"': parameters(1)
            '"GetUnitTurnSpeed"': parameters(1)
            '"GetUnitDefaultTurnSpeed"': parameters(1)
            '"GetUnitPropWindowBJ"': parameters(1)
            '"GetUnitDefaultPropWindowBJ"': parameters(1)
            '"GetUnitFlyHeight"': parameters(1)
            '"GetUnitDefaultFlyHeight"': parameters(1)
            '"BlzGetUnitAttackCooldown"': parameters(2)
            '"BlzGetUnitArmor"': parameters(1)
            '"BlzGetAbilityCooldown"': parameters(2)
            '"BlzGetUnitAbilityCooldown"': parameters(3)
            '"BlzGetUnitAbilityCooldownRemaining"': parameters(2)
            '"BlzGetUnitCollisionSize"': parameters(1)
            '"BlzGetLocalUnitZ"': parameters(1)
            '"BlzGetLocalSpecialEffectX"': parameters(1)
            '"BlzGetLocalSpecialEffectY"': parameters(1)
            '"BlzGetLocalSpecialEffectZ"': parameters(1)
            '"BlzGetAbilityRealField"': parameters(2)
            '"BlzGetAbilityRealLevelField"': parameters(3)
            '"BlzGetAbilityRealLevelArrayField"': parameters(4)
            '"BlzGetUnitRealField"': parameters(2)
            '"BlzGetUnitWeaponRealField"': parameters(3)
            '"BlzGetItemRealField"': parameters(2)
            '"OperatorString"': parameters(2)
            '"SubStringBJ"': parameters(3)
            '"I2S"': parameters(1)
            '"R2S"': parameters(1)
            '"R2SW"': parameters(3)
            '"OrderId2StringBJ"': parameters(1)
            '"UnitId2StringBJ"': parameters(1)
            '"StringIdentity"': parameters(1)
            '"StringCase"': parameters(2)
            '"BlzFourCC2S"': parameters(1)
            '"GetDestructableName"': parameters(1)
            '"GetEventPlayerChatString"': parameters(0)
            '"GetEventPlayerChatStringMatched"': parameters(0)
            '"GetSaveBasicFilename"': parameters(0)
            '"GetAbilityName"': parameters(1)
            '"GetAbilityEffectBJ"': parameters(3)
            '"GetAbilitySoundBJ"': parameters(2)
            '"BlzGetAbilityTooltip"': parameters(2)
            '"BlzGetAbilityActivatedTooltip"': parameters(2)
            '"BlzGetAbilityExtendedTooltip"': parameters(2)
            '"BlzGetAbilityActivatedExtendedTooltip"': parameters(2)
            '"BlzGetAbilityResearchTooltip"': parameters(2)
            '"BlzGetAbilityResearchExtendedTooltip"': parameters(2)
            '"BlzGetAbilityIcon"': parameters(1)
            '"BlzGetAbilityActivatedIcon"': parameters(1)
            '"GetStoredStringBJ"': parameters(3)
            '"GetHeroProperName"': parameters(1)
            '"GetItemName"': parameters(1)
            '"BlzGetItemDescription"': parameters(1)
            '"BlzGetItemTooltip"': parameters(1)
            '"BlzGetItemExtendedTooltip"': parameters(1)
            '"BlzGetItemIconPath"': parameters(1)
            '"MultiboardGetTitleText"': parameters(1)
            '"GetPlayerName"': parameters(1)
            '"GetTriggerName"': parameters(0)
            '"GetUnitName"': parameters(1)
            '"BlzGetAbilityStringField"': parameters(2)
            '"BlzGetAbilityStringLevelField"': parameters(3)
            '"BlzGetAbilityStringLevelArrayField"': parameters(4)
            '"BlzGetUnitStringField"': parameters(2)
            '"BlzGetUnitWeaponStringField"': parameters(3)
            '"BlzGetItemStringField"': parameters(2)
            '"GetRectCenter"': parameters(1)
            '"GetRandomLocInRect"': parameters(1)
            '"OffsetLocation"': parameters(3)
            '"PolarProjectionBJ"': parameters(3)
            '"CameraSetupGetDestPositionLoc"': parameters(1)
            '"GetCameraTargetPositionLoc"': parameters(0)
            '"GetCameraEyePositionLoc"': parameters(0)
            '"Location"': parameters(2)
            '"GetDestructableLoc"': parameters(1)
            '"GetOrderPointLoc"': parameters(0)
            '"GetSpellTargetLoc"': parameters(0)
            '"GetItemLoc"': parameters(1)
            '"WaygateGetDestinationLocBJ"': parameters(1)
            '"GetPlayerStartLocationLoc"': parameters(1)
            '"GetUnitLoc"': parameters(1)
            '"GetUnitRallyPoint"': parameters(1)
            '"GetCurrentCameraBoundsMapRectBJ"': parameters(0)
            '"GetCameraBoundsMapRect"': parameters(0)
            '"GetPlayableMapRect"': parameters(0)
            '"GetEntireMapRect"': parameters(0)
            '"OffsetRectBJ"': parameters(3)
            '"RectFromCenterSizeBJ"': parameters(3)
            '"Rect"': parameters(4)
            '"RectFromLoc"': parameters(2)
            '"GetLastCreatedUnit"': parameters(0)
            '"GetLastRestoredUnitBJ"': parameters(0)
            '"GetLastReplacedUnitBJ"': parameters(0)
            '"GetLastHauntedGoldMine"': parameters(0)
            '"GetEnumUnit"': parameters(0)
            '"GetFilterUnit"': parameters(0)
            '"GroupPickRandomUnit"': parameters(1)
            '"GetAttackedUnitBJ"': parameters(0)
            '"GetAttacker"': parameters(0)
            '"GetBuyingUnit"': parameters(0)
            '"GetCancelledStructure"': parameters(0)
            '"GetSpellAbilityUnit"': parameters(0)
            '"GetConstructingStructure"': parameters(0)
            '"GetConstructedStructure"': parameters(0)
            '"GetEventDamageSource"': parameters(0)
            '"GetDecayingUnit"': parameters(0)
            '"GetDyingUnit"': parameters(0)
            '"GetEnteringUnit"': parameters(0)
            '"GetManipulatingUnit"': parameters(0)
            '"GetKillingUnitBJ"': parameters(0)
            '"GetLearningUnit"': parameters(0)
            '"GetLeavingUnit"': parameters(0)
            '"GetLevelingUnit"': parameters(0)
            '"GetLoadedUnitBJ"': parameters(0)
            '"GetOrderedUnit"': parameters(0)
            '"GetChangingUnit"': parameters(0)
            '"GetResearchingUnit"': parameters(0)
            '"GetRevivableUnit"': parameters(0)
            '"GetRevivingUnit"': parameters(0)
            '"GetSellingUnit"': parameters(0)
            '"GetSoldUnit"': parameters(0)
            '"GetSummonedUnit"': parameters(0)
            '"GetSummoningUnit"': parameters(0)
            '"GetOrderTargetUnit"': parameters(0)
            '"GetSpellTargetUnit"': parameters(0)
            '"GetEventTargetUnit"': parameters(0)
            '"GetTrainedUnit"': parameters(0)
            '"GetTransportUnitBJ"': parameters(0)
            '"GetTriggerUnit"': parameters(0)
            '"GetUnitRallyUnit"': parameters(1)
            '"GetUnitTypeId"': parameters(1)
            '"ChooseRandomCreepBJ"': parameters(1)
            '"ChooseRandomNPBuildingBJ"': parameters(0)
            '"String2UnitIdBJ"': parameters(1)
            '"GetTrainedUnitType"': parameters(0)
            '"String2OrderIdBJ"': parameters(1)
            '"UnitId2OrderIdBJ"': parameters(1)
            '"GetIssuedOrderIdBJ"': parameters(0)
            '"GetUnitCurrentOrder"': parameters(1)
            '"GetLastCreatedDestructable"': parameters(0)
            '"RandomDestructableInRectSimpleBJ"': parameters(1)
            '"RandomDestructableInRectBJ"': parameters(2)
            '"GetEnumDestructable"': parameters(0)
            '"GetFilterDestructable"': parameters(0)
            '"GetDyingDestructable"': parameters(0)
            '"GetOrderTargetDestructable"': parameters(0)
            '"GetSpellTargetDestructable"': parameters(0)
            '"GetUnitRallyDestructable"': parameters(1)
            '"GetDestructableTypeId"': parameters(1)
            '"GetLastCreatedItem"': parameters(0)
            '"GetLastRemovedItem"': parameters(0)
            '"RandomItemInRectSimpleBJ"': parameters(1)
            '"RandomItemInRectBJ"': parameters(2)
            '"GetEnumItem"': parameters(0)
            '"GetFilterItem"': parameters(0)
            '"UnitItemInSlotBJ"': parameters(2)
            '"GetItemOfTypeFromUnitBJ"': parameters(2)
            '"GetManipulatedItem"': parameters(0)
            '"GetSoldItem"': parameters(0)
            '"GetOrderTargetItem"': parameters(0)
            '"GetSpellTargetItem"': parameters(0)
            '"GetItemType"': parameters(1)
            '"GetItemTypeId"': parameters(1)
            '"ChooseRandomItemBJ"': parameters(1)
            '"ChooseRandomItemExBJ"': parameters(2)
            '"GetResearched"': parameters(0)
            '"GetSpellAbilityId"': parameters(0)
            '"BlzGetUnitAbility"': parameters(2)
            '"BlzGetItemAbilityByIndex"': parameters(2)
            '"BlzGetItemAbility"': parameters(2)
            '"GetLearnedSkillBJ"': parameters(0)
            '"GetEnumPlayer"': parameters(0)
            '"GetFilterPlayer"': parameters(0)
            '"GetOwningPlayer"': parameters(1)
            '"GetItemPlayer"': parameters(1)
            '"ForcePickRandomPlayer"': parameters(1)
            '"ConvertedPlayer"': parameters(1)
            '"GetChangingUnitPrevOwner"': parameters(0)
            '"GetTriggerPlayer"': parameters(0)
            '"LeaderboardGetIndexedPlayerBJ"': parameters(2)
            '"GetLastCreatedGroup"': parameters(0)
            '"GetRandomSubGroup"': parameters(2)
            '"GetUnitsInRectAll"': parameters(1)
            '"GetUnitsInRectOfPlayer"': parameters(2)
            '"GetUnitsInRectMatching"': parameters(2)
            '"GetUnitsInRangeOfLocAll"': parameters(2)
            '"GetUnitsInRangeOfLocMatching"': parameters(3)
            '"GetUnitsOfPlayerAll"': parameters(1)
            '"GetUnitsOfPlayerAndTypeId"': parameters(2)
            '"GetUnitsOfPlayerMatching"': parameters(2)
            '"GetUnitsOfTypeIdAll"': parameters(1)
            '"GetUnitsSelectedAll"': parameters(1)
            '"GetPlayersAll"': parameters(0)
            '"GetPlayersByMapControl"': parameters(1)
            '"GetPlayersMatching"': parameters(1)
            '"GetPlayersAllies"': parameters(1)
            '"GetPlayersEnemies"': parameters(1)
            '"GetForceOfPlayer"': parameters(1)
            '"GetPlayerRace"': parameters(1)
            '"GetUnitRace"': parameters(1)
            '"GetCurrentCameraSetup"': parameters(0)
            '"GetLastCreatedFogModifier"': parameters(0)
            '"GetTriggeringTrigger"': parameters(0)
            '"GetGameDifficulty"': parameters(0)
            '"GetAIDifficulty"': parameters(1)
            '"GetGameSpeed"': parameters(0)
            '"GetPlayerController"': parameters(1)
            '"GetPlayerColor"': parameters(1)
            '"GetPlayerSlotState"': parameters(1)
            '"GetLastCreatedEffectBJ"': parameters(0)
            '"GetLastCreatedLightningBJ"': parameters(0)
            '"GetLastCreatedImage"': parameters(0)
            '"GetLastCreatedUbersplat"': parameters(0)
            '"GetLastCreatedWeatherEffect"': parameters(0)
            '"GetLastCreatedTerrainDeformation"': parameters(0)
            '"GetTerrainTypeBJ"': parameters(1)
            '"GetLastPlayedSound"': parameters(0)
            '"GetLastPlayedMusic"': parameters(0)
            '"GetLastCreatedQuestBJ"': parameters(0)
            '"GetLastCreatedQuestItemBJ"': parameters(0)
            '"GetLastCreatedDefeatConditionBJ"': parameters(0)
            '"GetClickedDialogBJ"': parameters(0)
            '"GetLastCreatedButtonBJ"': parameters(0)
            '"GetClickedButtonBJ"': parameters(0)
            '"GetLastCreatedLeaderboard"': parameters(0)
            '"PlayerGetLeaderboardBJ"': parameters(1)
            '"GetLastCreatedMultiboard"': parameters(0)
            '"GetLastCreatedTimerBJ"': parameters(0)
            '"GetExpiredTimer"': parameters(0)
            '"GetLastCreatedTimerDialogBJ"': parameters(0)
            '"GetLastCreatedGameCacheBJ"': parameters(0)
            '"GetLastCreatedHashtableBJ"': parameters(0)
            '"GetLastCreatedTextTag"': parameters(0)
# END_PARAMETERS
            _: error
