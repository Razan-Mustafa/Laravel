@extends('layout.master')

@section('title','Home')
@section('css')
<link rel="stylesheet" href="{{asset('css/home.css')}}">

@endsection
    
@section('content')

<h1>Product</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div>
    <a href="{{route('product.create')}}">Create</a>
</div>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Photo</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td><img src="/photo/{{$product->photo}}" alt=""></td>
            <td><a href="{{route('product.show',$product ->id)}}">View</a></td>
            <td><a href="{{route('product.edit',$product ->id)}}">Edit</a></td>
            <td>
                <form method="post" action="{{route('product.destroy',$product ->id)}}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection