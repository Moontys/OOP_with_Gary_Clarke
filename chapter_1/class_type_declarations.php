<?php

require_once 'Song.php';
require_once 'Playlist.php';


$playlist = new Playlist();

$song1 = new Song('World is Mine', 501);
$song2 = new Song('Postman', 101);

$playlist->addSong($song1);
$playlist->addSong($song2);

// print count($palylist->listForSongs) . PHP_EOL;

foreach ($playlist->listForSongs as $song) {

    print $song->name . PHP_EOL;
}
