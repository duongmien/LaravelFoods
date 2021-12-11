@extends('layout')
@section('content')

<div class="content-wrapper">

    <div class="breadcrumb-wrap bg-f br-1">
        <div class="overlay bg-black op-9"></div>
        <img src="shape-1.png" tppabs="https://templates.hibootstrap.com/caban/default/assets/img/shape-1.png" alt="Image" class="br-shape-1">
        <img src="shape-2.png" tppabs="https://templates.hibootstrap.com/caban/default/assets/img/shape-2.png" alt="Image" class="br-shape-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-title">
                        <h2>Cart</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="index.html" tppabs="https://templates.hibootstrap.com/caban/default/index.html">Home </a></li>
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
                                            <img src="{{URL::to('uploads/product/'.$v_content->options->image)}}"  alt="Image">
                                            <div class="wh-item-info">
                                                <a href="shop-details.html">{{$v_content->name}}</a>
                                                <p>{{$v_content->options->desc}}</p>
                                                <span><?php echo $v_content->price/1000?>.000 vnd</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="wh_qty">
                                            <div class="product-quantity style2">
                                                <div class="qtySelector">
                                                    <span class="las la-minus decreaseQty"></span>
                                                    <input type="text" class="qtyValue" value="1" />
                                                    <span class="las la-plus increaseQty"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="wh-tem-price">$32.00</p>
                                    </td>
                                    <td>
                                        <button type="button"><i class="las la-times"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="checkout-details">
                        <div class="content-box-title">
                            <h4 class="mb-20">Coupon Code</h4>
                        </div>
                        <div class="bill-details">
                            <div class="subtotal-wrap">
                                <div class="subtotal-item">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, hic. Libero non minima harum ducimus.</p>
                                    <div class="form-group mb-0 w-100">
                                        <input class="w-100" type="text" placeholder="Enter code here">
                                        <button type="submit">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-20">
                            <div class="col-md-5">
                                <a href="cart.html" tppabs="https://templates.hibootstrap.com/caban/default/cart.html" class="btn style1">Update Cart<i class="las la-redo-alt"></i></a>
                            </div>
                            <div class="col-md-7 text-md-end">
                                <a href="shop-left-sidebar.html" tppabs="https://templates.hibootstrap.com/caban/default/shop-left-sidebar.html" class="btn style1">Continue Shopping<i class="flaticon-right-arrow-2"></i></a>
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
                                        <span>$106.00</span>
                                    </div>
                                </div>
                                <div class="subtotal-item">
                                    <div class="subtotal-item-left">
                                        <p>Shipping Charge</p>
                                    </div>
                                    <div class="subtotal-item-right">
                                        <p>$0.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="total-wrap">
                                <h5>Total Amount</h5>
                                <span>$106.00</span>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-3">
                            <a href="checkout.html" tppabs="https://templates.hibootstrap.com/caban/default/checkout.html" class="btn style1 w-100 d-block">Proceed To Checkout<i class="lar la-check-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
