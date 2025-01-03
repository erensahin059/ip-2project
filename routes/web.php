<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


Route::get('/', [IndexController::class, 'index']);



require __DIR__.'/auth.php';


Route::get('/cart', [ProductController::class, 'cart'])->name('cart.index');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');




Route::get('/contact', function () {
    return view('contact');
})->name('contact.page');
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.page');
Route::post('/contact', [ContactController::class, 'sendForm'])->name('contact.send');
Route::get('/cart', [CartController::class, 'index'])->name('cart.page');


Route::get('/products', [ProductController::class, 'index'])->name('products.index');






Route::get('/kadın', [ProductController::class, 'women'])->name('women.page');
Route::get('/erkek', [ProductController::class, 'men'])->name('men.page');
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.send');
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.page');
Route::get('/women', [ProductController::class, 'women'])->name('women.page');
Route::get('/men', [ProductController::class, 'men'])->name('men.page');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/cart', [ProductController::class, 'cart'])->name('cart.page');
Route::post('/cart/add', [ProductController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [ProductController::class, 'cart'])->name('cart.page');



