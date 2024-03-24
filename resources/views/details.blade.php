@extends('layouts.layout')
@section('title', '{{Str::limit($product->name, 5)}}}')

@section("content")

<div class="row container">
    <div class="col s12 m6">
        <img src="{{ $product->image }}" class="responsive-img">
    </div>
    <div class="col s12 m6">
        <h1>{{ Str::limit($product->name, 12) }}</h1>
        <p>{{ $product->description }}</p>
        <button class="btn orange btn-large">Buy Now</button>
    </div>
</div>

@endsection