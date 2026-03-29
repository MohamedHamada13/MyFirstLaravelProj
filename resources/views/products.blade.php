@extends('layout')

@section('title', 'Products')

    
@section('content')
    <h1 class="text-center mt-5">Products</h1>
    <section>
        <div class="d-flex flex-wrap justify-content-center gap-4 mt-4">
        @foreach($products as $product)
            <x-product-card :product="$product"/>
        @endforeach
        </div>
    </section>

@endsection

