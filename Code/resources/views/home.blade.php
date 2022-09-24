@extends('layouts.master')

@section('title', 'Home')

@section('content')






<div class="item">
    <div class="single-slide-item slide2">
        <div class="container">
            <div class="welcome-hero-content">
                <div class="row">
                    <div class="col-12">
                        <div class="single-welcome-hero">
                            <div class="welcome-hero-img">
                                <img src="assets/images/homepage/hero-cover.png" alt="slider image">
                            </div><!--/.welcome-hero-txt-->
                        </div><!--/.single-welcome-hero-->
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.welcome-hero-content-->
        </div><!-- /.container-->
    </div><!-- /.single-slide-item-->

</div>




<div class="main" style="margin-top: 5%">
    <div class="container">
    <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
        <div class="row margin-bottom-40">
            <!-- BEGIN SALE PRODUCT -->
            <div class="col-md-12 sale-product">
            <h2>New Arrivals</h2>
                        @foreach ( $data["product"] as $product )
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="product-item">
                              <div class="pi-img-wrapper">
                                <img src="{{ asset($product["image_url"]) }}" class="img-responsive" alt="Berry Lace Dress">
                                <div>
                                  <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
                                </div>
                              </div>
                              <h3><a href="shop-item.html">{{ $product["name"] }}</a></h3>
                              <div class="pi-price">{{ $product["price"]}} JD</div>
                              <a href="product/{{ $product["id"] }}" class="btn btn-default add2cart">View</a>
                            </div>
                          </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
        <!-- END SALE PRODUCT & NEW ARRIVALS -->

    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40 ">
                <!-- BEGIN SIDEBAR -->
                <div class="sidebar col-md-3 col-sm-4">
                    <ul class="list-group margin-bottom-25 sidebar-menu">
                        @foreach ($data["categories"] as $category )
                            <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> {{ $category["name"]}}</a></li>
                        @endforeach
                    </ul>
                </div>

                
    @foreach ($data["brands"] as $brand)
        <div class="owl-item active" style="width: 277.5px; margin-right: 0px;"><div>
            <div class="product-item">
                <div class="pi-img-wrapper">
                    <img src="{{ $brand["image_url"] }}" class="img-responsive" alt="Berry Lace Dress">
                </div>
                <h3><a href="shop-item.html">{{ $brand['name'] }}</a></h3>
                <a href="product/{{$brand["id"]}}" class="btn btn-default add2cart">View</a>
            </div>
        </div>
    @endforeach
    </div>



</div>




@endsection