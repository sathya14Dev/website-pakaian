<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string'
        ]);

        // Kirim email ke kamu
        $data = $request->only('name', 'email', 'message');

        Mail::to('trisnacollection@example.com')->send(mailable: new ContactMail($data));

        return back()->with('success', 'Pesan kamu sudah terkirim!');
    }
}
