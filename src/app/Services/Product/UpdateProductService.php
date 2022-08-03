<?php

namespace App\Services\Product;

use App\Services\Product\Contract\UpdateProductServiceContract;
use App\Repositories\Product\ProductRepositoryEloquent;

class UpdateProductService implements UpdateProductServiceContract
{
    /**
     * @var ProductRepositoryEloquent
     */
    private $productRepositoryEloquent;

    public function __construct(ProductRepositoryEloquent $productRepository)
    {
        $this->productRepositoryEloquent = $productRepository;
    }

    /**
     * Update product by id
     * @param int $id
     * @param ?string $name
     * @param ?string $isbn
     * @param ?float $value
     * @return bool
     */
    public function updateById(int $id, ?string $name, ?string $isbn, ?float $value): bool
    {
        return $this->productRepositoryEloquent->updateProduct($id, $name, $isbn, $value);
    }

    /**
     * Update product by isbn
     * @param string $isbn
     * @param ?string $name
     * @param ?float $value
     * @return bool
     */
    public function updateByIsbn(string $isbn, ?string $name, ?float $value): bool
    {
        return $this->productRepositoryEloquent->updateProductByIsbn($isbn, $name, $value);
    }
}
