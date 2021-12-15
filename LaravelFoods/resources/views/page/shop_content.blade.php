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
        <div class="feature-info">
        <h3 class="feature-title"><a href="{{URL::to('/product-detail/'.$pro->product_id)}}">{{$pro->product_name}}</a>
        </h3>
        <div class="feature-meta">
            <p class="feature-price"><?php echo $pro->product_price/1000?>.000 vnd<span><?php echo $pro->product_price/1000+30?>.000 vnd</span></p>
            
        </div>
        <form action="{{URL::to('/save-cart')}}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ csrf_token() }}">
            <input name="qty" type="hidden" class="qtyValue" value="1" />
            <input name="product_id_hidden" type="hidden" class="qtyValue" value="{{$pro->product_id}}" />
            <button type="submit" class="btn style2">
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