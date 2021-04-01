<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CurrenciesController extends Controller
{
    public function index()
    {
        $currencies = DB::select('select code, rate, symbol, being_used from currencies');
        return view('currencies.currencies', ['currencies' => $currencies]);
    }
}
