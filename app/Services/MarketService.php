<?php

namespace App\Services;

use App\Entities\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\ProductRepositoryInterface as ProductRepository;

class MarketService
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getProductList(): Collection
    {
        return $this->productRepository->findAll();
    }

    public function getProductById(int $id): ?Product
    {
        $product = $this->productRepository->findById($id);

        if (!$product) {
            throw new \Exception(`No product with id: $id`);
        }

        return $product;
    }

    public function getProductsByUserId(int $userId): Collection
    {
        return $this->productRepository->findByUserId($userId);
    }

    public function storeProduct(Request $request): Product
    {
        $product = new Product([
            'user_id'   => 1,
            'name'      => $request->input('product_name'),
            'price'     => $request->input('product_price')
        ]);

        return $this->productRepository->store($product);
    }

    public function deleteProduct(Request $request): void
    {
        $product = $this->getProductById($request->id);

        if (!$product) {
            throw new \Exception(`No product with id: $request->id`);
        }
        $this->productRepository->delete($product);
    }
}
