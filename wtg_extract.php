<?php

$raw = file_get_contents('files.txt');

$files = preg_split('#[\r\n]+#', $raw, -1, PREG_SPLIT_NO_EMPTY);

foreach ($files as $file)
{
    $path = "/fortune/backup/hiveworkshop/$file";
    if (!is_file($path))
    {
        continue;
    }
    exec("./MPQExtractor -e war3map.wtg -o . $path");
    $basename = basename($file);
    rename('war3map.wtg', "./wtg/{$basename}_war3map.wtg");
}
