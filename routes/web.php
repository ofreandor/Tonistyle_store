<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

Route::get('/', function () {


    $products = Product::where('status', 'active')->get();
    return view('website.home', compact('products'));
})->name('home');





Route::get('/shop', [WebsiteController::class, 'shop'])->name('shop');
Route::get('/product-details/{id}', [WebsiteController::class, 'productDetails'])->name('product.details');

// Adding products to cart
Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.cart');

// show shopping cart information

Route::get('/cart', [CartController::class, 'shoppingCart'])->name('shopping.cart');
// routes/web.php
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');

Route::post('/cart/update', [CartController::class, 'updateCart'])->name('update.cart');


// Route::get('/customer/account', [UserController::class, 'account'])->name('account.profile');

Route::middleware(['auth'])->group(function () {
    Route::get('/customer/account', [UserController::class, 'account'])->name('account.profile');
    Route::get('/order', [OrderController::class, 'placeOrder'])->name('place.order');

});

Route::get('/sign-in', [WebsiteController::class, 'customerLogin'])->name('login.user');



Route::get('/callback', [PaymentController::class, 'handlePaymentCallback'])->name('callback_success');

Route::get('/webhook', [PaymentController::class, 'WebHook'])->name('web_hook');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





Route::get('admin/login', [AdminController::class, 'showAdminLogin'])->name('admin.login');
Route::post('admin/login/check', [AdminController::class, 'checkAdminLogin'])->name('process.admin.login');


Route::middleware(['admin'])->group(function () {

    Route::get('/admin/MyDashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');


    //Brands

    Route::get('/brand', [BrandController::class, 'index'])->name('brand');
    Route::post('/add/brand', [BrandController::class, 'store'])->name('store.brand');
    Route::delete('/delete/brand/{id}', [BrandController::class, 'destroy'])->name('delete.brand');
    Route::put('/brands/{id}', [BrandController::class, 'update'])->name('brand.update');

    // Category

    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::post('/add/category', [CategoryController::class, 'store'])->name('store.category');
    Route::delete('/delete/category/{id}', [CategoryController::class, 'destroy'])->name('delete.category');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');

    // Product

    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::get('/create/product', [ProductController::class, 'create'])->name('create.product');
    Route::post('/add/product', [ProductController::class, 'store'])->name('store.product');
    Route::delete('/delete/product/{id}', [ProductController::class, 'destroy'])->name('delete.product');
    Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');


});
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';