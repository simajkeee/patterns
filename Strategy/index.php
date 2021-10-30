<?php

use popp\Strategy\FileJob;
use popp\Strategy\FileOperations\CopyOperation;
use popp\Strategy\FileOperations\ReencodeOperation;
use popp\Strategy\FileOperations\RenameOperation;

$fileName = './test.txt';
file_put_contents($fileName, 'Some text');

$reencodeFileJob = new FileJob("ASCII,JIS,UTF-8,EUC-JP,SJIS", 'UCS-2LE', new ReencodeOperation($fileName));
$reencodeFileJob->run();

$copiedFileName = './copiedTest.txt';
$copyFileJob = new FileJob($fileName, $copiedFileName, new CopyOperation());
$copyFileJob->run();

$renamedFileName = './copiedThenRenamedTest.txt';
$renameOperation = new FileJob($copiedFileName, $renamedFileName, new RenameOperation());
$renameOperation->run();


unlink($fileName);
unlink($renamedFileName);
