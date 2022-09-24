@extends('layouts.master')

@section('title', 'Product')

@section('content')

<div class="mb-3">
    <h3>My product</h3>
    <div style="    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;">
        @foreach ($products as $product)
    <div class="owl-item active" style="width: 277.5px; margin-right: 0px; display:flex;"><div>
        <div class="product-item">
            <div class="pi-img-wrapper">
                <img src="{{asset($product["image_url"])}}" class="img-responsive" alt="product">
            </div>
            <h3><a href="shop-item.html">{{ $product["name"] }}</a></h3>
            <h3><a href="shop-item.html">{{ $product["brand"] }}</a></h3>
            <h3><a href="shop-item.html">{{ $product["price"] }} JD</a></h3>
            <div style="display: flex; justify-content: space-between;">
                <form action="product/delete/{{ $product["id"] }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">Delete</button>
                </form>

                <a href="/product/{{ $product["id"] }}" class="btn btn-default add2cart">View</a>

                <a href="/product/edit/{{ $product["id"] }}" class="btn btn-default add2cart">edit</a>
            </div>
            
        </div>
    </div>
    </div>
    @endforeach
    </div>
    
  </div>


@endsection