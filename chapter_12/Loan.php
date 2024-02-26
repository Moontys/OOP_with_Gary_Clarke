<?php

class Loan
{
    public int $id;
    public int $loanAmount;
    public int $customerId;
    public \DateTimeImmutable $loanDate;
    public \DateInterval $loanDuration;

    public function __construct(
        int $id,
        int $loanAmount,
        int $customerId,
        \DateTimeImmutable $loanDate
    ) {
        $this->id = $id;
        $this->loanAmount = $loanAmount;
        $this->customerId = $customerId;
        $this->loanDate = $loanDate;
        $this->loanDuration = $this->calculateLoanDuration();
    }

    public function calculateLoanDuration(): \DateInterval
    {
        $currentTime = new \DateTimeImmutable(); // Get current time
        return $currentTime->diff($this->loanDate);
    }
}

