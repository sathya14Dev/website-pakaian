<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// }); 

Route::get('/home', function () {
    return view('User.home');
}); 

Route::get('/about', function () {
    return view('User.about');
}); 

Route::get('/products', function () {
    return view('User.products');
}); 

Route::get('/detail', function () {
    return view('User.product-detail');
});

Route::get('/contact', function () {
    return view('User.contact');
}); 