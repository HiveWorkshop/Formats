meta:
  id: variable
  endian: le

params:
  - id: file_version
    type: u4
  - id: game
    type: u4

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
    if: game == 7
  - id: is_initialized
    type: u4
  - id: initial_value
    type: strz
    encoding: UTF-8
  - id: variable_id
    type: u4
    if: file_version > 7
  - id: parent_category_id
    type: u4
    if: file_version > 7
