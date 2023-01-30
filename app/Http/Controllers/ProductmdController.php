<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductmdRequest;
use App\Http\Requests\UpdateProductmdRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductmdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // fetch all products from database table products using pagination
        $products = Product::paginate(5);

        // return view with products = $products
        return view('admin/products', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/products/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductmdRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the request
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required | min:10',
            'price' => 'required | numeric',
            'category' => 'required',
            'file' => 'required | image | mimes:jpeg,png,jpg,gif,svg | max:2048',
        ]);
        // dd($validated);
        // if validation fails, redirect back to the form with errors
        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        // get the fields from the request
        $name = $request->input('name');
        $description = $request->input('description');
        $price = $request->input('price');
        $category = $request->input('category');
        $image = $request->file('file');

        // generate a unique serial number for the image using str_random 40 characters
        $image_name = Str::random(40);
        // dd($image_name);

        // image extension
        $image_extension = $image->getClientOriginalExtension();
        // dd($image_extension);
        // upload the image to the storage folder
        // filename = image_name + product_name + image_extension
        $filename = $image_name . '-' . $name . '.' . $image_extension;
        $image->storeAs('public/images/products', $filename);
        // dd($image);

        // save the product to the database
        $product = new Product();
        $product->user_id = auth()->user()->id;
        $product->name = $name;
        $product->description = $description;
        $product->price = $price;
        $product->category = $category;
        $product->image = $image_name . '-' . $name . '.' . $image_extension;
        // dd($product->image);
        $product->serial_id = $image_name;

        // save the product
        $product->save();
        // if save successful, send a success message
        if ($product->save()) {
            session()->flash('success', 'Product created successfully');
        } else {
            session()->flash('error', 'Product not created');
        }

        // redirect to the products page with a success message
        return redirect()->route('admin.products')->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productmd  $productmd
     * @return \Illuminate\Http\Response
     */
    public function show(Product $productmd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productmd  $productmd
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $productmd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductmdRequest  $request
     * @param  \App\Models\Productmd  $productmd
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductmdRequest $request, Product $productmd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productmd  $productmd
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $productmd)
    {
        //
    }
}
