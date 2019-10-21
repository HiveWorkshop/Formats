#!/bin/sh

parallel ::: 'php test.php --split-1-of-4' 'php test.php --split-2-of-4' 'php test.php --split-3-of-4' 'php test.php --split-4-of-4'
