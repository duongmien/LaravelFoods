<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Gloudemans\Shoppingcart\Facades\Cart;
session_start();

class CartController extends Controller
{
    public function save_cart(Request $request){

        $product_id = $request->product_id_hidden;

        $quanlity = $request->qty;

        $profuct_info = DB::table('tbl_product')->where('product_id',$product_id)->first();
        // Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        // Cart::destroy();
        $data['id'] = $profuct_info->product_id;
        $data['qty'] = $quanlity;
        $data['name'] = $profuct_info->product_name;
        $data['price'] = $profuct_info->product_price;
        $data['weight'] = '0';
        $data['options']['desc'] = $profuct_info->product_desc;
        $data['options']['image'] = $profuct_info->product_image;
        Cart::add($data);
        return Redirect::to('/show-cart');
    }
    public function add_cart_ajax(Request $request){
        $data = $request->all();
        $session_id = substr(md5(microtime()),rand(0,26),5);
        $cart = Session::get('cart2');
        if($cart!=null){
            $is_available = 0;
            foreach($cart as $key => $val){
                if($val['product_id']==$data['cart_product_id']){
                    $is_available++;
                }
            }
            if($is_available==0){
                $cart[] = array(
                    'sesstion_id' => $session_id,
                    'product_id' => $data['cart_product_id'],
                    'product_name' => $data['cart_product_name'],
                    'product_image' => $data['cart_product_image'],
                    'product_qty' => $data['cart_product_qty'],
                    'product_price' => $data['cart_product_price'],
                );
                Session::put('cart2',$cart);
            }
        }else{
            $cart[] = array(
                'sesstion_id' => $session_id,
                'product_id' => $data['cart_product_id'],
                'product_name' => $data['cart_product_name'],
                'product_image' => $data['cart_product_image'],
                'product_qty' => $data['cart_product_qty'],
                'product_price' => $data['cart_product_price'],
            );

        }
        Session::put('cart2',$cart);
        Session::save();

        print_r($cart);

    }
    public function show_cart(Request $request){



        return view('page.cart_ajax');

    }
    public function delete_in_cart($rowId){
        
        Cart::remove($rowId,1);
        return Redirect::to('/show-cart');

    }
    public function update_cart_quantity(Request $request){
        
        $rowId = $request->rowId_cart;
        $qty = $request->cart_quantity;
        Cart::update($rowId,$qty);
        return Redirect::to('/show-cart');

    }
}
