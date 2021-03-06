<?php

namespace App\Http\Controllers;

use App\Services\ConvertService;
use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\View\View;


class HomeController extends Controller
{
    private ConvertService $convertService;

    public function __construct(ConvertService $convertService)
    {
        $this->convertService = $convertService;
    }

    public function home(): View
    {
        $currencies = $this->convertService->allCurrencies();

        return view('home', ['currencies' => $currencies]);
    }

    public function convert(Request $request): View
    {
        $currencies = $this->convertService->allCurrencies();
        $convert = $this->convertService->convert($request->get('currency'), $request->get('amount'));

        return view('home', ['currencies' => $currencies, 'convert' => $convert]);
    }
}
