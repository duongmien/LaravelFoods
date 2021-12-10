@extends('admin_layout')
@section('admin_content')
<?php

use Illuminate\Support\Facades\Session;

$message = Session::get('message');
if ($message) {

    echo '<script>alert("' . $message . '");</script> ';
    Session::put('message', null);
}
?>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Management User
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form" action="{{URL::to('/save-user')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter your full name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter your user name"  >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Sex</label>
                            <select name="user_sex" class="form-control input-sm m-bot15">
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone number</label>
                            <input type="text" name="user_tel" class="form-control" id="exampleInputEmail1" placeholder="Enter your phone number">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address</label>
                            <input type="text" name="user_address" class="form-control" id="exampleInputEmail1" placeholder="Enter your address">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter your password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="text" name="user_email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Role</label>
                            <select name="role_id" class="form-control input-sm m-bot15">
                                <option value="1">Admin</option>
                                <option value="2">Khách Hàng</option>
                            </select>
                        </div>
                        <button type="submit" name="add_user" class="btn btn-info">Add user</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection