<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Purchases;

class Dashboard extends Controller
{
    public function index()
    {
        // get all purchased products under the user id from the purchases table
        $id = auth()->user()->id;
        $purchases = Purchases::where('user_id', $id)->get();
        // dd($purchases);
        // get all products from the products table where the product id is in the purchases table
        $products = Product::whereIn('id', $purchases->pluck('product_id'))->get();
        // dd($products);
        return view('dashboard', ['products' => $products]);
    }
}
