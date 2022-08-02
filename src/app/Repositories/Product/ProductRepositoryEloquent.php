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
     * @retuen boolean
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
}
