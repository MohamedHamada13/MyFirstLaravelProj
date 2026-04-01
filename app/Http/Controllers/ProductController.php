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

    public function show($id) {  }
    public function edit($id) {  }
    public function update(Request $request, $id) {  }
    public function destroy($id) {  }
}
