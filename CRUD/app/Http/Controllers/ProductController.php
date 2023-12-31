<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products=Product::all();
       return view('product.home',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|min:2',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0.01',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

   // Handle file upload
        if ($request->hasFile('photo')) {
        $uploadedFile = $request->file('photo');         // 'uploads' is the directory where the file will be stored
        $storedPath = $uploadedFile->store('public/photo');   // Save $storedPath in your database or use it as needed
        }

        $input =$request ->all();
        Product::create($input);

        return redirect('product')-> with('success' ,'Product added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    // public function show(Product $product)
    // {
    //     //
    // }

    public function show($id)
    {
        $product=Product::find($id);
        return view('product.view', ['product' => $product]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        return view('product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $product=Product::find($id);
        $input=$request->all();
        $product->update($input);
        return redirect('product')->with('success',"updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('product')->with('success', 'Product deleted successfully');
    }
}