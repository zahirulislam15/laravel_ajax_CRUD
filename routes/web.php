<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

//routes

Route::get('/',[ProductController::class,'productList'])->name('products');
Route::post('/addProduct',[ProductController::class,'addProduct'])->name('add.product');
Route::post('/updateProduct',[ProductController::class,'updateProduct'])->name('update.product');
Route::post('/deleteProduct',[ProductController::class,'deleteProduct'])->name('delete.product');