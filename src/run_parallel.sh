#!/bin/sh

set -v
set -e

DIR="$( dirname "${BASH_SOURCE[0]}" )"

parallel ::: "php $DIR/test.php --parse-dir $DIR/../samples/wtg_old --split-1-of-4" \
             "php $DIR/test.php --parse-dir $DIR/../samples/wtg_old --split-2-of-4" \
             "php $DIR/test.php --parse-dir $DIR/../samples/wtg_old --split-3-of-4" \
             "php $DIR/test.php --parse-dir $DIR/../samples/wtg_old --split-4-of-4"
