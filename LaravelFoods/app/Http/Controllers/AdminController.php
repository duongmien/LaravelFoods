<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();

class AdminController extends Controller
{
    public function AuthLogin()
    {
        $admin_id = Session::get('user_id');
        if($admin_id && $admin_id==1){
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
        return view('admin.dashboard');
    }
    public function logout()
    {
        $this->AuthLogin();
        return view('admin.dashboard');
    }
}
