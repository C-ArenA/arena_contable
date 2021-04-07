<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class CurrenciesController extends Controller
{
    public function index()
    {
        $currencies = DB::select('select code, rate, symbol, being_used from currencies');
        $header = ['Código', 'Bs.', 'Símbolo', 'Estado'];
        return view('currencies.currencies', ['currencies' => $currencies, 'headerArray' => $header]);
    }
    public function update(Request $request)
    {
        $newCurrencies = $this->updateCurrenciesRates();
        foreach ($newCurrencies as $key => $value) {
            DB::update('update currencies set rate = '.$value.' where code = ?', [$key]);
        }
        return back();
    }

    // Extra methods ------------------------------------------

    private function changeRateBase($currenciesArray, $newBaseCode)
    {
        $divider = $currenciesArray[$newBaseCode];
        foreach ($currenciesArray as $code => $rate) {
            $currenciesArray[$code] = $rate / $divider;
        }
        return $currenciesArray;
    }

    private function updateCurrenciesRates(){
        $api = $_ENV['API_KEY_DATA_FIXER'];
        $baseUrl = "http://data.fixer.io/api/";
        $endpoint = "latest?access_key=".$api;
        $requestUrl = $baseUrl.$endpoint;
        $response = Http::get($requestUrl);

        if ($response->successful()) {
            $rates = $response->json()["rates"];
            // $rates = ["AED" => 4.35, "BOB" => 8.19, "EUR" => 1, "USD" => 1.18];
            $newRates = $this->changeRateBase($rates, 'USD');
            return $newRates;
        }
        else{
            return false;
        }
    }
}
