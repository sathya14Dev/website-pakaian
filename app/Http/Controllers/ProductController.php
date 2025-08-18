<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all products and return to the view
        $products = Product::latest()->paginate(5);
        return view('Admin.Products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('Admin.Products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|unique:products,name',
            'harga' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            // Simpan gambar ke storage/app/public/foto_product
            $imagePath = $request->file('image')->store('foto_product', 'public');
        }
        // if ($request->file('image')) {
        //     $file = $request->file('image');
        //     $name = $file->hashName();

        //     Storage::disk('public')->putFileAs('foto_product', $file, $name);

        //     $request['image'] = $name;
        // }

        Product::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'harga' => $request->harga,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.product.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('Admin.Products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('Admin.Products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|unique:products,name',
            'harga' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = $product->image;

        if ($request->hasFile('image')) {
            // Hapus gambar lama kalau ada
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }

            // Simpan gambar baru
            $imagePath = $request->file('image')->store('foto_product', 'public');
        }

        // if ($request->hasFile('image')) {
        //     // Hapus foto lama
        //     if ($product->image) {
        //         Storage::delete('foto_product/' . $product->image);
        //     }

        //     $file = $request->file('image');
        //     $name = $file->hashName();
        //     Storage::putFileAs('foto_product', $file, $name);
        //     $image = $name; // nama file baru
        // }

        $product->update([
            'product_id' => $request->product_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'harga' => $request->harga,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.product.index')->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.product.index')->with('success', 'Data berhasil dihapus');
    }
}
