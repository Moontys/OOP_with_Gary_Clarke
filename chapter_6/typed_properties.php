<?php

require_once 'Song.php';


$arrayForSongNames = ['Yesterday', 'Yellow Submarine', 'Imagine'];

$song = new Song($arrayForSongNames[0], 150);
var_dump($song->name . ' ' . $song->numberOfPlays ) . PHP_EOL;

$song->name = $arrayForSongNames[2];
var_dump($song->name);

// $song->name = $arrayForSongNames;
// var_dump($song->name);

$arrayForSongNumberOfPlays = [109, 501, 999];
$song->numberOfPlays = $arrayForSongNumberOfPlays[2];

// $song->numberOfPlays = [102, 500, 666];
var_dump($song->numberOfPlays);
