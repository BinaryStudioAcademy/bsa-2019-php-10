<?php


namespace App\Services\Interfaces;


use Illuminate\Http\Request;

interface IMarketService
{
    public function getProductList();

    public function getProductById(int $id);

    public function getProductsByUserId(int $userId);

    public function storeProduct(Request $request);

    public function deleteProduct(Request $request);
}