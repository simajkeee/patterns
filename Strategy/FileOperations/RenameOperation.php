<?php

namespace popp\Strategy\FileOperations;

class RenameOperation implements FileOperationStrategy
{

    public function run(string $from, string $to)
    {
        return rename($from, $to);
    }
}