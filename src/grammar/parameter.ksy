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
  - id: is_array
    type: u4
  - id: array_index
    # 3 = "parameter_type.parameter_type::parameter"
    type: parameter(game, 3)
    if: is_array > 0
