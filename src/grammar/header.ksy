meta:
  id: header
  endian: le

seq:
  - id: magic
    contents: WTG!
  - id: file_version
    type: u4
  - id: game
    type: u4
    if: file_version > 7
