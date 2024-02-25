<?php

require_once 'Loan.php';
require_once 'CurrentTime.php';


$loanDate = new DateTimeImmutable('2000-01-01 02:01:01');


$currentTime = new CurrentTime();


$loan = new Loan(1, 500, 201, $loanDate, $currentTime);


print $loan->loanAmount . PHP_EOL;
echo $loan->loanDuration->format('%y years, %m months, %d days') . PHP_EOL;
echo $loan->loanDuration->format('%y years') . PHP_EOL;