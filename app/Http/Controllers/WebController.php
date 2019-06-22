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

    public function showProduct(int $id) {
        try {
            $product = $this->marketService->getProductById($id);
        } catch (\Exception $e) {
            return view('welcome');
        }
        return view('product', compact('product'));
    }
}