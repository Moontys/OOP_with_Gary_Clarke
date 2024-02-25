<?php

require_once 'Counter.php';



Counter::$count++;
Counter::$count++;
Counter::$count++;
// Counter::$count = $ounter + 10;

print Counter::$count++ . PHP_EOL;

