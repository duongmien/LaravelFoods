<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Gloudemans\Shoppingcart\Facades\Cart;
session_start();

class CheckoutController extends Controller
{
    public function index()
    {
        return view('page.checkout');
    }
    public function save_checkout(Request $request)
    {
        $data = array();
        $data['user_id'] = $request->user_id;
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_address'] = $request->shipping_address;
        $data['shipping_note'] = $request->shipping_note;

        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);

        Session::put('shipping_id',$shipping_id);
        Session::put('message','Đặt hàng thành công!!\nĐơn hàng của bạn đang chờ người quản lý duyệt, vui long đợi trong giây lát.');
        return Redirect('/show-cart');
    }
    public function login_checkout()
    {
        $user_id = Session::get('user_id');
        if($user_id){
            return Redirect::to('checkout');
        }else{
            return Redirect::to('login');
        }
    }
    
    
}
