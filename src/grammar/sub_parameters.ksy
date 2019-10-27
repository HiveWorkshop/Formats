meta:
  id: sub_parameters
  endian: le
  imports:
    - auto_construct_event
    - auto_construct_condition
    - auto_construct_action
    - auto_construct_parameter
    - wtg_error

params:
  - id: game
    type: u4
  - id: parameter_type
    type: u4

seq:
  - id: function_type
    type: u4
  - id: function_name
    type: strz
    encoding: UTF-8
  - id: begin_parameters
    type: u4
  - id: arguments
    type:
      switch-on: parameter_type
      cases:
# Did not get the enum to work here, possibly because the value comes from `params`
        0: auto_construct_event(game, function_name)
        1: auto_construct_condition(game, function_name)
        2: auto_construct_action(game, function_name)
        3: auto_construct_parameter(game, function_name)
        _: wtg_error(function_name)
    if: begin_parameters > 0
  - id: unknown_0
    type: u4
    if: game == 7
