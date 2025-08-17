<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\DashboardController;

// Otomatis ke Home
Route::get('/', function () {
    return view('User.home');
});

// Otomatis ke Login Admin
Route::get('/admin', function () {
    return redirect()->route('admin.login');
});

// User Routes
Route::middleware(['guest'])->group(function () {
    Route::get('/home', [UserController::class, 'index']);
    Route::get('/about', [UserController::class, 'about']);
    Route::get('/products', [UserController::class, 'products']);
    Route::get('/product-detail', [UserController::class, 'productDetail']);
    Route::get('/contact', [UserController::class, 'contact']);
    Route::post('/contact', [UserController::class, 'send'])->name('contact.send');
});

// Authentication Routes
Route::middleware(['guest:admin'])->group(function () {
    Route::get('/admin/login', [AdminAuthController::class, 'loginForm'])->name('admin.login');
    Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('login.submit');
});

Route::middleware(['auth.custom:admin'])->group(function () {
    Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('logout');
});

// Admin Routes
Route::prefix('admin')->name('admin.')->middleware(['auth.custom:admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
});

// show product

Route::get('/show_product', function () {
    return view('Admin.Products.show');
});

// edit product
Route::get('/edit_product', function () {
    return view('Admin.Products.edit');
});

// create product
Route::get('/create_product', function () {
    return view('Admin.Products.create');
});