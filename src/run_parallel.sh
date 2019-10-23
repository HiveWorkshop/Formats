#!/bin/sh

set -v
set -e

DIR="$( dirname "${BASH_SOURCE[0]}" )"

parallel ::: "php $DIR/test.php --parse-dir $DIR/../samples/wtg_old --split-1-of-6" \
             "php $DIR/test.php --parse-dir $DIR/../samples/wtg_old --split-2-of-6" \
             "php $DIR/test.php --parse-dir $DIR/../samples/wtg_old --split-3-of-6" \
             "php $DIR/test.php --parse-dir $DIR/../samples/wtg_old --split-4-of-6" \
             "php $DIR/test.php --parse-dir $DIR/../samples/wtg_old --split-5-of-6" \
             "php $DIR/test.php --parse-dir $DIR/../samples/wtg_old --split-6-of-6"