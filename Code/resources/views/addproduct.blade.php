@extends('layouts.master')

@section('title', 'Add Product')

@section('content')
<form action="/product/create" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group" >
      <label for="image">Image</label>
      <input type="file" class="form-control-file" id="image" name="image">

      <label>Name</label>
        <input type="text" name="name">

        <label>Color</label>
        <input type="text" name="color">

        <label>Price</label>
        <input type="text" name="price">

        <label>Description</label>
        <input type="text" name="description">

        <select name="brand_id">
            @foreach ($brands as $brand)
            <option value="{{ $brand["id"] }}">{{ $brand["name"] }}</option>
            @endforeach

          </select>


          <select name="category_id">
            @foreach ($categories as $category)
            <option value="{{ $category["id"] }}">{{ $category["name"] }}</option>
            @endforeach

          </select>

          <input type="submit" value="submit">

    </div>
  </form>
@endsection