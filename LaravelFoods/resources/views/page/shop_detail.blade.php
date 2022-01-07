@extends('layout')
@section('content')
<div class="content-wrapper">

    <div class="breadcrumb-wrap bg-f br-1">
        <div class="overlay bg-black op-9"></div>
        <img src="{{URL::to('frontend/assets/img/shape-1.png')}}" tppabs="https://templates.hibootstrap.com/caban/default/assets/img/shape-1.png" alt="Image" class="br-shape-1">
        <img src="{{URL::to('frontend/assets/img/shape-2.png')}}" tppabs="https://templates.hibootstrap.com/caban/default/assets/img/shape-2.png" alt="Image" class="br-shape-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-title">
                        <h2>Shop Details</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="index.html" tppabs="https://templates.hibootstrap.com/caban/default/index.html">Home
                                </a></li>
                            <li><a href="shop-left-sidebar.html" tppabs="https://templates.hibootstrap.com/caban/default/shop-left-sidebar.html">Shop
                                </a></li>
                            <li>Shop Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="product-details-wrap pt-100">
    @foreach($product_detail as $key => $pro)
        <div class="container">
            <div class="row gx-5 ">
                <div class="col-lg-6">
                    <div class="swiper-container mySwiper2 single-product-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{URL::to('/uploads/product/'.$pro->product_image)}}" />
                            </div>
                        </div>
                    </div>
                    <div thumbsSlider="" class="swiper-container mySwiper single-product-thumbs">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{URL::to('/uploads/product/'.$pro->product_image)}}"  />
                            </div>
                           
                        </div>
                        <div class="product-slider-next slider-btn style2"><i class="flaticon-right-arrow-angle"></i></div>
                        <div class="product-slider-prev slider-btn style2"><i class="flaticon-left-arrow-1"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-product-details">
                        <div class="single-product-title">
                            <h2>{{$pro->product_name}}</h2>
                            <div class="product-ratings">
                                <ul class="ratings list-style">
                                    <li> <i class="flaticon-star-1"></i> </li>
                                    <li> <i class="flaticon-star-1"></i> </li>
                                    <li> <i class="flaticon-star-1"></i> </li>
                                    <li> <i class="flaticon-star-1"></i> </li>
                                    <li> <i class="flaticon-star-1"></i> </li>
                                </ul>
                            </div>
                            <h3><span><?php echo $pro->product_price/1000?>.000 vnd</span> <span class="discount"><?php echo $pro->product_price/1000+30?>.000 vnd</span></h3>
                        </div>
                        <div class="single-product-desc">
                            <p>
                                {{$pro->product_desc}}
                            </p>
                            <ul class="content-feature-list list-style mb-20">
                                <li><i class="las la-check-circle"></i>{{$pro->product_meal}}</li>
                                
                            </ul>
                        </div>
                        <form>
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="product-more-option">
                            <div class="product-more-option-item">
                                <h6>Category :</h6>
                                <a href="shop-left-sidebar.html" >{{$pro->category_name}}</a>
                            </div>
                            <div class="product-more-option-item">
                                <h6>Quantity:</h6>
                                <div class="product-quantity style1">
                                    <div class="qtySelector">
                                        <span class="decreaseQty"><i class="flaticon-left-arrow-1"></i></span>
                                        <input name="qty" type="text" class="qtyValue cart_product_qty_{{$pro->product_id}}" value="1" />
                                        <input name="product_id_hidden" type="hidden" class="qtyValue " value="{{$pro->product_id}}" />
                                        <span class="increaseQty"><i class="flaticon-next"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-more-option-item">
                                <h6>Availability :</h6>
                                <a href="shop-left-sidebar.html" tppabs="https://templates.hibootstrap.com/caban/default/shop-left-sidebar.html">In
                                    Stock</a>
                            </div>
                        </div>
                        <div class="single-product-option">
                            <input type="hidden" class="cart_product_id_{{$pro->product_id}}" value="{{$pro->product_id}}">
                            <input type="hidden" class="cart_product_name_{{$pro->product_id}}" value="{{$pro->product_name}}">
                            <input type="hidden" class="cart_product_image_{{$pro->product_id}}" value="{{$pro->product_image}}">
                            <input type="hidden" class="cart_product_price_{{$pro->product_id}}" value="{{$pro->product_price}}">
                            <button type="button" class="btn style1 add-to-card" data-id_product="{{$pro->product_id}}"><span><i class="flaticon-bag"></i>Add To
                                    Cart</span></button>
                            <button type="button" class="btn style2 buy-now" data-id_product="{{$pro->product_id}}"><span>Buy Now </span></button>
                        </div>
                        </form>
                        <div class="product-more-option">
                            <div class="product-more-option-item">
                                <h6>Share On :</h6>
                                <ul class="social-profile style3 list-style">
                                    <li><a target="_blank" href="javascript:if(confirm(%27https://facebook.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://facebook.com/%27"
                                            tppabs="https://facebook.com/"><i class="flaticon-facebook"></i>
                                        </a></li>
                                    <li>
                                        <a target="_blank" href="javascript:if(confirm(%27https://twitter.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://twitter.com/%27"
                                            tppabs="https://twitter.com/"> <i class="flaticon-twitter-1"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="javascript:if(confirm(%27https://instagram.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://instagram.com/%27"
                                            tppabs="https://instagram.com/"> <i class="flaticon-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="javascript:if(confirm(%27https://youtube.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://youtube.com/%27"
                                            tppabs="https://youtube.com/"> <i class="flaticon-youtube"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-100">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs product-tablist" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab_1" type="button" role="tab">Description</button>
                        </li>
                        
                    </ul>
                    <div class="tab-content product-tab-content">
                        <div class="tab-pane fade show active" id="tab_1" role="tabpanel">
                            <div class="product_desc">
                                <p>{{$pro->product_content}}</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endforeach
    </section>

    <section class="feature-wrap style2 ptb-100">
        <div class="container">
            <div class="section-title style1 text-center mb-40">
                <span>
                    <img src="{{URL::to('frontend/assets/img/secion-shape-1.png')}}"
                        tppabs="https://templates.hibootstrap.com/caban/default/assets/img/secion-shape-1.png"
                        alt="Image">
                    Check More
                    <img src="{{URL::to('frontend/assets/img/secion-shape-2.png')}}"
                        tppabs="https://templates.hibootstrap.com/caban/default/assets/img/secion-shape-2.png"
                        alt="Image">
                </span>
                <h2>Related product</h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="feature-slider swiper-container">
                        <div class="swiper-wrapper">
                            @foreach($all_product as $key => $pro)
                            <div class="swiper-slide">
                                <div class="feature-card style1">
                                    <div class="feature-img">
                                        <img src="{{URL::to('/uploads/product/'.$pro->product_image)}}" alt="Image">
                                    </div>
                                    <div class="feature-info">
                                        <h3 class="feature-title"><a href="shop-details.html" >{{$pro->product_name}}</a>
                                        </h3>
                                        <div class="feature-meta">
                                            <p class="feature-price">><?php echo $pro->product_price/1000?>.000 vnd<span><?php echo $pro->product_price/1000+30?>.000 vnd</span></p>
                                            <div class="ratings">
                                                <i class="flaticon-star-1"></i>
                                                <span>4.9</span>
                                            </div>
                                        </div>
                                        <a class="btn style2" href="shop-details.html"><i
                                                class="flaticon-shopping-bag-1"></i>Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="feature-pagination"></div>
        </div>
    </section>

</div>

@endsection