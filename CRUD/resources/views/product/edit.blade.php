@extends('layout.master')

@section('title','View')
@section('css')
<link rel="stylesheet" href="{{asset('css/create.css')}}">
@endsection
    
@section('content')

<form action="{{route('product.update',$product ->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{$product->name}}">
        <span>@error('name'){{$message}} @enderror</span>
    </div>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{$product->description}}</textarea>
        <span>@error('description'){{ $message }}@enderror</span>
    </div>

    <div class="form-group">
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" value="{{$product->price}}">
        <span>@error('price'){{ $message }}@enderror</span>
    </div>
    <div class="form-group">
        <label for="photo">Photo:</label>
        <input type="file" id="photo" name="photo" accept="image/*" value="{{$product->photo}}">
        <span>@error('photo'){{ $message }}@enderror</span>
    </div>
    <div class="button-container">
        <button type="submit">Update</button>
    </div>
</form>
@endsection