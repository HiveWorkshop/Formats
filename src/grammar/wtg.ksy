meta:
  id: wtg
  file-extension: wtg
  endian: le
  imports:
    - body_post_131
    - body_pre_131
    - header

seq:
  - id: header
    type: header

  - id: body
    type:
      switch-on: header.file_version
      cases:
        4: body_pre_131(header.file_version, game)
        7: body_pre_131(header.file_version, game)
        _: body_post_131(header.file_version, game)

instances:
  game:
    value: '_root.header.game > 0 ? _root.header.game : _root.header.file_version'
