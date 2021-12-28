<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class LoginController extends Controller
{
    public function index()
    {
        return view('page.login');
    }

    public function check_login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $result = DB::table('tbl_user')->where('username',$username)->where('password',$password)->first();
        if($result){
            if($result->role_id==1){
                Session::put('name',$result->name);
                Session::put('user_id',$result->user_id);
                Session::put('role_id',$result->role_id);
                return Redirect::to('/dashboard');
            }else if($result->role_id==2){
                    Session::put('name',$result->name);
                    Session::put('user_id',$result->user_id);
                    Session::put('message','Đăng nhập thành công!!!');
                    return Redirect::to('/home');
            }
        }else{
            Session::put('message','Incorrect account or password!!!');
            return Redirect::to('/login');
        }
    }
    public function logout()
    {
        Session::put('name',null);
        Session::put('user_id',null);
        return Redirect::to('/login');
    }
}
