<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();

class AdminController extends Controller
{
    public function AuthLogin()
    {
        $admin_id = Session::get('user_id');
        $role_id = Session::get('role_id');
        if($admin_id && $role_id==1){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('login')->send();
        }
    }

    public function index()
    {
        return view('login');
    }
    public function show_dashboard()
    {
        $this->AuthLogin();
        $c_p = DB::table('tbl_product')->where('product_status','1')->count();
        $c_s = DB::table('tbl_product')->sum('product_sold');
        $c_u = DB::table('tbl_user')->count();
        $c_o = DB::table('tbl_order')->count();

        return view('admin.dashboard')->with('c_p',$c_p)->with('c_s',$c_s)->with('c_u',$c_u)->with('c_o',$c_o);
    }
}
