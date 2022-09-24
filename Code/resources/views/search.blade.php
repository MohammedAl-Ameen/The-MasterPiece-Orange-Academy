@extends('layouts.master')

@section('title', 'Search')

@section('content')
<div class="sidebar col-md-3 col-sm-5">
    <div class="sidebar-filter margin-bottom-25">
      <h2>Search categories</h2>
      <h3>Availability</h3>
      <div class="checkbox-list">
        <label><div class="checker"><span><input type="checkbox"></span></div> Not Available (3)</label>
        <label><div class="checker"><span><input type="checkbox"></span></div> In Stock (26)</label>
      </div>

      <h3>Price</h3>
      <p>
        <label for="amount">Range:</label>
        <input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;">
      </p>
      <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 10%; width: 40%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 10%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 50%;"></a></div>
    </div>

    <div class="sidebar-products clearfix">
      <h2>Bestsellers</h2>
      <div class="item">
        <a href="shop-item.html"><img src="assets/pages/img/products/k1.jpg" alt="Some Shoes in Animal with Cut Out"></a>
        <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>
        <div class="price">$31.00</div>
      </div>
      <div class="item">
        <a href="shop-item.html"><img src="assets/pages/img/products/k4.jpg" alt="Some Shoes in Animal with Cut Out"></a>
        <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>
        <div class="price">$23.00</div>
      </div>
      <div class="item">
        <a href="shop-item.html"><img src="assets/pages/img/products/k3.jpg" alt="Some Shoes in Animal with Cut Out"></a>
        <h3><a href="shop-item.html">Some Shoes in Animal with Cut Out</a></h3>
        <div class="price">$86.00</div>
      </div>
    </div>
  </div>

  <div class="col-md-9 col-sm-7">
    <div class="content-search margin-bottom-20">
      <div class="row">
        <div class="col-md-6">
          <h1>Search result for <em>shoes</em></h1>
        </div>
        <div class="col-md-6">
          <form action="#">
            <div class="input-group">
              <input type="text" placeholder="Search again" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="submit">Search</button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="row list-view-sorting clearfix">
      <div class="col-md-2 col-sm-2 list-view">
        <a href="javascript:;"><i class="fa fa-th-large"></i></a>
        <a href="javascript:;"><i class="fa fa-th-list"></i></a>
      </div>
      <div class="col-md-10 col-sm-10">
        <div class="pull-right">
          <label class="control-label">Show:</label>
          <select class="form-control input-sm">
            <option value="#?limit=24" selected="selected">24</option>
            <option value="#?limit=25">25</option>
            <option value="#?limit=50">50</option>
            <option value="#?limit=75">75</option>
            <option value="#?limit=100">100</option>
          </select>
        </div>
        <div class="pull-right">
          <label class="control-label">Sort&nbsp;By:</label>
          <select class="form-control input-sm">
            <option value="#?sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
            <option value="#?sort=pd.name&amp;order=ASC">Name (A - Z)</option>
            <option value="#?sort=pd.name&amp;order=DESC">Name (Z - A)</option>
            <option value="#?sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
            <option value="#?sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
            <option value="#?sort=rating&amp;order=DESC">Rating (Highest)</option>
            <option value="#?sort=rating&amp;order=ASC">Rating (Lowest)</option>
            <option value="#?sort=p.model&amp;order=ASC">Model (A - Z)</option>
            <option value="#?sort=p.model&amp;order=DESC">Model (Z - A)</option>
          </select>
        </div>
      </div>
    </div>
    <!-- BEGIN PRODUCT LIST -->
    <div class="row product-list">
      <!-- PRODUCT ITEM START -->
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="product-item">
          <div class="pi-img-wrapper">
            <img src="assets/pages/img/products/model1.jpg" class="img-responsive" alt="Berry Lace Dress">
            <div>
              <a href="assets/pages/img/products/model1.jpg" class="btn btn-default fancybox-button">Zoom</a>
              <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
            </div>
          </div>
          <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
          <div class="pi-price">$29.00</div>
          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
        </div>
      </div>
      <!-- PRODUCT ITEM END -->
      <!-- PRODUCT ITEM START -->
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="product-item">
          <div class="pi-img-wrapper">
            <img src="assets/pages/img/products/model2.jpg" class="img-responsive" alt="Berry Lace Dress">
            <div>
              <a href="assets/pages/img/products/model2.jpg" class="btn btn-default fancybox-button">Zoom</a>
              <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
            </div>
          </div>
          <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
          <div class="pi-price">$29.00</div>
          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
        </div>
      </div>
      <!-- PRODUCT ITEM END -->
      <!-- PRODUCT ITEM START -->
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="product-item">
          <div class="pi-img-wrapper">
            <img src="assets/pages/img/products/model6.jpg" class="img-responsive" alt="Berry Lace Dress">
            <div>
              <a href="assets/pages/img/products/model6.jpg" class="btn btn-default fancybox-button">Zoom</a>
              <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
            </div>
          </div>
          <h3><a href="shop-item.html">Berry Lace Dress 2</a></h3>
          <div class="pi-price">$29.00</div>
          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
        </div>
      </div>
      <!-- PRODUCT ITEM END -->
    </div>
    <div class="row product-list">
      <!-- PRODUCT ITEM START -->
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="product-item">
          <div class="pi-img-wrapper">
            <img src="assets/pages/img/products/model4.jpg" class="img-responsive" alt="Berry Lace Dress">
            <div>
                <a href="assets/pages/img/products/model4.jpg" class="btn btn-default fancybox-button">Zoom</a>
                <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
            </div>
          </div>
          <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
          <div class="pi-price">$29.00</div>
          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
        </div>
      </div>
      <!-- PRODUCT ITEM END -->
      <!-- PRODUCT ITEM START -->
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="product-item">
          <div class="pi-img-wrapper">
            <img src="assets/pages/img/products/model5.jpg" class="img-responsive" alt="Berry Lace Dress">
            <div>
                <a href="assets/pages/img/products/model5.jpg" class="btn btn-default fancybox-button">Zoom</a>
                <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
            </div>
          </div>
          <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
          <div class="pi-price">$29.00</div>
          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
          <div class="sticker sticker-new"></div>
        </div>
      </div>
      <!-- PRODUCT ITEM END -->
      <!-- PRODUCT ITEM START -->
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="product-item">
          <div class="pi-img-wrapper">
            <img src="assets/pages/img/products/model3.jpg" class="img-responsive" alt="Berry Lace Dress">
            <div>
                <a href="assets/pages/img/products/model3.jpg" class="btn btn-default fancybox-button">Zoom</a>
                <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
            </div>
          </div>
          <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
          <div class="pi-price">$29.00</div>
          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
        </div>
      </div>
      <!-- PRODUCT ITEM END -->
    </div>
    <div class="row product-list">
      <!-- PRODUCT ITEM START -->
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="product-item">
          <div class="pi-img-wrapper">
            <img src="assets/pages/img/products/model7.jpg" class="img-responsive" alt="Berry Lace Dress">
            <div>
                <a href="assets/pages/img/products/model7.jpg" class="btn btn-default fancybox-button">Zoom</a>
                <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
            </div>
          </div>
          <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
          <div class="pi-price">$29.00</div>
          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
        </div>
      </div>
      <!-- PRODUCT ITEM END -->
      <!-- PRODUCT ITEM START -->
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="product-item">
          <div class="pi-img-wrapper">
            <img src="assets/pages/img/products/model1.jpg" class="img-responsive" alt="Berry Lace Dress">
            <div>
                <a href="assets/pages/img/products/model1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
            </div>
          </div>
          <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
          <div class="pi-price">$29.00</div>
          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
        </div>
      </div>
      <!-- PRODUCT ITEM END -->
      <!-- PRODUCT ITEM START -->
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="product-item">
          <div class="pi-img-wrapper">
            <img src="assets/pages/img/products/model2.jpg" class="img-responsive" alt="Berry Lace Dress">
            <div>
                <a href="assets/pages/img/products/model2.jpg" class="btn btn-default fancybox-button">Zoom</a>
                <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
            </div>
          </div>
          <h3><a href="shop-item.html">Berry Lace Dress</a></h3>
          <div class="pi-price">$29.00</div>
          <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
          <div class="sticker sticker-sale"></div>
        </div>
      </div>
      <!-- PRODUCT ITEM END -->
    </div>
    <!-- END PRODUCT LIST -->
    <!-- BEGIN PAGINATOR -->
    <div class="row">
      <div class="col-md-4 col-sm-4 items-info">Items 1 to 9 of 10 total</div>
      <div class="col-md-8 col-sm-8">
        <ul class="pagination pull-right">
          <li><a href="javascript:;">«</a></li>
          <li><a href="javascript:;">1</a></li>
          <li><span>2</span></li>
          <li><a href="javascript:;">3</a></li>
          <li><a href="javascript:;">4</a></li>
          <li><a href="javascript:;">5</a></li>
          <li><a href="javascript:;">»</a></li>
        </ul>
      </div>
    </div>
    <!-- END PAGINATOR -->
  </div>


@endsection