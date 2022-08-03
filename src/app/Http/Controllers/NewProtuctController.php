<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewProductRequest;
use App\Services\Product\NewProductService;
use Illuminate\Http\Response;
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
        $data = $this->newProductService->create($request->name, $request->isbn, $request->value);
        if($data) {
            return response()->json(['data'=>$data,
                                     'status'=>Response::HTTP_OK], Response::HTTP_OK);
        } else {
            return response()->json(['data'=>'Error',
                                     'status'=>Response::HTTP_BAD_REQUEST], Response::HTTP_BAD_REQUEST);
        }
    }
}
