<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [HomeController::class, "index"]);

Route::get('/product', [ProductController::class, "index"]);
Route::get('/product_detail/{slug}', [ProductController::class, "detail"]);

Route::get('/about', [AboutController::class, "index"]);
Route::get('/contact', [ContactController::class, "index"]);
Route::post('/contact', [ContactController::class, "sendmail"]);
Route::get('/checkout', [CheckoutController::class, "index"]);

Route::get('/account', [AccountController::class, "account"]);

Route::get('/profile', [AccountController::class, "profile"]);

// blog
Route::get('/blog', [BlogController::class, "index"]);
Route::get('/blog/{id}', [BlogController::class, "show"]);

// cart
Route::get('/cart', [CartController::class, "index"]);
