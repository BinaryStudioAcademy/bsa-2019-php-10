<?php

namespace App\Http\Controllers;

use App\Services\MarketService;
use Illuminate\Http\Request;

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
            return redirect()->route('main');
        }
        return view('product', compact('product'));
    }

    public function addProductForm() {
        return view('addProductForm');
    }

    public function storeProduct(Request $request) {
        $this->marketService->storeProduct($request);
        return redirect()->route('main');
    }
}