<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Repositories\Product\ProductRepositoryEloquent;

class NewProductRule implements Rule
{

    /**
     * @var ProductRepositoryEloquent
     */
    private $productRepository;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->productRepository = new ProductRepositoryEloquent();
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if($this->productRepository->isbnUnique($value)) {
            return true;
        }

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The ISBN code has already been registered.';
    }
}
