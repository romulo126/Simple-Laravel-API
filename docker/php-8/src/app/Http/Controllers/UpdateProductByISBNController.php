<?php

namespace App\Http\Controllers;


use App\Services\Product\UpdateProductService;
use Illuminate\Http\Response;
use App\Http\Requests\UpdateByIsbnRequest;
use Exception;

class UpdateProductByISBNController extends Controller
{

    /**
     * @var UpdateProductService
     */
    private $updateProductService;

    public function __construct(UpdateProductService $updateProductService)
    {
        $this->updateProductService = $updateProductService;
    }

    public function __invoke(UpdateByIsbnRequest $request)
    {
        try{
            $data = $this->updateProductService->updateByIsbn($request->isbn, $request->name, $request->value);
            return response()->json(['data'=>$data,
                                     'status'=>Response::HTTP_OK], Response::HTTP_OK);
        } catch (Exception $e) {
            return response()->json(['data'=>'Error',
                                     'status'=>Response::HTTP_BAD_REQUEST], Response::HTTP_BAD_REQUEST);
        }
    }
}
