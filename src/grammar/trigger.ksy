meta:
  id: trigger
  endian: le
  imports:
    - eca

params:
  - id: file_version
    type: u4
  - id: game
    type: u4

seq:
  - id: name
    type: strz
    encoding: UTF-8
  - id: description
    type: strz
    encoding: UTF-8
  - id: is_comment
    type: u4
    if: game == 7
  - id: id
    type: u4
    if: file_version > 7
  - id: is_enabled
    type: u4
  - id: is_custom
    type: u4
  - id: is_initially_off
    type: u4
  - id: run_on_initialization
    type: u4
  - id: trigger_category
    type: u4
  - id: eca_count
    type: u4
  - id: ecas
    type: eca(game, 0)
    repeat: expr
    repeat-expr: eca_count
