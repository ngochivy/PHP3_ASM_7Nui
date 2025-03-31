<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, "index"]);
Route::get('/about', [AboutController::class, "index"]);
Route::get('/contact', [ContactController::class, "index"]);
Route::post('/contact', [ContactController::class, "sendmail"]);
Route::get('/checkout', [CheckoutController::class, "index"]);
