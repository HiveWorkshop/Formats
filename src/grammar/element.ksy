meta:
  id: element
  endian: le
  imports:
    - category
    - trigger
    - variable_reference
    - wtg_error

params:
  - id: file_version
    type: u4
  - id: game
    type: u4

seq:
  - id: element_type
    type: u4
    enum: element_type
  - id: data
    type:
      switch-on: element_type
      cases:
        'element_type::category': category(file_version, game)
        'element_type::trigger': trigger(file_version, game)
        'element_type::comment': trigger(file_version, game)
        'element_type::custom_script': trigger(file_version, game)
        'element_type::variable': variable_reference
        _: wtg_error(element_type)

enums:
  element_type:
    4: category
    8: trigger
    16: comment
    32: custom_script
    64: variable
