<?php

// boolean,

// integer,

// float,

// object,

// resource,

// null

declare(strict_types=1);

require_once 'Song.php';

$song = new Song('Senieji Vilniaus Stogai', 159);
// var_dump($song->name);
// var_dump($song->numberOfPlays);
print $song->name . PHP_EOL;
print $song->numberOfPlays . PHP_EOL;