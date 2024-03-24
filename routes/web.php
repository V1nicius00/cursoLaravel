<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $products = Product::paginate(6);
    return view('home', compact('products'));
});
