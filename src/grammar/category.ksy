meta:
  id: category
  endian: le

params:
  - id: file_version
    type: u4
  - id: game
    type: u4

seq:
  - id: index
    type: u4
  - id: name
    type: strz
    encoding: UTF-8
  - id: is_comment
    type: u4
    if: game == 7
  - id: unknown_0
    type: u4
    if: file_version > 7
  - id: parent_id
    type: u4
    if: file_version > 7
