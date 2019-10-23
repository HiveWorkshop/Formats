meta:
  id: wtg
  file-extension: wtg
  endian: le
  imports:
    - auto_construct_event
    - auto_construct_condition
    - auto_construct_action
    - wtg_error

seq:
  - id: header
    type: header

  - id: body
    type:
      switch-on: header.file_version
      cases:
        4: body_pre_131
        7: body_pre_131
        _: body_post_131

instances:
  game:
    value: '_root.header.game > 0 ? _root.header.game : _root.header.file_version'

enums:
  eca_type:
    0: event
    1: condition
    2: action

types:
  header:
    seq:
      - id: magic
        contents: WTG!
      - id: file_version
        type: u4
      - id: game
        type: u4
        if: file_version > 7

  body_pre_131:

    seq:
      - id: category_count
        type: u4
      - id: categories
        type: category
        repeat: expr
        repeat-expr: category_count

      - id: unknown_0
        type: u4

      - id: variable_count
        type: u4
      - id: variables
        type: variable
        repeat: expr
        repeat-expr: variable_count

      - id: trigger_count
        type: u4

      - id: triggers
        type: trigger
        repeat: expr
        repeat-expr: trigger_count

  body_post_131:
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
        type: variables

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
        if: _root.game == 7

      - id: elements
        type: element
        repeat: eos
        # repeat-expr: element_count - 1

  deleted_item_ids:
    seq:
      - id: item_count
        type: u4
      - id: item_ids
        type: u4
        repeat: expr
        repeat-expr: item_count

  variables:
    seq:
      - id: count
        type: u4
      - id: variables
        type: variable
        repeat: expr
        repeat-expr: count

  variable:
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
        if: _root.game == 7
      - id: is_initialized
        type: u4
      - id: initial_value
        type: strz
        encoding: UTF-8
      - id: variable_id
        type: u4
        if: _root.header.file_version > 7
      - id: parent_category_id
        type: u4
        if: _root.header.file_version > 7

  element:
    seq:
      - id: element_type
        type: u4
      - id: data
        type:
          switch-on: element_type
          cases:
            4: category
            8: trigger
            16: trigger
            32: trigger
            64: variable_reference

  variable_reference:
    seq:
      - id: id
        type: u4
      - id: name
        type: strz
        encoding: UTF-8
      - id: parent_id
        type: u4

  category:
    seq:
      - id: index
        type: u4
      - id: name
        type: strz
        encoding: UTF-8
      - id: is_comment
        type: u4
        if: _root.game == 7
      - id: unknown_0
        type: u4
        if: _root.header.file_version > 7
      - id: parent_id
        type: u4
        if: _root.header.file_version > 7

  trigger:
    seq:
      - id: name
        type: strz
        encoding: UTF-8
      - id: description
        type: strz
        encoding: UTF-8
      - id: is_comment
        type: u4
        if: _root.game == 7
      - id: id
        type: u4
        if: _root.header.file_version > 7
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
        type: eca(0)
        repeat: expr
        repeat-expr: eca_count

  eca:
    params:
      - id: is_child
        type: u4
    seq:
      - id: type
        type: u4
        enum: eca_type
      - id: group
        type: u4
        if: is_child > 0
      - id: function_name
        type: strz
        encoding: UTF-8
      - id: is_enabled
        type: u4
      - id: arguments
        type:
          switch-on: type
          cases:
            'eca_type::event': auto_construct_event(_root.game, function_name)
            'eca_type::condition': auto_construct_condition(_root.game, function_name)
            'eca_type::action': auto_construct_action(_root.game, function_name)
            _: wtg_error(type)
        # repeat: expr
        # repeat-expr: function.argument_count
      - id: sub_eca_count
        type: u4
        if: _root.game == 7
      - id: sub_ecas
        type: eca(1)
        repeat: expr
        repeat-expr: 'sub_eca_count > 0 ? sub_eca_count : 0'
        if: _root.game == 7
