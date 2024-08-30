<?php

class NewReleaseClassification extends Classification
{
    public function __construct()
    {
        parent::__construct('New Release');
    }

    public function getPricingStrategy(): PricingStrategy
    {
        return new NewReleasePricingStrategy();
    }

    public function getFrequentRenterPoints(int $daysRented): int
    {
        return ($daysRented > 1) ? 2 : 1;
    }
}
