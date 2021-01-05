<?php

use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\RegistrationController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//category get start
Route::get('/category',[CategoryController::class,'all']);
Route::get('/category/{slug}',[CategoryController::class,'category_product']);
//category get end


//product get start
Route::get('/product',[ProductController::class,'all']);
Route::get('/product/{slug}',[ProductController::class,'product_detail']);
//product get end
 

//visitor registration start
Route::post("/visitor/registration",[RegistrationController::class,'registration']);
Route::post("/visitor/signin",[RegistrationController::class,'login']);
//visitor registration end


//add to cart start
Route::get('/addtocart/{id}',[CartController::class,'get_product']);
//add to cart end