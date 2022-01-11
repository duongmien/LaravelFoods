@extends('layout')
@section('content')
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
                        <h2>Edit information</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <section class="login-wrap pt-100 pb-100">
        <img src="{{URL::to('frontend/assets/img/shape-1.png')}}" tppabs="https://templates.hibootstrap.com/caban/default/assets/img/shape-1.png"
            alt="Image" class="login-shape-1">
        <img src="{{URL::to('frontend/assets/img/shape-2.png')}}" tppabs="https://templates.hibootstrap.com/caban/default/assets/img/shape-2.png"
            alt="Image" class="login-shape-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                    <div class="login-form">
                        <div class="login-body">
                        
                            <form class="form-wrap" action="{{URL::to('/check-login')}}"  method="post">
                            @csrf   
                            <input type="hidden" name="token" value="{{ csrf_token() }}">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email">Name</label>
                                            <input id="email" name="username" type="text"
                                                placeholder="Username" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email">Name</label>
                                        

                                        <div class="select-method">
                                            <div>
                                                <input type="radio" id="sex1" value="male" checked name="sex">
                                                <label for="sex1">Male</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="sex2" value="female" name="sex">
                                                <label for="sex2">Female</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="sex3" value="other" name="sex">
                                                <label for="sex3">Other</label>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email">Address</label>
                                            <input id="email" name="username" type="text"
                                                placeholder="Username" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input id="email" name="username" type="text"
                                                placeholder="Username" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <button class="btn style1 w-100 d-block">Save</button>
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