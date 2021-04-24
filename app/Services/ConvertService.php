<?php


namespace App\Services;


use App\Models\Currency;

class ConvertService
{
    public function convert(string $currency, float $amount): float
    {
        $currencyFromDatabase = Currency::where('name', '=', $currency)->firstOrFail();
        return $currencyFromDatabase->rate * $amount;
    }
}
