meta:
  id: eca
  endian: le
  imports:
    - auto_construct_event
    - auto_construct_condition
    - auto_construct_action
    - wtg_error

params:
  - id: game
    type: u4
  - id: is_child
    type: u4

seq:
  - id: type
    type: u4
    enum: eca_type
  - id: group
    type: u4
    enum: eca_group
    if: is_child > 0
  - id: function_name
    type: strz
    encoding: UTF-8
  - id: is_enabled
    type: u4
  - id: arguments
    type:
      switch-on: type
      cases:
        'eca_type::event': auto_construct_event(game, function_name)
        'eca_type::condition': auto_construct_condition(game, function_name)
        'eca_type::action': auto_construct_action(game, function_name)
        _: wtg_error(type)
  - id: sub_eca_count
    type: u4
    if: game == 7
  - id: sub_ecas
    type: eca(game, 1)
    repeat: expr
    repeat-expr: 'sub_eca_count > 0 ? sub_eca_count : 0'
    if: game == 7

enums:
  eca_type:
    0: event
    1: condition
    2: action
  
  eca_group:
    0: condition
    1: then
    2: else
