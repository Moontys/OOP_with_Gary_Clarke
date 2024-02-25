<?php


class DigitalBook extends Book
{
    public int $fileSize;

    public function __construct(
        string $title,
        int $fileSize
    ) {
        parent::__construct($title);

        $this->fileSize = $fileSize;
    }

    public function getFileSize(): int
    {
        return $this->fileSize;
    }

    public function write(): string
    {
        return "Title: {$this->title}, File Size: {$this->fileSize}";
    }
}