<?php

class TextStatementFormat implements StatementFormat
{
    public function formatHeader(string $customerName): string
    {
        return "Rental Record for " . $customerName . "\n";
    }

    public function formatRental(Rental $rental): string
    {
        $thisAmount = $rental->getMovie()->getClassification()->getPricingStrategy()->calculatePrice($rental->getDaysRented());
        return "\t" . $rental->getMovie()->getTitle() . "\t" . $thisAmount . "\n";
    }

    public function formatFooter(float $totalAmount, int $frequentRenterPoints): string
    {
        return "Amount owed is " . $totalAmount . "\n" . "You earned " . $frequentRenterPoints . " frequent renter points";
    }
}
