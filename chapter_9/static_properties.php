<?php

require_once 'Connection.php';
require_once 'Counter.php';


# In Order to run this public properties are needed!
$connection1 = new Connection();

print Connection::$count . PHP_EOL;


$connection2 = new Connection();

print Connection::$count . PHP_EOL;


$connection3 = new Connection();

print Connection::$count . PHP_EOL;




// $connection1 = new Connection();

// print $connection1->count . PHP_EOL;


// $connection2 = new Connection();

// print $connection2->count . PHP_EOL;


// $connection3 = new Connection();

// print $connection3->count . PHP_EOL;