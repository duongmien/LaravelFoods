@extends('layout')
@section('content')

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
                        <?php
                        use Gloudemans\Shoppingcart\Facades\Cart;
                        $content = Cart::content();
                        // echo '<pre>'; print_r($content);echo'</pre>';
                        ?>
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
                                @foreach($content as $v_content)
                                <tr>
                                    <td>
                                        <div class="wh_item">
                                            <img src="{{URL::to('uploads/product/'.$v_content->options->image)}}"  height="100px" width="100px"  alt="Image">
                                            <div class="wh-item-info">
                                                <a href="{{URL::to('/product-detail/'.$v_content->id)}}">{{$v_content->name}}</a>
                                                <p>{{$v_content->options->desc}}</p>
                                                <span><?php echo $v_content->price/1000?>.000 vnd</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                    <form role="form" action="{{URL::to('/update-cart-quantity')}}" method="POST" >
                                        @csrf  
                                        <input type="hidden" name="token" value="{{ csrf_token() }}">
                                        <div class="wh_qty">
                                            <div class="product-quantity style2">
                                                <div class="qtySelector">
                                                    <span class="las la-minus decreaseQty"></span>
                                                    <input type="text" class="qtyValue" name="cart_quantity" value="{{$v_content->qty}}" />
                                                    <span class="las la-plus increaseQty"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <input value="{{$v_content->rowId}}" type="hidden" name="rowId_cart"  class=" form-control">
                                        <input value="Update" type="submit" name="update_qty"  class=" inph">
                                    </form>
                                    </td>
                                    <td>
                                        <p class="wh-tem-price">
                                            <?php 
                                                $subtotal = $v_content->price * $v_content->qty;
                                                echo number_format($subtotal).' '.'vnd';
                                            ?>
                                        </p>
                                    </td>
                                    <td>
                                        <button type="button" ><a class="dlt_btn" href="{{URL::to('/delete-in-cart/'.$v_content->rowId)}}"><i class="las la-times"></i></a></button>
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
                            <div class="subtotal-wrap">
                                <div class="subtotal-item">
                                    <div class="subtotal-item-left">
                                        <h6>Subtotal</h6>
                                    </div>
                                    <div class="subtotal-item-right">
                                        <span>{{(Cart::total()).' '.'vnd'}}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="total-wrap">
                                <h5>Total Amount</h5>
                                <span>{{(Cart::total()).' '.'vnd'}}</span>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <a href="{{URL::to('login')}}" class="btn style1 w-100 d-block">Proceed To Checkout<i class="lar la-check-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
