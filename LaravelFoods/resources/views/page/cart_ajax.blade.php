@extends('layout')
@section('content')
<?php
    use Illuminate\Support\Facades\Session;
    use Gloudemans\Shoppingcart\Facades\Cart;
    $message = Session::get('message');
    if($message){
        echo '<script>alert("'.$message.'");</script> ';
        Session::put('message',null);
    }
    $content = Cart::content();
    // echo '<pre>'; print_r($content);echo'</pre>';
    ?>
<div class="content-wrapper">

    <div class="breadcrumb-wrap bg-f br-1">
        <div class="overlay bg-black op-9"></div>
        <img src="{{URL::to('frontend/assets/img/shape-1.png')}}"  alt="Image" class="br-shape-1">
        <img src="{{URL::to('frontend/assets/img/shape-2.png')}}"  alt="Image" class="br-shape-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-title">
                        <h2>Cart</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="index.html" >Home </a></li>
                            <li>Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="wishlist-wrap ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-20">
                    <div class="wishlist-table ">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total Price</th>
                                    <th scope="col">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total = 0;
                                @endphp
                                @foreach(Session::get('cart') as $key => $cart)
                                @php
                                    $subtotal = $cart['product_price'] * $cart['product_qty'];
                                    $total += $subtotal;
                                @endphp
                                <tr>
                                    <td>
                                        <div class="wh_item">
                                            <img src="{{URL::to('uploads/product/'.$cart['product_image'])}}"  height="100px" width="100px"  alt="Image">
                                            <div class="wh-item-info">
                                                <a href="{{URL::to('/product-detail/'.$cart['product_id'])}}">{{$cart['product_name']}}</a>
                                                <p class="discount"><?php echo $cart['product_price']/1000+30?>.000 vnd</p>
                                                <span><?php echo $cart['product_price']/1000?>.000 vnd</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="wh_qty">
                                            <div class="product-quantity style2">
                                                <div class="qtySelector">
                                                    <span class="las la-minus decreaseQty changeQty"></span>
                                                    <input type="text" class="qtyValue" name="cart_quantity" value="{{$cart['product_qty']}}" />
                                                    <span class="las la-plus increaseQty changeQty"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="wh-tem-price">
                                            <?php 
                                                $subtotal = $cart['product_price'] * $cart['product_qty'];
                                                echo number_format($subtotal).' '.'vnd';
                                            ?>
                                        </p>
                                    </td>
                                    <td>
                                        <button type="button" ><a class="dlt_btn" href="{{URL::to('/delete-in-cart/')}}"><i class="las la-times"></i></a></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="checkout-details">
                        <div class="row mt-20">
                            
                            <div class="col-md-7 text-md-end">
                                <a href="shop" class="btn style1">Continue Shopping<i class="flaticon-right-arrow-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="checkout-details smt-30">
                        <div class="content-box-title">
                            <h4 class="mb-20">Total Bill</h4>
                        </div>
                        <div class="bill-details">
                            
                            <div class="total-wrap">
                                <h5>Total Amount</h5>
                                <span>{{number_format($total).' '.'vnd'}}</span>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <a href="{{URL::to('login-checkout')}}" class="btn style1 w-100 d-block">Proceed To Checkout<i class="lar la-check-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
