@extends('layout')
@section('content')
<?php
    use Illuminate\Support\Facades\Session;
    $message = Session::get('message');
    if($message){
        echo '<script>alert("'.$message.'");</script> ';
        Session::put('message',null);
    }
    ?>
<div class="content-wrapper">

    <div class="breadcrumb-wrap bg-f br-1">
        <div class="overlay bg-black op-9"></div>
        <img src="{{('frontend/assets/img/shape-1.png')}}" tppabs="https://templates.hibootstrap.com/caban/default/assets/img/shape-1.png"
            alt="Image" class="br-shape-1">
        <img src="{{('frontend/assets/img/shape-2.png')}}" tppabs="https://templates.hibootstrap.com/caban/default/assets/img/shape-2.png"
            alt="Image" class="br-shape-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-title">
                        <h2>Login</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="home"
                                    tppabs="https://templates.hibootstrap.com/caban/default/index.html">Home
                                </a></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <section class="login-wrap pt-100 pb-100">
        <img src="{{('frontend/assets/img/shape-1.png')}}" tppabs="https://templates.hibootstrap.com/caban/default/assets/img/shape-1.png"
            alt="Image" class="login-shape-1">
        <img src="{{('frontend/assets/img/shape-2.png')}}" tppabs="https://templates.hibootstrap.com/caban/default/assets/img/shape-2.png"
            alt="Image" class="login-shape-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                    <div class="login-form">
                        <div class="login-header bg-green">
                            <h2 class="text-center mb-0">Login</h2>
                        </div>
                        <div class="login-body">
                        
                            <form class="form-wrap" action="{{URL::to('/check-login')}}"  method="post">
                            @csrf   
                            <input type="hidden" name="token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email">Username</label>
                                            <input id="email" name="username" type="text"
                                                placeholder="Username" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="pwd">Password</label>
                                            <input id="pwd" name="password" type="password" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form_group mb-20">
                                            <input type="checkbox" id="test_1">
                                            <label for="test_1">Remember Me</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 text-md-end mb-20">
                                        <a href="forgot-pwd"
                                            tppabs="https://templates.hibootstrap.com/caban/default/forgot-pwd.html"
                                            class="link style2">Forgot Password?</a>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <button class="btn style1 w-100 d-block">Log In </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="or-text">
                                            <p>Or Login With</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <ul class="social-profile style3 text-center mt-0 list-style">
                                                <li><a target="_blank"
                                                        href="javascript:if(confirm(%27https://instagram.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://instagram.com/%27"
                                                        tppabs="https://instagram.com/"><i
                                                            class="lab la-instagram"></i></a></li>
                                                <li><a target="_blank"
                                                        href="javascript:if(confirm(%27https://twitter.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://twitter.com/%27"
                                                        tppabs="https://twitter.com/"><i
                                                            class="lab la-twitter"></i></a></li>
                                                <li><a target="_blank"
                                                        href="javascript:if(confirm(%27https://facebook.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://facebook.com/%27"
                                                        tppabs="https://facebook.com/"><i
                                                            class="lab la-facebook-f"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <p class="mb-0">Don’t Have an Account? <a class="link style2"
                                                href="register"
                                                tppabs="https://templates.hibootstrap.com/caban/default/register.html">Create
                                                One</a></p>
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