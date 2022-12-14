<?php

namespace App\Services\Product;

use App\Repositories\Product\ProductRepositoryEloquent;
use App\Services\Product\Contract\NewProductServiceContract;
use Exception;

class NewProductService implements NewProductServiceContract
{
    /**
     * @var ProductRepositoryEloquent
    **/
    public $ProductRepositoryEloquent;

    public function __construct()
    {
        $this->ProductRepositoryEloquent = new ProductRepositoryEloquent();
    }

    /**
     * @param string $name
     * @param string $isbn
     * @param float $value
     * @return bool
    **/
    public function create(string $name, string $isbn, float $value): bool
    {
        try{
            $this->ProductRepositoryEloquent->insertNewProduct($name, $isbn, $value);

            return true;
        }catch(Exception $e){
            return false;
        }
    }
}
