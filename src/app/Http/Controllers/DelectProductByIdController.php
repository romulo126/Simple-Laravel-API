<?php

namespace App\Http\Controllers;


use App\Services\Product\DelectProductService;
use Illuminate\Http\Response;
use Exception;

class DelectProductByIdController extends Controller
{

    /**
     * @var DelectProductService
     */
    private $delectProductService;

    public function __construct(DelectProductService $delectProductService)
    {
        $this->delectProductService = $delectProductService;
    }

    public function __invoke($Id)
    {
        try{
            $data = $this->delectProductService->deleteProductById($Id);
            return response()->json(['data'=>$data,
                                     'status'=>Response::HTTP_OK], Response::HTTP_OK);
        } catch (Exception $e) {
            return response()->json(['data'=>'Error',
                                     'status'=>Response::HTTP_BAD_REQUEST], Response::HTTP_BAD_REQUEST);
        }
    }
}
