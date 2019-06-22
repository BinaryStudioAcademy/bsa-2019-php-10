<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class MarketService
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
}
