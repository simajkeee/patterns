<?php

namespace popp\Strategy\FileOperations;

class CopyOperation implements FileOperationStrategy
{

    public function run(string $from, string $to)
    {
        return copy($from, $to);
    }
}