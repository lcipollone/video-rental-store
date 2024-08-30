<?php

class NewReleasePricingStrategy implements PricingStrategy
{
    public function calculatePrice(int $daysRented): float
    {
        return $daysRented * 3;
    }
}
