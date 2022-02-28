<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/login', [UserController::class,'validationUser']);

Route::get('/listProduct',[ProductController::class,'listProducts']);

Route::get('/collection/{id}',[WishlistController::class,'collection']);
Route::get('/deleteproduct/{idUser}/{idProduct}',[WishlistController::class,'deleteProductWish']);
Route::get('/addproductwish/{idUser}/{idProduct}',[WishlistController::class,'addProductWish']);

Route::get('/collectioncart/{id}',[CartController::class,'collectionCart']);
Route::get('/deleteproductcart/{id}',[CartController::class,'deleteProductCart']);
Route::get('/addproductcart/{idUser}/{idProduct}',[CartController::class,'addProductCart']);
