<?php

namespace App\Http\Controllers;


use App\Services\Product\SelectProductService;
use Illuminate\Http\Response;
use Exception;

class SelectAllProductController extends Controller
{

    /**
     * @var SelectProductService
     */
    private $selectProductService;

    public function __construct(SelectProductService $selectProductService)
    {
        $this->selectProductService = $selectProductService;
    }

    public function __invoke()
    {
        try{
            $data = $this->selectProductService->getAllProducts();
            return response()->json(['data'=>$data,
                                     'status'=>Response::HTTP_OK], Response::HTTP_OK);
        } catch (Exception $e) {
            return response()->json(['data'=>'Error',
                                     'status'=>Response::HTTP_BAD_REQUEST], Response::HTTP_BAD_REQUEST);
        }
    }
}
