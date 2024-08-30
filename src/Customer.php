<?php

class Customer
{
    private $name;
    private $rentals = array();

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addRental(Rental $rental)
    {
        array_push($this->rentals, $rental);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function statement(StatementFormat $format): string
    {
        $result = $format->formatHeader($this->name);

        foreach ($this->rentals as $rental) {
            $result .= $format->formatRental($rental);
        }

        $result .= $format->formatFooter($this->getTotalCharge(), $this->getTotalFrequentRenterPoints());

        return $result;
    }

    private function getTotalCharge(): float
    {
        $totalAmount = 0;
        foreach ($this->rentals as $rental) {
            $totalAmount += $rental->getMovie()->getClassification()->getPricingStrategy()->calculatePrice($rental->getDaysRented());
        }
        return $totalAmount;
    }

    private function getTotalFrequentRenterPoints(): int
    {
        $frequentRenterPoints = 0;
        foreach ($this->rentals as $rental) {
            $frequentRenterPoints += $rental->getMovie()->getClassification()->getFrequentRenterPoints($rental->getDaysRented());
        }
        return $frequentRenterPoints;
    }
}
