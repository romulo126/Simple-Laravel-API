<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewProductRequest;
use App\Services\Product\NewProductService;

class NewProtuctController extends Controller
{

    /**
     * @var NewProductService
     */
    private $newProductService;

    public function __construct(NewProductService $newProductService)
    {
        $this->newProductService = $newProductService;
    }

    public function __invoke(NewProductRequest $request)
    {
        return $this->newProductService->create($request->name, $request->isbn, $request->value);
    }
}
