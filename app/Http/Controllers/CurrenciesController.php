<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $newCurrencies = json_decode($request->input("newCurrencies"), true);
        foreach ($newCurrencies as $key => $value) {
            DB::update('update currencies set rate = '.$value.' where code = ?', [$key]);
        }
        return back();
        // return dd($newCurrencies);
        // return $request->all();
        // return "Hola";
    }
}
