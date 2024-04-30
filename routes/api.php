<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(ProductController::class)->group(function(){
    Route::get('/products','index')->name('products.index');

    Route::post('/add/products','store')->name('add.products');

    Route::delete('/add/products','store')->name('destroy');


});
