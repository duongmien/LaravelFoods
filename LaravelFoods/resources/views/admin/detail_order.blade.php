@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info" >
        <a href="{{URL::to('/approves-order/'.Session::get('order_id'))}}" class="btn btn-success  ">Approve Order</a>
        <button type="button" class="btn btn-danger delete-order-2">Delete</button>
        <a href="{{URL::to('/print-order/'.Session::get('order_id'))}}" target="_blank" class="btn btn-default ">Print Order</a>

    <div class="panel panel-default orderLoad" >
        <div class="panel-heading">
            Login information
        </div>
        <div class="table-responsive ">
        <table class="table table-striped b-t b-light" >
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach($user as $key  => $u)
                    <tr class="cartpage">
                        <td>
                            <p class="wh-tem-price subtotal">{{$u->name}}</p>
                        </td>
                        <td>
                            <p class="wh-tem-price subtotal">{{$u->user_tel}}</p>
                        </td>
                        <td>
                            <p class="wh-tem-price subtotal">{{$u->user_email}}</p>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="panel panel-default orderLoad" >
        <div class="panel-heading">
            Shipping Information
        </div>
        <div class="table-responsive ">
            <table class="table table-striped b-t b-light" >
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Note</th>
                        <th>Payment Method</th>
                        <th>Status</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach($order as $key => $o)
                    <tr class="cartpage orderpage">
                        <td>
                            <input type="hidden" class="order_id" value="{{$o->order_id}}">
                            <p class="wh-tem-price subtotal">{{$o->shipping_name}}</p>
                        </td>
                        <td>
                            <p class="wh-tem-price subtotal">{{$o->shipping_address}}</p>
                        </td>
                        <td>
                            <p class="wh-tem-price subtotal">{{$o->shipping_phone}}</p>
                        </td>
                        <td>
                            <p class="wh-tem-price subtotal">{{$o->shipping_email}}</p>
                        </td>
                        <td>
                            <p class="wh-tem-price subtotal">{{$o->shipping_note}}</p>
                        </td>
                        <td>
                            <p class="wh-tem-price subtotal">{{$o->payment_method}}</p>
                        </td>
                        <td>
                            <p class="wh-tem-price subtotal">{{$o->payment_status}}</p>
                        </td>
                        <td>
                            <p class="wh-tem-price subtotal">{{$o->date}}</p>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="panel panel-default orderLoad" >
        <div class="panel-heading">
            Order Detail
        </div>
        <div class="table-responsive ">
            <table class="table table-striped b-t b-light" >
                <thead>
                    <tr>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody >
                    @php
                        $total = 0;
                    @endphp
                    @foreach($listfood as $key => $cart)
                    @php
                        $subtotal = $cart->product_price * $cart->product_sales_quantity;
                        $total += $subtotal;
                    @endphp
                    <tr class="cartpage">
                        <td>
                            <div class="wh_item">
                                <img src="{{URL::to('uploads/product/'.$cart->product_image)}}"  height="80px" width="80px"  alt="Image">
                                <div class="wh-item-info">
                                    <span></span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="wh_qty">
                                <div class="product-quantity style2">
                                    <div class="qtySelector">
                                        <a href="{{URL::to('/product-detail/'.$cart->product_id)}}">{{$cart->product_name}}</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="wh-tem-price subtotal">
                                <?php echo $cart->product_price/1000?>.000 vnd
                            </p>
                        </td>
                        <td>
                            <p class="wh-tem-price subtotal">
                                <?php echo $cart->product_sales_quantity?>
                            </p>
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
                    <tr class="cartpage">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><p class="wh-tem-price subtotal">Total</p></td>
                        <td>
                            <p class="wh-tem-price subtotal">{{number_format($total).' '.'vnd'}}</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
