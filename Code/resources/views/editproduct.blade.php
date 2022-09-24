@extends('layouts.master')

@section('title', 'Edit')

@section('content')

<form method="POST" action="/product/update/{{ $product["id"] }}" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="name">name</label>
      <input name="name" class="form-control" id="name" value="{{ $product["name"] }}">
    </div>
    <div class="form-group">
        <label for="color">color</label>
        <input name="color" class="form-control" id="color" value="{{ $product["color"] }}">
      </div>
      <div class="form-group">
        <label for="price">price</label>
        <input name="price" class="form-control" id="price" value="{{ $product["price"] }}">
      </div>
      <div class="form-group">
        <label for="description">description</label>
        <input name="description" class="form-control" id="description" value="{{ $product["description"] }}">
      </div>

      <label for="image">Image</label>
      <input type="file" class="form-control-file" id="image" name="image">


      <button type="submit" class="btn btn-primary" style="margin-top: 5%">Edit</button>

  </form>


  @endsection