<?php

namespace App\Repositories\Product;

use App\Repositories\Product\Contract\ProductRepositoryContract;
use App\Models\Product;

class ProductRepositoryEloquent implements ProductRepositoryContract
{
    /**
     * Insert new product into database
     * @param string $name
     * @param string $isbn
     * @param float $price
     * @retuen bool
     */
    public function insertNewProduct(string $name, string $isbn, float $value): bool
    {
        $product = new Product();
        $product->name = $name;
        $product->isbn = $isbn;
        $product->value = $value;
        $product->user_id =1; //auth()->user()->id;
        $product->save();
        return true;
    }

    /**
     * verify if isbn is unique
     * @param string $isbn
     * @return bool
     */
    public function isbnUnique(string $isbn): bool
    {
        $product = Product::where('isbn', $isbn)->first();
        if ($product) {
            return false;
        }
        return true;
    }

    /**
     * Get all products
     * @return array
     */
    public function getAllProducts(): array
    {
        return Product::all()->toArray();
    }

    /**
     * Get product by id
     * @param int $id
     * @return Product
     */
    public function getProductById(int $id): Product
    {
        return Product::find($id);
    }

    /**
     * Get product by isbn
     * @param string $isbn
     * @return Product
     */
    public function getProductByIsbn(string $isbn): Product
    {
        return Product::where('isbn', $isbn)->first();
    }

    /**
     * Update product by id
     * @param int $id
     * @param string $name
     * @param string $isbn
     * @param float $value
     * @return bool
     */
    public function updateProduct(int $id, string $name, string $isbn, float $value): bool
    {
        $product = Product::find($id);
        if($product) {
            $product->name = $name;
            $product->isbn = $isbn;
            $product->value = $value;
            $product->save();
            return true;
        }
        return false;
    }

    /**
     * Update product by isbn
     * @param string $isbn
     * @param string $name
     * @param float $value
     * @return bool
     */
    public function updateProductByIsbn(string $isbn, string $name, float $value): bool
    {
        $product = Product::where('isbn', $isbn)->first();
        if($product) {
            $product->name = $name;
            $product->value = $value;
            $product->save();
            return true;
        }
        return false;
    }

    /**
     * Delete product by id
     * @param int $id
     * @return bool
     */
    public function deleteProduct(int $id): bool
    {
        $product = Product::find($id);
        if($product) {
            $product->delete();
            return true;
        }
        return false;
    }

    /**
     * Delete product by isbn
     * @param string $isbn
     * @return bool
     */
    public function deleteProductByIsbn(string $isbn): bool
    {
        $product = Product::where('isbn', $isbn)->first();
        if($product) {
            $product->delete();
            return true;
        }
        return false;
    }
}
