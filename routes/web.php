<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

// General routes
Route::get('/', function() { return view('home'); })->name('home'); // Welcome page route

// Product routes
Route::get('/dashboard', [ProductController::class, 'dashboard'])->name('dashboard');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->whereNumber('id');

// User routes
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}/orders', [UserController::class, 'orders'])->name('users.orders');
