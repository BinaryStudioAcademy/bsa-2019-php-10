<?php

namespace App\Services;

use App\Entities\Product;
use App\Repositories\ProductRepository;
use App\Services\Interfaces\IMarketService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MarketService implements IMarketService
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getProductList()
    {
        return $this->productRepository->findAll();
    }

    public function getProductById(int $id)
    {
        $product = $this->productRepository->findById($id);
        if (!$product)
            throw new \Exception(`No product with id: $id`);
        return $product;
    }

    public function getProductsByUserId(int $userId)
    {
        return $this->productRepository->findByUserId($userId);
    }

    public function storeProduct(Request $request) {
        $product = new Product([
            'user_id'   => Auth::user()->id,
            'name'      => $request->input('product_name'),
            'price'     => $request->input('product_price')
        ]);
        $this->productRepository->store($product);
    }

    public function deleteProduct(Request $request) {
        $product = $this->getProductById($request->id);
        if (!$product)
            throw new \Exception(`No product with id: $request->id`);
        $this->productRepository->delete($product);
    }
}
