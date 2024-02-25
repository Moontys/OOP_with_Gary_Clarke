<?php

class Book
{
    public $tilte;
    public $author;
    public $price;

    public function __construct(
        string $title,
        string $author,
        int $price
    ) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function getTitle(): string
    {
        return $this->tilte;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getPriceAsCurrencyUnit(): string
    {
        return "$" . $this->price / 100;
    }

    public function print(): string
    {
        return "{$this->title}, {$this->author}, {$this->price}";
    }
}