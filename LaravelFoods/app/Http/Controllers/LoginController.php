<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function check_login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $result = DB::table('tbl_user')->where('username',$username)->where('password',$password)->first();
        if($result->role_id==1){
            return view('admin.dashboard');
        }else{
            return view('page.home');
        }
    }
}
