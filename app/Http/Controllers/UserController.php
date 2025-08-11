<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        return view('User.home');
    }

    function about()
    {
        return view('User.about');
    }

    function products()
    {
        return view('User.products');
    }
    
    function productDetail()
    {
        return view('User.product-detail');
    }

    function contact()
    {
        return view('User.contact');
    }
}
