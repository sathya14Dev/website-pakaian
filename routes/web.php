<?php

use App\Http\Controllers\AdminAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('User.home');
}); 


// User Routes
Route::middleware(['guest'])->group(function () {
    Route::get('/home', [UserController::class, 'index']);
    Route::get('/about', [UserController::class, 'about']);
    Route::get('/products', [UserController::class, 'products']);
    Route::get('/product-detail', [UserController::class, 'productDetail']);
    Route::get('/contact', [UserController::class, 'contact']);
});

// Authentication Routes
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AdminAuthController::class, 'loginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');
});

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('logout');
});

// Admin Routes
Route::prefix('admin')->name('admin.')->middleware(['auth:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
});
