meta:
  id: parameter
  endian: le
  imports:
    - sub_parameters

params:
  - id: game
    type: u4
  - id: parameter_type_
    type: u4

seq:
  - id: type
    type: u4
  - id: value
    type: strz
    encoding: UTF-8
  - id: has_sub_parameters
    type: u4
  - id: sub_parameters
    type: sub_parameters(game, parameter_type_)
    if: has_sub_parameters > 0
  - id: unknown_0
    type: u4
    if: game == 4 and type == 2
  - id: is_array_roc
    type: u4
    if: game == 4 and type != 2
  - id: unknown_1
    type: u4
    if: game == 7 and has_sub_parameters > 0
  - id: is_array_tft
    type: u4
    if: game == 7
  - id: array_index
    # 3 = "parameter_type.parameter_type::parameter"
    type: parameter(game, 3)
    if: is_array_roc > 0 or is_array_tft > 0
