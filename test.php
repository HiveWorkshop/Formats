<?php

require './vendor/autoload.php';
require './dist/FunctionInfo.php';
require './dist/Wtg.php';

$g = \Wtg\Wtg::fromFile('./samples/war3map_21100.wtg');

print_r($g);
