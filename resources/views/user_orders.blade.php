@extends('layout')
@section('title', 'user orders')


@section('nav')
    <x-nav />
@endsection


@section('content')
    <div class="container mt-5 mb-5">
        <h1 class="text-center mt-5">User Orders</h1>
        <div>
            <h2 class="text-center mt-4 mb-4">
                Orders for <span class="text-primary">{{ $userWithOrders->name }}</span>
            </h2>
            @if ($userWithOrders->orders->isEmpty())
                <p class="text-muted text-center">No orders found for this user.</p>
            @else
                <div>
                    @foreach ($userWithOrders->orders as $order)
                        <div class="card mb-3 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Order ID: {{ $order->id }}</h5>
                                {{-- <p class="card-text">Total: ${{ number_format($order->total, 2) }}</p> --}}
                                <p class="card-text"><small class="text-muted">Created at
                                        {{ $order->created_at->format('F j, Y, g:i a') }}</small></p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection


@section('footer')
    <x-footer />
@endsection
