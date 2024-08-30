<?php

interface StatementFormat
{
    public function formatHeader(string $customerName): string;

    public function formatRental(Rental $rental): string;

    public function formatFooter(float $totalAmount, int $frequentRenterPoints): string;
}
