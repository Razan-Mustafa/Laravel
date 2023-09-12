@extends('layout.master')

@section('title','View')
@section('css')
<link rel="stylesheet" href="{{asset('css/view.css')}}">
@endsection
    
@section('content')

<div class="product-container">
    <h1 class="product-title">{{$product->name}}</h1>
    <p class="product-description">{{$product->description}}</p>
    <p class="product-price">{{$product->price}}</p>
    <img class="product-image" src="{{ asset('path_to_product_image.jpg') }}" alt="Product Image">
</div>
@endsection