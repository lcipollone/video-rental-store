<?php

class ChildrenClassification extends Classification
{
    public function __construct()
    {
        parent::__construct('Children');
    }

    public function getPricingStrategy(): PricingStrategy
    {
        return new ChildrenPricingStrategy();
    }

    public function getFrequentRenterPoints(int $daysRented): int
    {
        return 1;
    }
}