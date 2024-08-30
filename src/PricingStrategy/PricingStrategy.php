<?php

interface PricingStrategy
{
    public function calculatePrice(int $daysRented): float;
}
