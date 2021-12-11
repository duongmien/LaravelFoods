<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CartController extends Controller
{
    public function save_cart(Request $request){

        $product_id = $request->product_id_hidden;
        $quanlity = $request->qty;

        $data = DB::table('tbl_product')->where('product_id',$product_id)->get();
        return view('page.cart');
    }
}
