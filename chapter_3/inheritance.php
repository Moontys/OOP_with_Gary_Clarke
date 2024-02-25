<?php

require_once 'DigitalBook.php';
require_once 'PhysicalBook.php';


$book = new Book('Miegas', 'Tadas Ulys', 1099, 187);

# print $book->getWeight() . ' ' . $book->getFileSize() . PHP_EOL;
# Parent class cannot access child's methods
print $book->print() . PHP_EOL;


$digitalBook = new DigitalBook('Tavo Saulė', 'Algirdas Katinas', 2500, 1048);

print $digitalBook->getFileSize() . ', ' . $digitalBook->getAuthor() . PHP_EOL;
print $digitalBook->print() . PHP_EOL;
print $digitalBook->getPriceAsCurrencyUnit() . PHP_EOL;


$physicalBook = new PhysicalBook('Mirtis', 'Ilona Tutė', 1599, 150);

print $physicalBook->getWeight() . ', '. $physicalBook->getAuthor() . PHP_EOL;
print $physicalBook->print() . PHP_EOL;
print $physicalBook->getPriceAsCurrencyUnit() . PHP_EOL;