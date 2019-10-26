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
  - id: data
    type:
      switch-on: element_type
      cases:
        4: category(file_version, game)
        8: trigger(file_version, game)
        16: trigger(file_version, game)
        32: trigger(file_version, game)
        64: variable_reference
        _: wtg_error(element_type)
