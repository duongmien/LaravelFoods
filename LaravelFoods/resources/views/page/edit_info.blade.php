@extends('layout')
@section('content')
<?php

use Illuminate\Support\Facades\Session;

$message = Session::get('message');
if ($message) {

    echo '<script>alert("' . $message . '");</script> ';
    Session::put('message', null);
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
                        
                            <form role="form" action="{{URL::to('/update-info/'.$user->user_id)}}" method="POST">
                                @csrf
                                <input type="hidden" name="token" value="{{ csrf_token() }}">
                                    <div class="row">
                                   <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="fullname">Fullname</label>
                                            <input id="fullname" name="fullname" type="text"
                                                placeholder="Fullname" value="{{$user->name}}" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email">Sex</label>
                                        <div class="select-method">
                                            @if($user->user_sex=='Male')
                                            <div>
                                                <input type="radio" id="sex1" value="Male" checked name="sex">
                                                <label for="sex1">Male</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="sex2" value="Female" name="sex">
                                                <label for="sex2">Female</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="sex3" value="Other" name="sex">
                                                <label for="sex3">Other</label>
                                            </div>
                                            @elseif($user->user_sex=='Female')
                                            <div>
                                                <input type="radio" id="sex1" value="Male"  name="sex">
                                                <label for="sex1">Male</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="sex2" value="Female" checked name="sex">
                                                <label for="sex2">Female</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="sex3" value="Other" name="sex">
                                                <label for="sex3">Other</label>
                                            </div>
                                            @else
                                            <div>
                                                <input type="radio" id="sex1" value="Male"  name="sex">
                                                <label for="sex1">Male</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="sex2" value="Female" name="sex">
                                                <label for="sex2">Female</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="sex3" value="Other" checked name="sex">
                                                <label for="sex3">Other</label>
                                            </div>
                                            @endif
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="telephone">Telephone</label>
                                            <input id="telephone" name="telephone" type="number"
                                                placeholder="Telephone" value="{{$user->user_tel}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input id="address" name="address" type="text"
                                                placeholder="Address" value="{{$user->user_address}}">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input id="email" name="email" type="text"
                                                placeholder="Email" value="{{$user->user_email}}">
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