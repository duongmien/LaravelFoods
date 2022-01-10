@extends('layout')
@section('content')

<?php
use Illuminate\Support\Facades\Session;
$message = Session::get('message');
$m1 = Session::get('m1');
$m2 = Session::get('m2');
$m3 = Session::get('m3');
$m4 = Session::get('m4');
$m5 = Session::get('m5');
if ($message) {
    echo '<script>alert("' . $message . '");</script> ';
    Session::put('message', null);
}
?>
  <div class="content-wrapper">
    <div class="breadcrumb-wrap bg-f br-1">
      <div class="overlay bg-black op-9"></div>
      <img src="{{asset('frontend/assets/img/shape-1.png')}}"
        tppabs="https://templates.hibootstrap.com/caban/default/assets/img/shape-1.png" alt="Image" class="br-shape-1">
      <img src="{{asset('frontend/assets/img/shape-2.png')}}"
        tppabs="https://templates.hibootstrap.com/caban/default/assets/img/shape-2.png" alt="Image" class="br-shape-2">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="breadcrumb-title">
              <h2>Shop</h2>
              <h3 style="color: #ffffff">Pick tasty, pick best</h3>
              <ul class="breadcrumb-menu list-style">
                <li><a href="{{URL::to('home')}}">Home </a>
                </li>
                <li>Shop</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="Shop-wrap ptb-100">
      <div class="container">
        <div class="row gx-5">
          <div class="col-xl-4 col-lg-12 order-xl-1 order-lg-2 order-md-2 order-2">
            <div class="sidebar">
              <div class="sidebar-widget search-box">
                <h4>Search </h4>
                <form action="{{URL::to('/search')}}" method="POST">
                @csrf
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <input type="search" name="keywords" placeholder="Search">
                  <button type="submit"> <i class="flaticon-search"></i></button>
                </div>
                </form>
              </div>
              <div class="sidebar-widget categories">
                <h4>Category</h4>
                <div class="category-box">
                  <ul class="list-style">

                  @foreach($category as $key => $cate)
                    <li>
                      <a href="{{URL::to('/category-shop/'.$cate->category_id)}}">
                      {{$cate->category_name}}
                      <i class="flaticon-right-arrow-angle"></i>
                     </a>
                    </li>
                  @endforeach
                  </ul>
                </div>
              </div>
              <div class="sidebar-widget new-product">
                <h4>New Arrivals</h4>
                <div class="new-product-wrap">
                @foreach($new_product as $key => $pro)
                  <div class="new-product-item">
                    <a href="{{URL::to('/product-detail/'.$pro->product_id)}}" class="new-product-img">
                      <img src="{{URL::to('uploads/product/'.$pro->product_image)}}" alt="Image">
                    </a>
                    <div class="new-product-info">
                      <h6><a href="{{URL::to('/product-detail/'.$pro->product_id)}}">{{$pro->product_name}}</a></h6>
                      <div class="price"><span><?php echo $pro->product_price/1000?>.000 vnd</span>
                        <span class="discount"><?php echo $pro->product_price/1000+30?>.000 vnd</span>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="sidebar-widget price-range-widget">
                <h4>Price Filter</h4>
                <form action="{{URL::to('/price-filter')}}" method="POST">
                  @csrf  
                  <input type="hidden" name="token" value="{{ csrf_token() }}">
                <div class="checkbox-item-wrap">
                  <div class="checkbox-item d-flex justify-content-between align-items-center">
                  <div class="checkbox style2">
                        <input type="radio" id="m1" name="price" value="m1">
                        <label for="m1">0đ - 100.000đ</label><span>({{$m1}})</span><br>
                        <input type="radio" id="m2" name="price" value="m2">
                        <label for="m2">100.000đ - 150.000đ</label><span>({{$m2}})</span><br>
                        <input type="radio" id="m3" name="price" value="m3">
                        <label for="m3">150.000đ - 200.000đ</label><span>({{$m3}})</span><br>
                        <input type="radio" id="m4" name="price" value="m4">
                        <label for="m4">200.000đ - 500.000đ</label><span>({{$m4}})</span><br>
                        <input type="radio" id="m5" name="price" value="m5">
                        <label for="m5">&gt; 500.000đ</label><span>({{$m5}})</span><br>

                    </div>
                  </div>
                </div>
                <button type="submit" class="btn style1" style="float: right;">Apply</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-12 order-xl-2 order-lg-1 order-md-1 order-1">
            <div class="row align-items-center mb-25">
              <div class="col-xl-6 col-lg-5 col-md-4">
                <div class="profuct-result">
                  <p>Showing 10 of 120 Products</p>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="filter-item-cat">
                  <select>
                    <option value="1">Sort By Most Popular</option>
                    <option value="2">Sort By High To Low</option>
                    <option value="3">Sort By Low To High</option>
                  </select>
                </div>
              </div>
              <div class="col-xl-2 col-lg-3 col-md-4">
                <div class="filter-item-num">
                  <select>
                    <option value="1">Show 10</option>
                    <option value="2">Show 20</option>
                    <option value="3">Show 30</option>
                  </select>
                </div>
              </div>
            </div>
            @yield('shop_content')
            <div class="page-navigation">
              <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 text-sm-start text-center smb-20">
                  <a href="shop-left-sidebar.html"
                    tppabs="https://templates.hibootstrap.com/caban/default/shop-left-sidebar.html"
                    class="btn prev">Prev Page</a>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 text-center smb-20">
                  <ul class="page-nav list-style">
                    <li><a class="active" href="shop-left-sidebar.html"
                        tppabs="https://templates.hibootstrap.com/caban/default/shop-left-sidebar.html">1</a></li>
                    <li><a href="shop-left-sidebar.html"
                        tppabs="https://templates.hibootstrap.com/caban/default/shop-left-sidebar.html">2</a></li>
                    <li><a href="shop-left-sidebar.html"
                        tppabs="https://templates.hibootstrap.com/caban/default/shop-left-sidebar.html">3</a></li>
                  </ul>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 text-sm-end text-center">
                  <a href="shop-left-sidebar.html"
                    tppabs="https://templates.hibootstrap.com/caban/default/shop-left-sidebar.html"
                    class="btn next">Next Page </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
