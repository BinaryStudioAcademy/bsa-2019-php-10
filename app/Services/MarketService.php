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
}
