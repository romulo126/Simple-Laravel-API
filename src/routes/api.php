<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewProtuctController;
use App\Http\Controllers\SelectAllProtuctController;
use App\Http\Controllers\SelectProtuctByIdController;
use App\Http\Controllers\SelectProtuctByISBNController;

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

Route::post('new-product', NewProtuctController::class);

Route::get('all-products', SelectAllProtuctController::class);
Route::get('product/id/{id}', SelectProtuctByIdController::class);
Route::get('product/isbn/{isbn}', SelectProtuctByISBNController::class);
