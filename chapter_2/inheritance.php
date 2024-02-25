<?php

require_once 'Book.php';

$physicalBook = new Book('Naktis', 'Andrius Tapinas', 2000, 'physical', 1500);
$digitalBook = new Book('Gamta', 'Jurga Ivanauskaitė', 1500, 'digital', 0, 650);

print $physicalBook->getAuthor() . PHP_EOL;
print $digitalBook->getAuthor() . ' - ' .$digitalBook->getTitle() . PHP_EOL;

print $physicalBook->getFileSize() . PHP_EOL;

print $physicalBook->allClassAttributesByBookType() . PHP_EOL;
print $digitalBook->allClassAttributesByBookType() . PHP_EOL;


