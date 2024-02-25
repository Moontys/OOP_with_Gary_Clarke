<?php

require_once 'Song.php';


$song = new Song('Yellow Submarine', 401);

$song->setRating(6);

print $song->getRating() . PHP_EOL;