<?php

namespace App\Http\Controllers;


use App\Services\Product\SelectProductService;
use Illuminate\Http\Response;
use Exception;

class DelectProductByISBNController extends Controller
{

    /**
     * @var SelectProtuctService
     */
    private $selectProtuctService;

    public function __construct(SelectProductService $selectProductService)
    {
        $this->selectProtuctService = $selectProductService;
    }

    public function __invoke($ISBN)
    {
        try{
            $data = $this->selectProtuctService->getProductByISBN($ISBN);
            return response()->json(['data'=>$data,
                                     'status'=>Response::HTTP_OK], Response::HTTP_OK);
        } catch (Exception $e) {
            return response()->json(['data'=>'Error',
                                     'status'=>Response::HTTP_BAD_REQUEST], Response::HTTP_BAD_REQUEST);
        }
    }
}
