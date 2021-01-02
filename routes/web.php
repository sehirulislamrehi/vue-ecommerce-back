<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Login and register page show start
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[LoginController::class,'index'])->name('login');
Route::get('/registration',[RegisterController::class,'index'])->name('registration');
/*
|--------------------------------------------------------------------------
| Login and register page show end
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






/*
|--------------------------------------------------------------------------
| Login, register, and logout functionality start
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/registration',[RegisterController::class,'register'])->name('do.register');
Route::post('/login',[LoginController::class,'login'])->name('do.login');
Route::post('/logout',[LoginController::class,'logout'])->name('do.logout');
/*
|--------------------------------------------------------------------------
| Login, register and logout functionality end
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/









/*
|--------------------------------------------------------------------------
| main dashboard route group start
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'dashboard','middleware' => 'protect'], function(){
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');

    //category route start
    Route::group(['prefix' => 'category'], function(){
        Route::get('/',[CategoryController::class,'index'])->name('category.show');
        Route::get('/data',[CategoryController::class,'data'])->name('category.data');
        Route::post('/create',[CategoryController::class,'create'])->name('category.create');
        Route::get('/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
        Route::post('/update/{id}',[CategoryController::class,'update'])->name('category.update');
        Route::get('/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
        Route::post('/do/delete/{id}',[CategoryController::class,'do_delete'])->name('category.do.delete');
    });
    //category route end

});
/*
|--------------------------------------------------------------------------
| main dashboard route group end
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/