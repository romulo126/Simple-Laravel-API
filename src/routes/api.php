<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewProductController;
use App\Http\Controllers\SelectAllProductController;
use App\Http\Controllers\SelectProductByIdController;
use App\Http\Controllers\SelectProductByISBNController;
use App\Http\Controllers\DelectProductByIdController;
use App\Http\Controllers\DelectProductByISBNController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('new-product', NewProductController::class);

Route::get('all-products', SelectAllProductController::class);
Route::get('product/id/{id}', SelectProductByIdController::class);
Route::get('product/isbn/{isbn}', SelectProductByISBNController::class);

Route::delete('product/id/{id}', DelectProductByIdController::class);
Route::delete('product/isbn/{id}', DelectProductByISBNController::class);
