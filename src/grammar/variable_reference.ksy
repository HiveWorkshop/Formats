meta:
  id: variable_reference
  endian: le

seq:
  - id: id
    type: u4
  - id: name
    type: strz
    encoding: UTF-8
  - id: parent_id
    type: u4
