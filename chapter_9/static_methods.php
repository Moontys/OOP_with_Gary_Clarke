<?php

require_once 'Connection.php';





$connection1 = new Connection();
print Connection::getConnectionCount() . PHP_EOL;



$connection2 = new Connection();
print Connection::getConnectionCount() . PHP_EOL;



$connection3 = new Connection();
print Connection::getConnectionCount() . PHP_EOL;