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
        $total=$request->total;
        //Insert Shipping details
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_address'] = $request->shipping_address;
        $data['shipping_note'] = $request->shipping_note;

        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);

        //Insert Payment details
        $payment_data = array();
        $payment_data['payment_method'] = $request->payment_option;
        $payment_data['payment_status'] = 'Chưa giải quyết';

        $payment_id = DB::table('tbl_payment')->insertGetId($payment_data);

        //Insert Order 
        $order_data = array();
        $order_data['user_id'] = $request->user_id;
        $order_data['shipping_id'] = $shipping_id;
        $order_data['payment_id'] = $payment_id;
        $order_data['order_total'] = $total;
        $order_data['order_status'] = 'Chưa xét duyệt';
        $order_id = DB::table('tbl_order')->insertGetId($order_data);

        //Insert Order details
        if(Session::get('cart2'))
        {
            $cart2 = Session::get('cart2');
            foreach($cart2 as $session => $v_content){
                $order_d_data = array();
                $order_d_data['order_id'] = $order_id;
                $order_d_data['product_id'] = $v_content['product_id'];
                $order_d_data['product_name'] = $v_content['product_name'];
                $order_d_data['product_price'] = $v_content['product_price'];
                $order_d_data['product_sales_quantity'] = $v_content['product_qty'];
                DB::table('tbl_order_details')->insert($order_d_data);   
            }
            foreach($cart2 as $session => $val){
                unset($cart2[$session]);
            }
            Session::put('cart2',$cart2);
        }else{
            $cart = Session::get('cart');
            foreach($cart as $session => $v_content){
                $order_d_data = array();
                $order_d_data['order_id'] = $order_id;
                $order_d_data['product_id'] = $v_content['product_id'];
                $order_d_data['product_name'] = $v_content['product_name'];
                $order_d_data['product_price'] = $v_content['product_price'];
                $order_d_data['product_sales_quantity'] = $v_content['product_qty'];
                DB::table('tbl_order_details')->insert($order_d_data);   
            }
            foreach($cart as $session => $val){
                unset($cart[$session]);
            }
            Session::put('cart',$cart);
        }
        Session::put('message','Đặt hàng thành công!!\nĐơn hàng của bạn đang chờ người quản lý duyệt, vui lòng đợi trong giây lát.');
        return Redirect('/show-cart');
    }
    
    
}
