<?php

namespace App\Services\Product;

use App\Services\Product\Contract\DelectProductServiceContract;
use App\Repositories\Product\ProductRepositoryEloquent;

class DelectProductService implements DelectProductServiceContract
{
    /**
     * @var ProductRepositoryEloquent
     */
    private $productRepository;

    public function __construct(ProductRepositoryEloquent $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function deleteProductById(int $id): bool
    {
        return $this->productRepository->deleteProduct($id);
    }

    public function deleteProductByIsbn(string $isbn): bool
    {
        return $this->productRepository->deleteProductByIsbn($isbn);
    }
}
