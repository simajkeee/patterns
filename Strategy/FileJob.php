<?php

namespace popp\Strategy;

use popp\Strategy\FileOperations\FileOperationStrategy;

class FileJob
{
    public function __construct(
        private string $from,
        private string $to,
        private FileOperationStrategy $fileOperation
    ) {
    }

    public function run()
    {
        return $this->fileOperation->run($this->from, $this->to);
    }
}