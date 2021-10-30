<?php

namespace popp\Strategy\FileOperations;

class ReencodeOperation implements FileOperationStrategy
{
    public function __construct(private string $file)
    {
    }

    public function run(string $from, string $to)
    {
        if (!file_exists($this->file)) {
            return false;
        }
        $content = file_get_contents($this->file);
        $encodedContent = mb_convert_encoding($content, $to, $from);
        return (false !== $encodedContent) ? file_put_contents($this->file, $encodedContent) : false;
    }
}