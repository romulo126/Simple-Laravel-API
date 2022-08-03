<?php

namespace App\Services\Product\Contract;

use App\Models\Product;

interface SelectProtuctServiceContract
{

    /**
     * Get all products
     * @return ?array
     */
    public function getAllProducts(): ?array;

    /**
     * Get product by id
     * @param int $id
     * @return ?Product
     */
    public function getProductById(int $id): ?Product;

    /**
     * Get product by isbn
     * @param string $isbn
     * @return ?Product
     */
    public function getProductByIsbn(string $isbn): ?Product;
}
