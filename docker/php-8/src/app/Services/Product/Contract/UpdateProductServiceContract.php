<?php

namespace App\Services\Product\Contract;

interface UpdateProductServiceContract
{
    /**
     * Update product by id
     * @param int $id
     * @param ?string $name
     * @param ?string $isbn
     * @param ?float $value
     * @return bool
     */
    public function updateById(int $id, ?string $name, ?string $isbn, ?float $value): bool;

    /**
     * Update product by isbn
     * @param string $isbn
     * @param ?string $name
     * @param ?float $value
     * @return bool
     */
    public function updateByIsbn(string $isbn, ?string $name, ?float $value): bool;
}
