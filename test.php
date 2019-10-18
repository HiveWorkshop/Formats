<?php

require './vendor/autoload.php';
require './dist/FunctionInfo.php';
require './dist/Wtg.php';

ini_set('memory_limit', '1024M');

$dir = './samples/wtg_2147483652';
$dh = opendir($dir);

$files = [];
while (($f = readdir($dh)) !== false) {
    if (strpos($f, '.wtg') >= 0) {
        $files[] = $f;
    }
}

if (in_array('--scan-single', $argv)) {
    foreach ($argv as $i => $v) {
        if ($v == '--scan-single') {
            if (!empty($argv[$i + 1])) {
                $wtg = \Wtg\Wtg::fromFile($argv[$i + 1]);
                echo "Success\n";
            } else {
                echo "Missing file argument\n";
            }
            break;
        }
    }
} elseif (in_array('--scan-versions', $argv)) {
    foreach ($files as $i => $f) {
        $magic = '';
        $version = -1;
        try {
            $fh = fopen("$dir/$f", 'r');
            $magic = fread($fh, 4);
            $fileVersion = fread($fh, 4);
            $version = @unpack('V', $fileVersion)[1];
            if ($magic != 'WTG!') {
                continue;
            }
            echo "$version: $f\n";
        } catch (Exception $e) {
            continue;
        }
    }
} elseif (in_array('--parse-files', $argv)) {
    $numTasks = 1;
    $task = 1;
    foreach ($argv as $v) {
        if (preg_match('#^\-\-split\-(\d+)\-of\-(\d+)$#', $v, $matches)) {
            list($_, $task, $numTasks) = $matches;
        }
    }
    $numTasks = max(1, $numTasks);
    if ($task < 1 || $task > $numTasks) {
        exit("Task must be greater than 1 and less than $numTasks\n");
    }
    $filesCount = count($files);
    $taskSize = floor($filesCount / $numTasks);
    $startPos = ($task - 1) * $taskSize;
    $files = array_slice($files, $startPos, $taskSize);
    $newFilesCount = count($files);

    echo "Processing $newFilesCount of $filesCount files from $startPos to ",$startPos + $taskSize,"\n";

    $stats = [
        'task' => $task,
        'task-count' => $numTasks,
        'progress' => 0.0,
    ];
    $failedFiles = [];
    $failedVersions = [];
    $successVersions = [];
    $skippedFiles = 0;
    $t = 0;
    foreach ($files as $i => $f) {
        $magic = '';
        $version = -1;
        try {
            $fh = fopen("$dir/$f", 'r');
            $magic = fread($fh, 4);
            $fileVersion = fread($fh, 4);
            $version = @unpack('V', $fileVersion)[1];
            if ($magic != 'WTG!') {
                ++$skippedFiles;
                continue;
            }
        } catch (Exception $e) {
            ++$skippedFiles;
            continue;
        }

        try {
            $wtg = \Wtg\Wtg::fromFile("$dir/$f");
            $version = $wtg->header()->fileVersion();
            if (empty($successVersions[$version])) {
                $successVersions[$version] = 0;
            }
            ++$successVersions[$version];
        } catch (Exception $e) {
            if ($version) {
                if (empty($failedVersions[$version])) {
                    $failedVersions[$version] = 0;
                }
                ++$failedVersions[$version];
            }

            $failedFiles[] = [
                'file' => $f,
                'version' => $version,
                'error' => $e->getMessage(),
            ];
        }
        $stats['progress'] = 100 * ($i / $newFilesCount);
        if ($t < time() - 3) {
            $t = time();
            echo json_encode($stats), "\n";

            file_put_contents("result-$task-of-$numTasks.json", json_encode([
                'failedVersions' => $failedVersions,
                'successVersions' => $successVersions,
                'skippedFiles' => $skippedFiles,
                'failedFiles' => $failedFiles,
            ], JSON_PRETTY_PRINT));
        }
    }
}
