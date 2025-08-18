<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Product;
use App\Models\Category;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    function index()
    {
        $products = Product::latest()->take(6)->get();
        return view('User.home', compact('products'));
    }

    function about()
    {
        return view('User.about');
    }

    function products(Request $request)
    {
        $categories = Category::all();

        // Ambil kategori dari query string
        $selectedCategory = $request->query('kategori');

        $products = Product::when($selectedCategory, function ($query, $selectedCategory) {
            return $query->whereHas('category', function ($q) use ($selectedCategory) {
                $q->where('name', $selectedCategory);
            });
        })->latest()->paginate(8);

        return view('User.products',compact('products', 'categories', 'selectedCategory'));
    }
    
    function productDetail($categorySlug, $productSlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();

        $products = Product::latest()->paginate(4);

        $product = Product::where('slug', $productSlug)
            ->where('category_id', $category->id)
            ->firstOrFail();

        return view('User.product-detail', compact('product', 'category', 'products'));
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

        Message::create($data);

        Mail::to('trisnacollection@example.com')->send(mailable: new ContactMail($data));

        return back()->with('success', 'Pesan kamu sudah terkirim!');
    }
}
