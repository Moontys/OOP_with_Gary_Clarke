<?php


class PhysicalBook extends Book
{
    public int $weight;

    public function __construct(
        string $title,
        int $weight = 140
    ) {
        parent::__construct($title);

        $this->weight = $weight;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function write(): string
    {
        return "Title: {$this->title}, Weight: {$this->weight}";
    }
}