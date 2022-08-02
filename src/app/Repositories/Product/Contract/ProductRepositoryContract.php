<?php

namespace App\Repositories\Product\Contract;


interface ProductRepositoryContract {

    /**
     * Insert new product into database
     * @param string $name
     * @param string $isbn
     * @param float $price
     * @retuen boolean
     */
    public function insertNewProduct(string $name, string $isbn, float $value): bool;
}
