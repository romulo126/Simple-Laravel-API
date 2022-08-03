<?php

namespace App\Services\Product;

use App\Repositories\Product\ProductRepositoryEloquent;
use App\Services\Product\Contract\SelectProtuctServiceContract;
use App\Models\Product;

class SelectProtuctService implements SelectProtuctServiceContract
{
    /**
     * @var ProductRepositoryEloquent
     */
    private $productRepositoryEloquent;

    public function __construct()
    {
        $this->productRepositoryEloquent = new ProductRepositoryEloquent();
    }

    /**
     * Get all products
     * @return ?array
     */
    public function getAllProducts(): ?array
    {
        return $this->productRepositoryEloquent->getAllProducts();
    }

    /**
     * Get product by id
     * @param int $id
     * @return ?Product
     */
    public function getProductById(int $id): ?Product
    {
        return $this->productRepositoryEloquent->getProductById($id);
    }

    /**
     * Get product by isbn
     * @param string $isbn
     * @return ?Product
     */
    public function getProductByIsbn(string $isbn): ?Product
    {
        return $this->productRepositoryEloquent->getProductByIsbn($isbn);
    }


}
