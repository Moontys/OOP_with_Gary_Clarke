<?php

class Playlist
{
    public array $listForSongs = []; // Class attribute

        // Type class ("Song", "Playlist")
    public function addSong(Song $song): void   // Pseudo Type
    {
        $this->listForSongs[] = $song;
    }

    public function getPlaylistCount(): int
    {
        return count($this->listForSongs);
    }

}