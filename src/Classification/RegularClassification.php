<?php

class RegularClassification extends Classification
{
    public function __construct()
    {
        parent::__construct('Regular');
    }

    public function getPricingStrategy(): PricingStrategy
    {
        return new RegularPricingStrategy();
    }

    public function getFrequentRenterPoints(int $daysRented): int
    {
        return 1;
    }
}