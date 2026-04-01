@extends('layout')
@section('title', 'Home')


@section('nav')
    <x-nav />
@endsection

@section('content')
    <div class="container mt-5 mb-5 text-center">
        <h1>Welcome to Home of { Hamada Store }</h1>
        <p>Find the best products at unbeatable prices!</p>
    </div>
@endsection

@section('footer')
    <x-footer />
@endsection
