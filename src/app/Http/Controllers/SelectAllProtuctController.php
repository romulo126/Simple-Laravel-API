<?php

namespace App\Http\Controllers;


use App\Services\Product\SelectProtuctService;
use Illuminate\Http\Response;
use Exception;

class SelectAllProtuctController extends Controller
{

    /**
     * @var SelectProtuctService
     */
    private $selectProtuctService;

    public function __construct(SelectProtuctService $selectProtuctService)
    {
        $this->selectProtuctService = $selectProtuctService;
    }

    public function __invoke()
    {
        try{
            $data = $this->selectProtuctService->getAllProducts();
            return response()->json(['data'=>$data,
                                     'status'=>Response::HTTP_OK], Response::HTTP_OK);
        } catch (Exception $e) {
            return response()->json(['data'=>'Error',
                                     'status'=>Response::HTTP_BAD_REQUEST], Response::HTTP_BAD_REQUEST);
        }
    }
}
