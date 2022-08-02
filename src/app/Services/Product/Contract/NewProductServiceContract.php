<?php

namespace App\Services\Product\Contract;

use App\Repositories\Product\ProductRepositoryEloquent;

interface NewProductServiceContract {


     public function __construct(ProductRepositoryEloquent $ProductRepositoryEloquent);

    /**
     * @param string $name
     * @param string $isbn
     * @param float $value
     * @return bool
     */
    public function create(string $name, string $isbn, float $value): bool;
}
