<?php

require_once 'Playlist.php';
require_once 'Song.php';



$beatlesSongs = new Playlist();


$song1 = new Song('Yesterday', 101);

$song2 = new Song('Yellow Submarine', 201);


$beatlesSongs->addSong($song1);

var_dump($beatlesSongs->getListForSongs());

$beatlesSongs->addSong($song2);

var_dump($beatlesSongs->getListForSongs());

