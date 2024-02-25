<?php

class Song
{
    public string $name;
    public int $numberOfPlays;

    /**
     * Song rating from 0 to 5
     * Half ratings allowed e.g. 3.5
     * 
     * @var integer|float
     */
    private int|float $rating;

    public function __construct(
        string $name,
        int $numberOfPlays
    ) {
        $this->name = $name;
        $this->numberOfPlays = $numberOfPlays;
    }

    // public function setRating(int|float $allowedRatingNumber): void
    // {
    //     $allowedRatingNumber = max(0.5, $allowedRatingNumber);

    //     $this->rating = min(5, $allowedRatingNumber);
    // }

    // # Nested method?
    // public function setRating(int|float $allowedRatingNumber): void
    // {
    //     $this->rating = min(5, max(0.5, $allowedRatingNumber));
    // }

    public function setRating(int|float $allowedRatingNumber): void
    {
        $allowedRatingNumber = max(0.5, $allowedRatingNumber);
        $allowedRatingNumber = min(5, $allowedRatingNumber);

        $this->rating = $allowedRatingNumber;
    }

    public function getRating(): int|float
    {
        return $this->rating;
    }
}