<?php


namespace App\Services;


use App\Models\Currency;
use Illuminate\Database\Eloquent\Collection;

class ConvertService
{
    public function convert(string $currency, float $amount): float
    {
        $currencyFromDatabase = Currency::where('name', '=', $currency)->firstOrFail();
        return $currencyFromDatabase->rate * $amount;
    }
    public function allCurrencies(): Collection
    {
        return Currency::all();
    }
}
