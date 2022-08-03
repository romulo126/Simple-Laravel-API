<?php

namespace App\Services\Product\Contract;

interface DelectProductServiceContract {

    /**
     * Delete product by id
     * @param int $id
     * @return bool
     */
    public function deleteProductById(int $id): bool;

    /**
     * Delete product by isbn
     * @param string $isbn
     * @return bool
     */
    public function deleteProductByIsbn(string $isbn): bool;
}
