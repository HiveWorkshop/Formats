<?php

use VindIT\Repository\Blizzard\KaitaiParser\Wtg;

require __DIR__.'/vendor/autoload.php';

$dh = opendir(__DIR__.'/../dist');
while (($f = readdir($dh)) !== false) {
    if (strpos($f, '.php') === false) {
        continue;
    }
    require __DIR__."/../dist/$f";
}

ini_set('memory_limit', '1024M');

function getFilesInDir($dir)
{
    // $dir = './samples/wtg_2147483652';
    $dh = opendir($dir);

    if (!$dh) {
        exit("Directory $dir could not be opened.");
    }

    $files = [];
    while (($f = readdir($dh)) !== false) {
        if (strpos($f, '.wtg') !== false) {
            $files[] = $f;
        }
    }

    return $files;
}

if (in_array('--parse-single', $argv)) {
    $path = null;
    foreach ($argv as $i => $v) {
        if ($v == '--parse-single' && !empty($argv[$i + 1])) {
            $path = $argv[$i + 1];
            break;
        }
    }
    if (!$path) {
        echo "Missing file argument\n";
        exit;
    }
    $wtg = Wtg::fromFile($argv[$i + 1]);
} elseif (in_array('--scan-versions', $argv)) {
    $dir = null;
    foreach ($argv as $i => $v) {
        if ($v == '--scan-versions' && !empty($argv[$i + 1])) {
            $dir = $argv[$i + 1];
        }
    }
    if (!$dir) {
        echo "Missing dir argument\n";
        exit;
    }
    $files = getFilesInDir($dir);
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
} elseif (in_array('--parse-dir', $argv)) {
    $dir = null;
    foreach ($argv as $i => $v) {
        if ($v == '--parse-dir') {
            if (!empty($argv[$i + 1])) {
                $dir = $argv[$i + 1];
            }
            break;
        }
    }
    if (!$dir) {
        echo "Missing dir argument\n";
        exit;
    }
    $files = getFilesInDir($dir);
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
            $wtg = Wtg::fromFile("$dir/$f");
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
