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
        $products = Product::all();
        $categories = Product::select('category')->distinct()->get();
        return view('home', compact('products', 'categories'));
    }


    public function index1()
    {
        $products1 = Product::all();
        $categories1 = Product::select('category')->distinct()->get();
        return view('home2', compact('products1', 'categories1'));
    }
    public function filterByCategory(Request $request)
    {
        $selectedCategory = $request->input('category');
        $products = Product::where('category', $selectedCategory)->get();
        $categories = Product::select('category')->distinct()->get();
        return view('home', compact('products', 'categories'));
    }
    public function filterByCategory1(Request $request)
    {
        $selectedCategory1 = $request->input('category');
        $products1 = Product::where('category', $selectedCategory1)->get();
        $categories1 = Product::select('category')->distinct()->get();
        return view('home2', compact('products1', 'categories1'));
    }



    public function edit($product_name)
    {
        $product = Product::find($product_name);
        return view('edit', compact('product'));
    }

    public function destroy($product_name)
    {
        $product = Product::find($product_name);
        $product->delete();
        return redirect()->route('home')->with('success', 'Product deleted successfully');
    }

}
