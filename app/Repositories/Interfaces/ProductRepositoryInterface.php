<?php


namespace App\Repositories\Interfaces;


use App\Entities\Product;

interface ProductRepositoryInterface
{
    public function findAll();

    public function findById(int $id);

    public function findByUserId(int $userId);

    public function store(Product $product);

    public function delete(Product $product);
}