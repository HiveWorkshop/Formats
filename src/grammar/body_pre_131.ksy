meta:
  id: body_pre_131
  endian: le
  imports:
    - category
    - variables
    - trigger

params:
  - id: file_version
    type: u4
  - id: game
    type: u4

seq:
  - id: category_count
    type: u4
  - id: categories
    type: category(file_version, game)
    repeat: expr
    repeat-expr: category_count

  - id: unknown_0
    type: u4

  - id: variables
    type: variables(file_version, game)

  - id: trigger_count
    type: u4

  - id: triggers
    type: trigger(file_version, game)
    repeat: expr
    repeat-expr: trigger_count
