<?php

class HTMLStatementFormat implements StatementFormat
{
    public function formatHeader(string $customerName): string
    {
        $style = "list-style-type: '>'";
        return '<h1>Rentals for <i> ' . $customerName . '</i></h1><ul style="' . "list-style-type: ' ';" . '">';
    }

    public function formatRental(Rental $rental): string
    {
        $thisAmount = $rental->getMovie()->getClassification()->getPricingStrategy()->calculatePrice($rental->getDaysRented());
        return "<li> " . $rental->getMovie()->getTitle() . ": " . $thisAmount . "</li>";
    }

    public function formatFooter(float $totalAmount, int $frequentRenterPoints): string
    {
        return "</ul><p>Amount owed is <b>$totalAmount</b></p>\n" . "<p>You earned <b>$frequentRenterPoints</b> frequent renter points</p>";
    }
}
