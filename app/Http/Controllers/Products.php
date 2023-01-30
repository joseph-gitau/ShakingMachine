<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class Products extends Controller
{
    public function index()
    {
        // get all products from the products table where the product status is available
        $products = Product::where('status', 'available')->get();
        // dd($products);
        return view('products', ['products' => $products]);
    }
    // show product details
    public function show($id)
    {
        $product = Product::find($id);
        // dd($product);
        return view('products-view', ['product' => $product]);
    }
}
