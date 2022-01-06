<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
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

    public function all_order(){
        $this->AuthLogin();
        $all_order = DB::table('tbl_order')->join('tbl_shipping','tbl_shipping.shipping_id','=','tbl_order.shipping_id')->join('tbl_payment','tbl_payment.payment_id','=','tbl_order.payment_id')->orderBy('tbl_order.order_id','desc')->get();
        $manager_order = view('admin.all_order')->with('all_order',$all_order);
        return view('admin_layout')->with('admin.all_order', $manager_order);
    }

}
