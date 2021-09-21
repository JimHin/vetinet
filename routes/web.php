<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\Shop\MainController::class,'index'])->name('home');
Route::get('/product/{id}', [App\Http\Controllers\Shop\MainController::class,'product'])->name('see_product');
Route::get('/category/{id}', [App\Http\Controllers\Shop\MainController::class,'viewByCategory'])->name('see_by_category');
//Route::get('/cart',Gloudemans\Shoppingcart\Facades\Cart::class)->name('product.cart');
