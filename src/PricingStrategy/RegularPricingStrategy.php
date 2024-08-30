<?php

class RegularPricingStrategy implements PricingStrategy
{
    public function calculatePrice(int $daysRented): float
    {
        $price = 2;
        if ($daysRented > 2) {
            $price += ($daysRented - 2) * 1.5;
        }
        return $price;
    }
}