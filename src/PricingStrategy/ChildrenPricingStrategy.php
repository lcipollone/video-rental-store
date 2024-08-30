<?php 

class ChildrenPricingStrategy implements PricingStrategy
{
    public function calculatePrice(int $daysRented): float
    {
        $price = 1.5;
        if ($daysRented > 3) {
            $price += ($daysRented - 3) * 1.5;
        }
        return $price;
    }
}
