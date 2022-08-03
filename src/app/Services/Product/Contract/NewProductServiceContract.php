<?php

namespace App\Services\Product\Contract;

interface NewProductServiceContract {

    /**
     * @param string $name
     * @param string $isbn
     * @param float $value
     * @return bool
     */
    public function create(string $name, string $isbn, float $value): bool;
}
