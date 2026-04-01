{{-- A form page to create a new product --}}
@extends('layout')
@section('title', 'Create Product')


@section('content')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="border rounded">
                    <h3 class="bg-primary text-white p-4 rounded-top">Create a Product</h3>
                    <form action="/products" method="post" class="p-4"> {{-- [POST] /products route to store a new product endpoint --}}
                        @csrf {{-- guard against CSRF attacks --}}
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Product title">
                            <label for="title">Product title</label>
                        </div>
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="description" name="description" placeholder="Product description"></textarea>
                            <label for="description">Description</label>
                        </div>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="d-flex justify-content-between gap-3">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="price" name="price" step="1" placeholder="Product Price">
                                <label for="price">Price</label>
                            </div>
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Product Quantity">
                                <label for="quantity">Quantity</label>
                            </div>
                            @error('quantity')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="image" name="image" placeholder="Image URL">
                            <label for="image">Image</label>
                        </div>
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-success w-100">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
