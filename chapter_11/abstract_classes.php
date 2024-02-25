<?php

require_once 'Book.php';
require_once 'PhysicalBook.php';
require_once 'DigitalBook.php';


$physicalBook = new PhysicalBook('Tau', 150);

print $physicalBook->getTitle() . PHP_EOL;
print $physicalBook->getWeight() . PHP_EOL;
print $physicalBook->title . PHP_EOL;
print $physicalBook->weight . PHP_EOL;

print $physicalBook->write() . PHP_EOL;


$digitalBook = new DigitalBook('PHP For You!', 1048);

print $digitalBook->getTitle() . PHP_EOL;
print $digitalBook->getFileSize() . PHP_EOL;
print $digitalBook->title . PHP_EOL;
print $digitalBook->fileSize . PHP_EOL;

print $digitalBook->write() . PHP_EOL;