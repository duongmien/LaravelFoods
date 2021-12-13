<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class RegisterController extends Controller
{
    public function index()
    {
        return view('page.register');
    }
    public function add_user(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['username'] = $request->username;
        $data['password'] = $request->pwd;
        $data['role_id'] = '2';

        $user_id = DB::table('tbl_user')->insertGetId($data);

        Session::put('user_id',$user_id);
        Session::put('name',$request->name);
        Session::put('message','Đăng ký thành công!!!\nMời bạn đăng nhập');
        return Redirect('/login');
    }
}
