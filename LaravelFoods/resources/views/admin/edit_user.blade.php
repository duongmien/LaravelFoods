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
                EDIT USER
            </header>

            <div class="panel-body">
                @foreach($edit_user as $key => $edit_value)
                <div class="position-center">
                    <form role="form" action="{{URL::to('/update-user/'.$edit_value->user_id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input type="text" value="{{ $edit_value->name}}" name="name" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Username</label>
                            <input type="text" value="{{ $edit_value->username}}" name="username" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Sex</label>
                            <select name="user_sex" class="form-control input-sm m-bot15">
                                @foreach($edit_user as $key => $cate)
                                @if($cate->user_id==$edit_value->user_id)
                                <option selected value="{{$cate->user_id}}">
                                    {{$cate->user_sex}}
                                </option>
                                @else
                                <option value="{{$cate->user_id}}">{{$cate->user_sex}}</option>
                                @endif
                                @endforeach
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Phone number</label>
                            <input type="text" name="user_tel" class="form-control" id="exampleInputEmail1" value="{{ $edit_value->user_tel}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Address</label>
                            <input type="text" name="user_address" class="form-control" id="exampleInputEmail1" value="{{ $edit_value->user_address}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputEmail1" value="{{ $edit_value->password}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="text" name="user_email" class="form-control" id="exampleInputEmail1" value="{{ $edit_value->user_email}}"">
                        </div>
                        <div class=" form-group">
                            <label for="exampleInputPassword1">Role</label>
                            <select name="role_id" class="form-control input-sm m-bot15">
                                @foreach($edit_user as $key => $cate)
                                @if($cate->user_id==$edit_value->user_id)
                                <option selected value="{{$cate->user_id}}">
                                    <?php
                                    if ($cate->role_id == 1) {
                                        echo "Admin";
                                    } else {
                                        echo ("Customer");
                                    }
                                    ?>
                                </option>
                                @else
                                <option value="{{$cate->user_id}}">{{$cate->role_id}}</option>
                                @endif
                                @endforeach
                                <option value="1">Admin</option>
                                <option value="2">Customer</option>
                            </select>
                        </div>
                        <button type="submit" name="update_category_product" class="btn btn-info">Cập nhật danh mục</button>
                    </form>
                </div>
                @endforeach
            </div>
        </section>

    </div>
</div>
@endsection