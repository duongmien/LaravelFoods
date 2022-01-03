@extends('page.shop')
@section('shop_content')
<div class="row justify-content-center">
@foreach($product as $key => $pro)

    <div class="col-lg-6 col-md-6">
    <div class="feature-card style1">
    <a href="{{URL::to('/product-detail/'.$pro->product_id)}}">

        <div class="feature-img">
        <img src="{{URL::to('/uploads/product/'.$pro->product_image)}}"  alt="Image">
        </div>
    </a>
        <div class="feature-info">
    <a href="{{URL::to('/product-detail/'.$pro->product_id)}}">
            
        <h3 class="feature-title"><a href="{{URL::to('/product-detail/'.$pro->product_id)}}">{{$pro->product_name}}</a>
        </h3>
        <div class="feature-meta">
            <p class="feature-price"><?php echo $pro->product_price/1000?>.000 vnd<span><?php echo $pro->product_price/1000+30?>.000 vnd</span></p>
            
        </div>
    </a>
        <form>
            @csrf
            <input type="hidden" name="token" value="{{ csrf_token() }}">
            <input type="hidden" class="cart_product_id_{{$pro->product_id}}" value="{{$pro->product_id}}">
            <input type="hidden" class="cart_product_name_{{$pro->product_id}}" value="{{$pro->product_name}}">
            <input type="hidden" class="cart_product_image_{{$pro->product_id}}" value="{{$pro->product_image}}">
            <input type="hidden" class="cart_product_price_{{$pro->product_id}}" value="{{$pro->product_price}}">
            <input type="hidden" class="cart_product_qty_{{$pro->product_id}}" value="1">
            <button type="button" class="btn style2 add-to-card" data-id_product="{{$pro->product_id}}">
                <span><i class="flaticon-bag"></i>Add To Cart</span>
            </button>
            </form>   
        <!-- <a class="btn style2" href="show-cart"><i
            class="flaticon-shopping-bag-1"></i>Add To Cart</a>
         -->
        </div>
        </a>
    </div>
    </div>
@endforeach
</div>
@endsection