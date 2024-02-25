<?php

class Playlist
{
    private $listForSongs = [];

    public function getListForSongs(): array
    {
        return $this->listForSongs;
    }

    public function addSong(Song $song): void
    {
        $this->listForSongs[] = $song;
    }
}