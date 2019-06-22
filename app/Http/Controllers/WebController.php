<?php

namespace App\Http\Controllers;

use App\Services\MarketService;

class WebController extends Controller
{
    private $marketService;

    public function __construct(MarketService $marketService)
    {
        $this->marketService = $marketService;
    }

    public function showMarket() {
        $products = $this->marketService->getProductList();
        return view('market', compact('products'));
    }
}