<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Barryvdh\DomPDF\PDF;
class OrderController extends Controller
{

    public function print_order($checkout_code)
    {
        $pdf = app('dompdf.wrapper');
        $pdf->loadHTML($this->print_order_convert($checkout_code));
        return $pdf->stream();
    }
    public function print_order_convert($checkout_code)
    {
        $order = DB::table('tbl_order')->where('order_id',$checkout_code)->join('tbl_shipping','tbl_shipping.shipping_id','=','tbl_order.shipping_id')->join('tbl_payment','tbl_payment.payment_id','=','tbl_order.payment_id')->orderBy('tbl_order.order_id','desc')->get();
        $listfood = DB::table('tbl_order_details')->where('order_id',$checkout_code)->join('tbl_product','tbl_product.product_id','=','tbl_order_details.product_id')->get();
        $user = DB::table('tbl_user')->where('user_id',$order[0]->user_id)->get();
        return view('admin.invoice')->with('order',$order)->with('listfood',$listfood)->with('user',$user);
        
        
    }
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
    public function delete_order(Request $request){
        $this->AuthLogin();
        $order_id = $request->input('order_id');
        $order = DB::table('tbl_order')->where('order_id',$order_id)->first();
        $shipping_id = $order->shipping_id;
        $payment_id = $order->payment_id;
        DB::table('tbl_order')->where('order_id',$order_id)->delete();
        DB::table('tbl_shipping')->where('shipping_id',$shipping_id)->delete();
        DB::table('tbl_payment')->where('payment_id',$payment_id)->delete();
        DB::table('tbl_order_details')->where('order_id',$order_id)->delete();
        return redirect::to('all-order');
    }
    public function detail_order($order_id){
        $this->AuthLogin();
        $order = DB::table('tbl_order')->where('order_id',$order_id)->join('tbl_shipping','tbl_shipping.shipping_id','=','tbl_order.shipping_id')->join('tbl_payment','tbl_payment.payment_id','=','tbl_order.payment_id')->orderBy('tbl_order.order_id','desc')->get();
        $listfood = DB::table('tbl_order_details')->where('order_id',$order_id)->join('tbl_product','tbl_product.product_id','=','tbl_order_details.product_id')->get();
        $user = DB::table('tbl_user')->where('user_id',$order[0]->user_id)->get();
        $detail_order = view('admin.detail_order')->with('order',$order)->with('listfood',$listfood)->with('user',$user);
        // echo "<pre>";
        // print_r($order); 
        // // print_r($listfood); 
        // // print_r($user); 
        // echo "</pre>";
        Session::put('order_id',$order_id);
        return view('admin_layout')->with('admin.detail_order', $detail_order);
    }
    public function approves_order($order_id){
        $this->AuthLogin();
        $ord =  DB::table('tbl_order')->where('order_id',$order_id)->get();
        if($ord[0]->order_status!='Đã xét duyệt'){
            DB::table('tbl_order')->where('order_id',$order_id)->update(['order_status'=>'Đã xét duyệt']);
            $listfood = DB::table('tbl_order_details')->where('order_id',$order_id)->join('tbl_product','tbl_product.product_id','=','tbl_order_details.product_id')->get();
            foreach($listfood as $session => $pro){
                $product_id = $pro->product_id;
                $user = DB::table('tbl_product')->where('product_id',$product_id)->get();
                $sold = $user[0]->product_sold + $pro->product_sales_quantity;
                DB::table('tbl_product')->where('product_id',$product_id)->update(['product_sold'=>$sold]);   
            }
        }
        return redirect::to('all-order');
    }
}
