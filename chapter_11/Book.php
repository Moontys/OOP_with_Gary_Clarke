<?php

// Abstract classes can't be instantiated, but their methods can be inherited
abstract class Book
{
    public $title;

    public function __construct(
        string $title
    ) {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    abstract public function write(): string;
}