meta:
  id: body_post_131
  endian: le
  imports:
    - deleted_item_ids
    - variables
    - element

params:
  - id: file_version
    type: u4
  - id: game
    type: u4

seq:
  - id: unknown_0
    type: u4
  - id: unknown_1
    type: u4
  - id: unknown_2
    type: u4
  - id: unknown_3
    type: u4

  - id: category_count
    type: u4

  - id: deleted_categories
    type: deleted_item_ids

  - id: trigger_count
    type: u4

  - id: deleted_triggers
    type: deleted_item_ids

  - id: trigger_comment_count
    type: u4

  - id: deleted_trigger_comments
    type: deleted_item_ids

  - id: custom_script_count
    type: u4

  - id: deleted_custom_scripts
    type: deleted_item_ids

  - id: variable_count
    type: u4

  - id: deleted_variables
    type: deleted_item_ids

  - id: unknown_4
    type: u4

  - id: unknown_5
    type: u4

  - id: unknown_6
    type: u4

  - id: variables
    type: variables(file_version, game)

  - id: element_count
    type: u4

  - id: unknown_7
    type: u4

  - id: unknown_8
    type: u4

  - id: map_name
    type: strz
    encoding: UTF-8

  - id: unknown_9
    type: u4

  - id: unknown_10
    type: u4

  - id: unknown_11
    type: u4
    if: game == 7

  - id: elements
    type: element(file_version, game)
    repeat: eos

