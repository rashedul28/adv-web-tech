<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;



Route::get('/', [pagesController::class,'home'])->name('home');

Route::get('/home', [pagesController::class,'home']);

Route::get('/productprofile/{product_name}', [pagesController::class,'product_details'])->name('profile');

Route::get('/productslist', [pagesController::class,'products_list']);



Route::get('/addproduct', [pagesController::class,'add_product_page']);

Route::post('/addproduct', [pagesController::class,'add_product_submit']);
