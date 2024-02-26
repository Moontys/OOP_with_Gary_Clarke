<?php

require_once 'Loan.php';

$loanDate = new \DateTimeImmutable('2000-01-01');
$loan = new Loan(1, 500, 201, $loanDate);

print $loan->loanAmount . PHP_EOL;
echo $loan->loanDuration->format('%y years, %m months') . PHP_EOL;