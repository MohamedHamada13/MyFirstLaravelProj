@extends('layout')
@section('title', 'Products')


@section('nav')
    <x-nav />
@endsection

@section('content')
    <div class="container mt-4 mb-4">
        @if (session('success'))
            <div class="alert bg-success text-white text-center">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div class="container mt-5 mb-5">
        <h1 class="text-center mt-5">Products</h1>
        <section>
            <div class="d-flex flex-wrap justify-content-center gap-4 mt-4">
                @foreach ($products as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
        </section>
    </div>
@endsection

@section('footer')
    <x-footer />
@endsection


