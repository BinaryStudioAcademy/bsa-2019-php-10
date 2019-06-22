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
}
