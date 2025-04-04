<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
// use Illuminate\Http\Client\Request;
// use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, "index"])
    ->name('home')
    ->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

require __DIR__.'/auth.php';



Route::get('/product', [ProductController::class, "index"]);
Route::get('/product_detail/{slug}', [ProductController::class, "detail"]);

Route::get('/about', [AboutController::class, "index"]);
Route::get('/contact', [ContactController::class, "index"]);
Route::post('/contact', [ContactController::class, "sendmail"]);
Route::get('/checkout', [CheckoutController::class, "index"]);

Route::get('/account', [AccountController::class, "account"]);
// Route::get('/profile', [AccountController::class, "profile"]);

// blog
Route::get('/blog', [BlogController::class, "index"]);
Route::get('/blog/{id}', [BlogController::class, "show"]);

// cart
Route::get('/cart', [CartController::class, "index"]);
Route::post('/cart', [CartController::class, "store"]);
Route::post('/cart/update', [CartController::class, 'updateCart']);
Route::get('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');



