<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahCategories = Category::count();
        $jumlahProducts = Product::count();
        $jumlahPesans = Message::count();
        $messages = Message::latest()->paginate(5);
        return view('Admin.dashboard', compact('messages', 'jumlahCategories', 'jumlahProducts', 'jumlahPesans'));
    }
}
