@extends('layout')

@section('title', 'Home')

@section('content')
    <x-nav />

    <div class="container mt-5 mb-5 text-center">
        <h1>Welcome to Home of { Hamada Store }</h1>
        <p>Find the best products at unbeatable prices!</p>
    </div>

    <x-footer />
@endsection
