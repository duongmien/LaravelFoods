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
                            <input type="radio" id="test1" value="1" name="payment_option">
                            <label for="test1">Cash On Delivery</label>
                        </div>
                        <div>
                            <input type="radio" id="test2" value="2" name="payment_option">
                            <label for="test2">Card</label>
                        </div>
                        <div>
                            <input type="radio" id="test3" value="3" name="payment_option">
                            <label for="test3">Momo</label>
                        </div>
                    </div>
                    <div class="billing-details">
                        <h4 class="mb-20">Billing Details</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="shipping_name" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="number" name="shipping_phone" placeholder="Your Phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="shipping_email" placeholder="Your Email Address">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="shipping_address" placeholder="Your Address">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input placeholder="Write notes about your order "  name="shipping_note" id="order_msg" cols="30" rows="10"></input>
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
                                <h4 class="total-amt sm-none">Total: <span>$243</span></h4>
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