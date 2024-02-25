<?php

class Loan
{
    public int $id;
    public int $loanAmount;
    public int $customerId;
    public DateTimeImmutable $loanDate;
    public DateInterval $loanDuration;

    public function __construct(
        int $id,
        int $loanAmount,
        int $customerId,
        DateTimeImmutable $loanDate,
        CurrentTime $currentTime
    ) {
        $this->id = $id;
        $this->loanAmount = $loanAmount;
        $this->customerId = $customerId;
        $this->loanDate = $loanDate;
        $this->loanDuration = $this->calculateLoanDuration($currentTime->getCurrentTime());
    }

    private function calculateLoanDuration(DateTimeImmutable $currentTime): DateInterval
    {
        return $currentTime->diff($this->loanDate);
    }
}

