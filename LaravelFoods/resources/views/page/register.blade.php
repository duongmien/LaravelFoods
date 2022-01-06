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
                        <h2>Register</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="home">Home
                                </a></li>
                            <li>Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="login-wrap pt-100 pb-100">
        <img src="{{URL::to('frontend/assets/img/shape-1.png')}}"  alt="Image" class="login-shape-1">
        <img src="{{URL::to('frontend/assets/img/shape-2.png')}}"  alt="Image" class="login-shape-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                    <div class="login-form">
                        <div class="login-header bg-green">
                            <h2 class="text-center mb-0">Register</h2>
                        </div>
                        <div class="login-body">
                            <form class="form-wrap" action="{{URL::to('/add-user')}}" method="POST" >
                                <div class="row">
                                    @csrf 
                                    <input type="hidden" name="token" value="{{ csrf_token() }}">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email">Full Name</label>
                                            <input id="name" name="name" type="text" placeholder="Full name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="Username">Username</label>
                                            <input id="Username" name="username" type="text" placeholder="Username" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="pwd">Password</label>
                                            <input id="pwd" name="pwd" type="password" placeholder="Password"required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="pwd">Confirm Password</label>
                                            <input id="pwd_2" name="pwd_2" type="password" placeholder="Confirm Password"required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <button class="btn style1 w-100 d-block">Register</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="or-text">
                                            <p>Or Register With</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <ul class="social-profile style3 text-center mt-0 list-style">
                                                <li><a target="_blank" href="javascript:if(confirm(%27https://instagram.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://instagram.com/%27"
                                                        ><i class="lab la-instagram"></i></a></li>
                                                <li><a target="_blank" href="javascript:if(confirm(%27https://twitter.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://twitter.com/%27"
                                                        ><i
                                                            class="lab la-twitter"></i></a></li>
                                                <li><a target="_blank" href="javascript:if(confirm(%27https://facebook.com/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27https://facebook.com/%27"
                                                        ><i
                                                            class="lab la-facebook-f"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <p class="mb-0">Already Have an Account? <a class="link style2" href="{{URL::to('login')}}">Login</a>
                                        </p>
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