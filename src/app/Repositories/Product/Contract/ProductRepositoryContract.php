<?php

namespace App\Repositories\Product\Contract;

use App\Models\Product;


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

    /**
     * Update product by id
     * @param int $id
     * @param string $name
     * @param string $isbn
     * @param float $value
     * @return bool
     */
    public function updateProduct(int $id, string $name, string $isbn, float $value): bool;

    /**
     * Update product by isbn
     * @param string $isbn
     * @param string $name
     * @param float $value
     * @return bool
     */
    public function updateProductByIsbn(string $isbn, string $name, float $value): bool;

    /**
     * Delete product by id
     * @param int $id
     * @return bool
     */
    public function deleteProduct(int $id): bool;

    /**
     * Delete product by isbn
     * @param string $isbn
     * @return bool
     */
    public function deleteProductByIsbn(string $isbn): bool;
}
