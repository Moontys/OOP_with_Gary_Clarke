<?php

class Song
{
    public $name; // Class attribute
    public $numberOfPlays;

    /**
     * @param string $name
     * @param int $name
     */

        // Type hints ("string", "int")
    public function __construct(
        string $name,   // parameters
        int $numberOfPlays
    ) {
        $this->name = $name;
        $this->numberOfPlays = $numberOfPlays;
    }
}