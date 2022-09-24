@extends('layouts.master')

@section('title', 'Item')

@section('content')


<div class="main">
    <div class="container">
      <ul class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li><a href="">Store</a></li>
          <li class="active">{{ $product["name"] }}</li>
      </ul>
      <!-- BEGIN SIDEBAR & CONTENT -->
      <div class="row margin-bottom-40">
        <!-- BEGIN SIDEBAR -->
        <div class="sidebar col-md-3 col-sm-5">
          <ul class="list-group margin-bottom-25 sidebar-menu">
            @foreach ( $categories as $category )
            <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> {{ $category["name"] }}</a></li>
            @endforeach
          </ul>

          <div class="sidebar-products clearfix">
            <h2>More Items</h2>
            @foreach ($randomProducts as $randomProduct)
            <div class="item">
              <a href='/product/{{ $randomProduct["id"] }}'><img src='{{asset($randomProduct["image_url"])}}' alt="{{ $randomProduct["name"] }}"></a>
              <h3><a href="/product/{{ $randomProduct["id"] }}">{{ $randomProduct["name"] }}</a></h3>
              <div class="price">{{ $randomProduct["price"] }} JD</div>
            </div>
            @endforeach
          </div>
        </div>
        <!-- END SIDEBAR -->

        <!-- BEGIN CONTENT -->
        <div class="col-md-9 col-sm-7">
          <div class="product-page">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="product-main-image" style="position: relative; overflow: hidden;">
                  <img src="{{asset($product["image_url"])}}" alt="{{ $product["name"] }}" class="img-responsive">
                <img src="assets/pages/img/products/model7.jpg" class="zoomImg" style="position: absolute; top: -38.5368px; left: -41.945px; opacity: 0; width: 600px; height: 800px; border: none; max-width: none;"></div>
                <div class="product-other-images">
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <h1>{{ $product["name"] }}</h1>
                <div class="price-availability-block clearfix">
                  <div class="price">
                    <strong><span>$</span>{{ $product["price"] }}</strong>
                  </div>
                </div>
                <div class="description">
                  <p>{{ $product["Description"] }}</p>
                </div>
                <div class="product-page-options">
                  <div class="pull-left">
                    <label class="control-label">Color: {{ $product["color"] }}</label>
                  </div>
                </div>
                <div class="product-page-cart">
                @if ($product["user_id"] != session()->get("loginId"))
                @if ($product["flag_available"])
                @if ($product["flag_is_appeal"])
                  <a href="#" class="btn btn-secondary btn-lg disabled" role="button" aria-disabled="true">Wating...</a>
                @else
                <form action="/appeal" method="POST">
                  @csrf
                  <input hidden value="{{$product["id"]}}" name="product_id">
                  <input hidden value="{{session()->get("loginId")}}" name="user_id">
                  <button class="btn btn-primary" type="submit">Place a Request</button>
                </form>
                @endif
              @else
                <a href="#" class="btn btn-secondary btn-lg disabled" role="button" aria-disabled="true">Unavalible</a>
              @endif
                @endif
                  
                </div>
              </div>

              <div class="product-page-content">
                <ul id="myTab" class="nav nav-tabs">
                  <li><a href="#Description" data-toggle="tab">Description</a></li>
                  {{-- <li><a href="#Information" data-toggle="tab">Information</a></li> --}}
                  <li class="active"><a href="#Reviews" data-toggle="tab">Reviews ({{ count($comments) }})</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                  <div class="tab-pane fade" id="Description">
                    <p>{{ $product["description"] }}</p>
                  </div>
                  {{-- <div class="tab-pane fade" id="Information">
                    <table class="datasheet">
                      <tbody><tr>
                        <th colspan="2">Additional features</th>
                      </tr>
                      <tr>
                        <td class="datasheet-features-type">Value 1</td>
                        <td>21 cm</td>
                      </tr>
                      <tr>
                        <td class="datasheet-features-type">Value 2</td>
                        <td>700 gr.</td>
                      </tr>
                      <tr>
                        <td class="datasheet-features-type">Value 3</td>
                        <td>10 person</td>
                      </tr>
                      <tr>
                        <td class="datasheet-features-type">Value 4</td>
                        <td>14 cm</td>
                      </tr>
                      <tr>
                        <td class="datasheet-features-type">Value 5</td>
                        <td>plastic</td>
                      </tr>
                    </tbody></table>
                  </div> --}}
                  <div class="tab-pane fade in active" id="Reviews">
                    <!--<p>There are no reviews for this product.</p>-->
                    <div class="review-item clearfix">
                      @foreach ($comments as $comment)
                      <div class="review-item-submitted">
                        <strong>{{ $comment["user_name"] }}</strong>
                        <em>{{ $comment["created_at"] }}</em>
                      </div>   
                                                              
                      <div class="review-item-content">
                          <p>{{ $comment["content"] }}</p>
                      </div>
                      @endforeach  
                    </div>
                    <!-- BEGIN FORM-->
                    <form action="/comment" class="reviews-form" role="form" method="post">
                      @csrf
                      <h2>Leave a comment</h2>
                      <div class="form-group">

                      <div class="form-group">
                        <label for="review">Review <span class="require">*</span></label>
                        <textarea class="form-control" rows="8" id="review" name="content"></textarea>
                        <input name="product_id" value="{{ $product["id"] }}" hidden>
                      </div>

                      <div class="padding-top-20">                  
                        <button type="submit" class="btn btn-primary">Comment</button>
                      </div>
                    </form>
                    <!-- END FORM--> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END CONTENT -->
      </div>
      <!-- END SIDEBAR & CONTENT -->
    </div>
  </div>


@endsection