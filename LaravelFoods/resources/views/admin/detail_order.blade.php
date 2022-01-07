@extends('admin_layout')
@section('admin_content')
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
                            
                            @php
                                $total = 0;
                            @endphp
                            @foreach($listfood as $key => $cart)
                            <tr class="cartpage">
                                <td>
                                    <div class="wh_item">
                                        <img src="{{URL::to('uploads/product/'.$cart->product_image)}}"  height="100px" width="100px"  alt="Image">
                                        <div class="wh-item-info">
                                            <a href="{{URL::to('/product-detail/'.$cart->product_id)}}">{{$cart->product_name}}</a>
                                            <p class="discount"><?php echo $cart->product_price/1000+30?>.000 vnd</p>
                                            <span><?php echo $cart->product_price/1000?>.000 vnd</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="wh_qty">
                                        <div class="product-quantity style2">
                                            <div class="qtySelector">
                                                <input type="text" class="qtyValue qtyinput" name="cart_quantity" value="{{$cart->product_sales_quantity}}" />
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="wh-tem-price subtotal">
                                        <?php 
                                            $subtotal = $cart->product_price * $cart->product_sales_quantity;
                                            echo number_format($subtotal).' '.'vnd';
                                        ?>
                                    </p>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
