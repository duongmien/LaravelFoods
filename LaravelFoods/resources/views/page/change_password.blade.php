@extends('layout')
@section('content')
<?php
    use Illuminate\Support\Facades\Session;
    $message = Session::get('message');
    if($message){
        echo '<script>alert("'.$message.'");</script> ';
        Session::put('message',null);
    $user_id = Session::get('user_id');

    }
    ?>
<div class="content-wrapper">

    <div class="breadcrumb-wrap bg-f br-1">
        <div class="overlay bg-black op-9"></div>
        <img src="{{asset('frontend/assets/img/shape-1.png')}}" tppabs="https://templates.hibootstrap.com/caban/default/assets/img/shape-1.png"
            alt="Image" class="br-shape-1">
        <img src="{{asset('frontend/assets/img/shape-2.png')}}" tppabs="https://templates.hibootstrap.com/caban/default/assets/img/shape-2.png"
            alt="Image" class="br-shape-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-title">
                        <h2>Change Password</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="home"
                                    tppabs="https://templates.hibootstrap.com/caban/default/index.html">Home
                                </a></li>
                            <li>Change Password</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="login-wrap pt-100 pb-100">
        <img src="{{asset('frontend/assets/img/shape-1.png')}}" tppabs="https://templates.hibootstrap.com/caban/default/assets/img/shape-1.png"
            alt="Image" class="login-shape-1">
        <img src="{{asset('frontend/assets/img/shape-2.png')}}" tppabs="https://templates.hibootstrap.com/caban/default/assets/img/shape-2.png"
            alt="Image" class="login-shape-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                    <div class="login-form">
                        <div class="login-header bg-green">
                            <h2 class="text-center mb-0">Change Password</h2>
                        </div>
                        <div class="login-body">
                        
                            <form class="form-wrap" action="{{URL::to('/check-change')}}"  method="post">
                            @csrf   
                            <input type="hidden" name="token" value="{{ csrf_token() }}">
                            <input type="hidden" name="user_id" value="{{($user_id)}}">
                                <div class="row">
                                <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="pwd">Old Password</label>
                                            <input id="pwd" name="old_password" type="password" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="pwd">New Password</label>
                                            <input id="pwd" name="new_password" type="password" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="pwd">Confirm Password</label>
                                            <input id="pwd" name="cfm_password" type="password" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <button class="btn style1 w-100 d-block">Confirm</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection