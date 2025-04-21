<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductComparisonController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CommentMiddleware;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
// use Illuminate\Http\Client\Request;
// use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, "index"])
    ->name('home');
// ->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
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

require __DIR__ . '/auth.php';



Route::get('/product', [ProductController::class, "index"]);
// Route xem chi tiết sản phẩm (không cần middleware check.purchase)
Route::get('/product_detail/{slug}', [ProductController::class, 'detail'])
    ->name('productDetail');

// Route gửi bình luận (nơi cần chặn chưa mua hàng)
Route::post('/san-pham/{slug}/comment', [ProductController::class, 'comment'])
    ->middleware(['auth', 'check.purchase']);


Route::get('/category/{id}', [ProductController::class, 'productsByCategory'])->name('category.products');
Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');


Route::get('/about', [AboutController::class, "index"]);


Route::get('/contact', [ContactController::class, "index"])->name('contact.index');
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.send');

Route::get('/checkout', [CheckoutController::class, "index"]);

Route::get('/account', [AccountController::class, "account"]);
// Route::get('/profile', [AccountController::class, "profile"]);

// blog
Route::get('/blog', [BlogController::class, "index"]);
Route::get('/blog/{id}', [BlogController::class, "show"]);

// cart
Route::get('/cart', [CartController::class, "index"]);
Route::post('/cart', [CartController::class, "store"]);
Route::get('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');
Route::get('/cart/delete/{id}', [CartController::class, 'delete'])->name('cart.delete');
Route::post('/cart/update', [CartController::class, 'updateQty'])->name('cart.update');



//checkout
Route::get('/checkout', [CheckoutController::class, "index"])->name('checkout');
Route::post('/momo_payment',[CheckoutController::class,"momo_payment"])->name('momo_payment');
Route::get('/checkout/success',[CheckoutController::class,"checkout_success"])->name('checkout.success')->middleware('auth');
Route::get('/checkout/ipn',[CheckoutController::class,"checkout_ipn"])->name('checkout.ipn');
Route::get('/order',[OrderController::class,"index"])->name('order.index');
Route::get('/order/{id}',[OrderController::class,"show"])->name('order.detail');
Route::get('/order-delete/{id}',[OrderController::class,"destroy"])->name('order.delete');
//middleware dang nhap 
// Route::middleware(['auth'])->group(function () {
//     Route::get('/checkout/success', [CheckoutController::class, 'checkout_success'])->name('checkout.success');
// });



//Comment
Route::post('binh-luan/{idSanPham}', [ProductController::class, 'comment'])->name('binhluan')->middleware(CommentMiddleware::class);
Route::middleware('auth')->group(function () {
    // Route::get('/comments/{slug}/edit', [ProductController::class, 'edit'])->name('client.comment.edit');
    // Route::put('/comments/{comment}', [ProductController::class, 'update'])->name('client.comment.update');
   
});


///Xoas Bluan
Route::get('/comment/delete/{id}', [ProductController::class, 'delete'])->name('comment.delete');

// routes/web.php
Route::prefix('compare')->group(function () {
    Route::get('/comparelist', [ProductComparisonController::class, 'index'])->name('compare.index');
    Route::post('/add/{product}', [ProductComparisonController::class, 'add'])->name('compare.add');
    Route::post('/remove/{product}', [ProductComparisonController::class, 'remove'])->name('compare.remove');
    Route::post('/clear', [ProductComparisonController::class, 'clear'])->name('compare.clear');
});

