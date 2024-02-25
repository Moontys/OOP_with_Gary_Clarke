<?php

require_once 'Song.php';
require_once 'Playlist.php';


$playlist = new Playlist();

$song1 = new Song('Woodoo People', 201);
$song2 = new Song('Tavo akys', 51);

$playlist->addSong($song1);
$playlist->addSong($song2);

if ($playlist->getPlaylistCount() < 10) {

    print 'Short Playlist' . PHP_EOL;
}
if ($playlist->getPlaylistCount() == 2) {

    print 'There are TWO songs' . PHP_EOL;
}
