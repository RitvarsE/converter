<?php


namespace App\Services;

use App\Models\Currency;

class UploadXMLService
{
    public function upload(): void
    {
        $xmlString = file_get_contents('https://www.bank.lv/vk/ecb.xml');
        $xmlObject = simplexml_load_string($xmlString);
        $json = json_encode($xmlObject);
        $phpArray = json_decode($json, true);

        $currencies = $phpArray['Currencies']['Currency'];

        foreach ($currencies as $currency) {

            $currencyToDatabase = Currency::updateOrCreate(
                ['name' => $currency['ID']],
                ['rate' => $currency['Rate'] * 10000]);
            $currencyToDatabase->save();
        }
    }
}
