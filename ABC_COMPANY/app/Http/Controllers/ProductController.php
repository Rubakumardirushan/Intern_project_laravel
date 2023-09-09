<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function diru(Request $request)
    {
        // Validate incoming data
        $validatedData = $request->validate([
            'category' => 'required|string|max:255',
            'product_name' => 'required|string|unique:products|max:255',
            'product_description' => 'required|string',
        ]);

        // Create a new product
        $product = new Product();
        $product->product_name = $validatedData['product_name'];
        $product->category = $validatedData['category'];
        $product->product_description = $validatedData['product_description'];
        $product->save();

        // Return a success response
        return response()->json(['message' => 'Product created successfully'], 201);
    }

    public function index()
    {
        $products = Product::all(); // Fetch all products from the "products" table
        return view('home', compact('products'));
    }



}
