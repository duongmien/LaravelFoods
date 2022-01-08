@extends('layout')
@section('content')

<div class="content-wrapper">

<div class="breadcrumb-wrap bg-f br-1">
    <div class="overlay bg-black op-9"></div>
    <img src="{{('frontend/assets/img/shape-1.png')}}"  alt="Image" class="br-shape-1">
    <img src="{{('frontend/assets/img/shape-2.png')}}"  alt="Image" class="br-shape-2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb-title">
                    <h2>Checkout</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="index.html" >Home
                            </a></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="checkout-wrap ptb-100">
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
                            </tr>
                        </thead>
                        <tbody>
                            @if(Session::get('cart2'))
                            @php
                                $total = 0;
                            @endphp
                            @foreach(Session::get('cart2') as $key => $cart)
                            @php
                                $subtotal = $cart['product_price'] * $cart['product_qty'];
                                $total += $subtotal;
                            @endphp
                            <tr class="cartpage">
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
                                                <input type="text" class="qtyValue qtyinput" name="cart_quantity" value="{{$cart['product_qty']}}" disabled/>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="wh-tem-price subtotal">
                                        <?php 
                                            $subtotal = $cart['product_price'] * $cart['product_qty'];
                                            echo number_format($subtotal).' '.'vnd';
                                        ?>
                                    </p>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            @php
                                $total = 0;
                            @endphp
                            @foreach(Session::get('cart') as $key => $cart)
                            @php
                                $subtotal = $cart['product_price'] * $cart['product_qty'];
                                $total += $subtotal;
                            @endphp
                            <tr class="cartpage">
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
                                                <input type="text" class="qtyValue qtyinput" name="cart_quantity" value="{{$cart['product_qty']}}" disabled/>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="wh-tem-price subtotal">
                                        <?php 
                                            $subtotal = $cart['product_price'] * $cart['product_qty'];
                                            echo number_format($subtotal).' '.'vnd';
                                        ?>
                                    </p>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="checkout-form bg-wild-sand">
                <form role="form" action="{{URL::to('/save-checkout')}}" method="POST" >
                    @csrf  
                    <input type="hidden" name="token" value="{{ csrf_token() }}">
                    <input type="hidden" name="user_id" value="<?php
                    use Illuminate\Support\Facades\Session;
                    $user_id = Session::get('user_id');
                    if($user_id){
                        echo $user_id;
                    }
                    ?>">
                            
                    <h2 class="mb-0">Select Payment Method</h2>
                    <div class="select-method">
                        <div>
                            <input type="radio" id="test1" value="Cash On Delivery" checked name="payment_option">
                            <label for="test1">Cash On Delivery</label>
                        </div>
                        <div>
                            <input type="radio" id="test2" value="Card" name="payment_option">
                            <label for="test2">Card</label>
                        </div>
                        <div>
                            <input type="radio" id="test3" value="Momo" name="payment_option">
                            <label for="test3">Momo</label>
                        </div>
                    </div>
                    <div class="billing-details">
                        <h4 class="mb-20">Billing Details</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="shipping_name" placeholder="Your Name"  required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="number" name="shipping_phone" placeholder="Your Phone" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="shipping_email" value="" placeholder="Your Email Address" >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="shipping_address" placeholder="Your Address" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input placeholder="Write notes about your order" value=""  name="shipping_note" id="order_msg" cols="30" rows="10"></input>
                                </div>
                            </div>
                        </div>
                        <div class="row checkout-btn">
                            <div class="col-md-6 smb-20">
                                <h4 class="total-amt d-md-none smb-20">Total: <span>$243</span></h4>
                                <a href="shop"  class="btn style1">Continue Shopping<i
                                        class="flaticon-right-arrow-2"></i></a>
                            </div>
                            <div class="col-md-6 d-flex align-items-center justify-content-lg-end">
                                <h4 class="total-amt sm-none">Total: <span>{{number_format($total).' '.'vnd'}}</span></h4>
                                <input type="hidden" name="total" value="{{$total}}"></input>
                                <input type="submit" name="send_order" class="inph inhe" value="Place Order"></input>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
@endsection