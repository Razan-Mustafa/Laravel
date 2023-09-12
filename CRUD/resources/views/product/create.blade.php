@extends('layout.master')

@section('title','Create')
@section('css')
<link rel="stylesheet" href="{{asset('css/create.css')}}">
@endsection
    
@section('content')

<div class="container">
    <h2>Create Product</h2>
    <form action="{{route('product.index')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
            <span>@error('name'){{$message}} @enderror</span>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description">{{ old('description') }}</textarea>
            <span>@error('description'){{ $message }}@enderror</span>
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" value="{{ old('price') }}">
            <span>@error('price'){{ $message }}@enderror</span>
        </div>
        <div class="form-group">
            <label for="photo">Photo:</label>
            <input type="file" id="photo" name="photo" accept="image/*" value="{{ old('photo') }}">
            <span>@error('photo'){{ $message }}@enderror</span>
        </div>
        <div class="button-container">
            <button type="submit">Create</button>
        </div>
    </form>
</div>
@endsection