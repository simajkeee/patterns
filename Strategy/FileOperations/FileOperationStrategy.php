<?php

namespace popp\Strategy\FileOperations;

interface FileOperationStrategy
{
    public function run(string $from, string $to);
}