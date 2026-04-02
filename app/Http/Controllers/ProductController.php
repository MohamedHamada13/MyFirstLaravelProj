<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function dashboard() {
        $products = Product::all();
        return view('dashboard', compact('products'));
    }

    public function create() { return view('create'); } // Show the form that create a new product
    public function store(Request $request) {
        // Hint: the `validate()` fn will automatically redirect back to the form with error messages if validation fails.
        $validatedData = $request->validate([
            'title' => 'required|string|min:2|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'image' => 'nullable',
        ]);

        Product::create($validatedData);

        // Redirect to the products index page with a success message
        return redirect('/products')->with('success', 'Product created successfully!');
    }


    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|string|min:2|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        $product->update($validatedData);

        return redirect('/dashboard')->with('success', 'Product updated successfully!');
    }

    public function destroy($id) {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/dashboard')->with('success', 'Product deleted successfully!');
    }
}
