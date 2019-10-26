meta:
  id: deleted_item_ids
  endian: le

seq:
  - id: item_count
    type: u4
  - id: item_ids
    type: u4
    repeat: expr
    repeat-expr: item_count
