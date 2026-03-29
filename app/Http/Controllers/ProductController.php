<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = file_get_contents(database_path('ProductsDB.json'));
        $products = json_decode($products); // Returns an array of objects not associative array
        return view('products', compact('products'));   
    }
    
    public function home()
    {
        return view('home');
    }

    public function create() { return view('create'); }
    public function store(Request $request) {  }
    public function show($id) {  }
    public function edit($id) {  }
    public function update(Request $request, $id) {  }
    public function destroy($id) {  }
}
