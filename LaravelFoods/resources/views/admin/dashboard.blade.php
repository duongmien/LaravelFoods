@extends('admin_layout')
@section('admin_content')
<div class="market-updates">
    <div class="col-md-3 market-update-gd">
        <a href="{{URL::to('/all-product')}}">
            <div class="market-update-block clr-block-2">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-dropbox"> </i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Product</h4>
                    <h3>{{($c_p)}}</h3>
                    <p>Other hand, we denounce</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </a>
    </div>
    <div class="col-md-3 market-update-gd">
        <a href="{{URL::to('/all-product')}}">
            <div class="market-update-block clr-block-1">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-usd"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Sold</h4>
                    <h3>{{($c_s)}}</h3>
                    <p>Other hand, we denounce</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </a>
    </div>
    <div class="col-md-3 market-update-gd">
        <a href="{{URL::to('/all-user')}}">
            <div class="market-update-block clr-block-3">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-users"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>User</h4>
                    <h3>{{($c_u)}}</h3>
                    <p>Other hand, we denounce</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </a>
    </div>
    <div class="col-md-3 market-update-gd">
        <a href="{{URL::to('/all-order')}}">
            <div class="market-update-block clr-block-4">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Orders</h4>
                    <h3>{{($c_o)}}</h3>
                    <p>Other hand, we denounce</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </a>
    </div>
    <div class="clearfix"> </div>
</div>
@endsection