meta:
  id: variables
  endian: le
  imports:
    - variable

params:
  - id: file_version
    type: u4
  - id: game
    type: u4

seq:
  - id: count
    type: u4
  - id: variables
    type: variable(file_version, game)
    repeat: expr
    repeat-expr: count
