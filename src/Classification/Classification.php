<?php

abstract class Classification
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function getPricingStrategy(): PricingStrategy;

    abstract public function getFrequentRenterPoints(int $daysRented): int;

    public function getName(): string
    {
        return $this->name;
    }
}
