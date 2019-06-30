<?php

namespace App\Repositories;

use App\Entities\Product;
use App\Repositories\Interfaces\IProductRepository;

class ProductRepository implements IProductRepository
{
    public function findAll()
    {
        return Product::all();
    }

    public function findById(int $id): ?Product
    {
        return Product::find($id);
    }

    public function findByUserId(int $userId)
    {
        return Product::where('user_id', $userId)->get();
    }

    public function store(Product $product): Product
    {
        $product->save();
        return $product;
    }

    public function delete(Product $product)
    {
        $product->delete();
    }
}
