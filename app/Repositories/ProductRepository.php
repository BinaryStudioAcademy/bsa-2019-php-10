<?php

namespace App\Repositories;

use App\Entities\Product;

class ProductRepository
{
    public function findAll()
    {
        return Product::all();
    }

    public function findById(int $id): ?Product
    {
        return Product::find($id);
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
