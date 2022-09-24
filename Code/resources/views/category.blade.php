@extends('layouts.master')

@section('title', 'Store')

@section('content')


<div class="main">
    <div class="container">
      <ul class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li><a href="/category">Store</a></li>
      </ul>
      <!-- BEGIN SIDEBAR & CONTENT -->
      <div class="row margin-bottom-40">
        <!-- BEGIN SIDEBAR -->
        <div class="sidebar col-md-3 col-sm-5">
          <ul class="list-group margin-bottom-25 sidebar-menu">
            @foreach ($categories as $category)
            <li class="list-group-item clearfix"><a href="category/{{ $category["id"] }}"><i class="fa fa-angle-right"></i> {{ $category["name"] }}</a></li>
            @endforeach
          </ul>

          <div class="sidebar-filter margin-bottom-25">
            <h3>Price</h3>
            <p>
              <label for="amount">Range:</label>
              <input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;">
            </p>
            <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 10%; width: 40%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 10%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 50%;"></a></div>
          </div>
        </div>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="col-md-9 col-sm-7">
          <div class="row list-view-sorting clearfix">
            <div class="col-md-2 col-sm-2 list-view">
              <a href="javascript:;"><i class="fa fa-th-large"></i></a>
              <a href="javascript:;"><i class="fa fa-th-list"></i></a>
            </div>
          </div>
          
          @foreach ($products as $product )
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="product-item">
              <div class="pi-img-wrapper">
                <img src="{{ asset($product["image_url"]) }}" class="img-responsive" alt="Berry Lace Dress">
                <div>
                  <a href="/product/{{ $product["id"] }}" class="btn btn-default fancybox-fast-view">View</a>
                </div>
              </div>
              <h3><a href="shop-item.html">{{ $product["name"] }}</a></h3>
              <div class="pi-price">{{ $product["price"]}} JD</div>
              <a href="product/{{ $product["id"] }}" class="btn btn-default add2cart">View</a>
            </div>
          </div>
          @endforeach
          <!-- END PAGINATOR -->
        </div>
        <!-- END CONTENT -->
      </div>
      <!-- END SIDEBAR & CONTENT -->
    </div>
  </div>


@endsection