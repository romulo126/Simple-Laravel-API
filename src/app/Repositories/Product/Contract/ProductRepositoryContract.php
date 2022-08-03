<?php

namespace App\Repositories\Product\Contract;


interface ProductRepositoryContract {

    /**
     * Insert new product into database
     * @param string $name
     * @param string $isbn
     * @param float $price
     * @retuen bool
     */
    public function insertNewProduct(string $name, string $isbn, float $value): bool;

    /**
     * verify if isbn is unique
     * @param string $isbn
     * @return bool
     */
    public function isbnUnique(string $isbn): bool;
}
