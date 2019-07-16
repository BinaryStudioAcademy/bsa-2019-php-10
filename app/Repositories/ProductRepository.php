<?php

namespace App\Repositories;

use App\Entities\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository implements ProductRepositoryInterface
{
    public function findAll(): Collection
    {
        return Product::all();
    }

    public function findById(int $id): ?Product
    {
        return Product::find($id);
    }

    public function findByUserId(int $userId): Collection
    {
        return Product::where('user_id', $userId)->get();
    }

    public function store(Product $product): Product
    {
        $product->save();
        return $product;
    }

    public function delete(Product $product): void
    {
        $product->delete();
    }
}
