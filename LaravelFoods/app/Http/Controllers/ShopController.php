<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class ShopController extends Controller
{
    public function index()
    {
        $category_product = DB::table('tbl_category_product')->where('category_status','1')->orderBy('category_id','desc')->get();

        $all_product = DB::table('tbl_product')->where('product_status','1')->orderBy('product_sold','desc')->get();

        $m1 = DB::table('tbl_product')->where('product_status','1')->where('product_price','<',100000)->count();
        $m2 = DB::table('tbl_product')->where('product_status','1')->where('product_price','>',100000)->where('product_price','<',150000)->count();
        $m3 = DB::table('tbl_product')->where('product_status','1')->where('product_price','>',150000)->where('product_price','<',200000)->count();
        $m4 = DB::table('tbl_product')->where('product_status','1')->where('product_price','>',200000)->where('product_price','<',500000)->count();
        $m5 = DB::table('tbl_product')->where('product_status','1')->where('product_price','>',500000)->count();
        Session::put('m1',$m1);
        Session::put('m2',$m2);
        Session::put('m3',$m3);
        Session::put('m4',$m4);
        Session::put('m5',$m5);
        return view('page.shop_content')->with('category',$category_product)->with('product',$all_product);
    }
    public function search(Request $request)
    {
        $m1 = DB::table('tbl_product')->where('product_status','1')->where('product_price','<',100000)->count();
        $m2 = DB::table('tbl_product')->where('product_status','1')->where('product_price','>',100000)->where('product_price','<',150000)->count();
        $m3 = DB::table('tbl_product')->where('product_status','1')->where('product_price','>',150000)->where('product_price','<',200000)->count();
        $m4 = DB::table('tbl_product')->where('product_status','1')->where('product_price','>',200000)->where('product_price','<',500000)->count();
        $m5 = DB::table('tbl_product')->where('product_status','1')->where('product_price','>',500000)->count();
        Session::put('m1',$m1);
        Session::put('m2',$m2);
        Session::put('m3',$m3);
        Session::put('m4',$m4);
        Session::put('m5',$m5);
        $key = $request->keywords;
        $category_product = DB::table('tbl_category_product')->where('category_status','1')->orderBy('category_id','desc')->get();
        $search_product = DB::table('tbl_product')->where('product_status','1')->where('product_name','like','%'.$key.'%')->orWhere('product_content','like','%'.$key.'%')->orWhere('product_desc','like','%'.$key.'%')->orderBy('product_sold','desc')->get();

        return view('page.search')->with('category',$category_product)->with('product',$search_product);
    }
    public function price_filter(Request $request)
    {
        $m1 = DB::table('tbl_product')->where('product_status','1')->where('product_price','<',100000)->count();
        $m2 = DB::table('tbl_product')->where('product_status','1')->where('product_price','>',100000)->where('product_price','<',150000)->count();
        $m3 = DB::table('tbl_product')->where('product_status','1')->where('product_price','>',150000)->where('product_price','<',200000)->count();
        $m4 = DB::table('tbl_product')->where('product_status','1')->where('product_price','>',200000)->where('product_price','<',500000)->count();
        $m5 = DB::table('tbl_product')->where('product_status','1')->where('product_price','>',500000)->count();
        Session::put('m1',$m1);
        Session::put('m2',$m2);
        Session::put('m3',$m3);
        Session::put('m4',$m4);
        Session::put('m5',$m5);
        $category_product = DB::table('tbl_category_product')->where('category_status','1')->orderBy('category_id','desc')->get();
        $re = DB::table('tbl_product')->where('product_status','1')->orderBy('product_sold','desc')->get();
        $m = $request->price;
        switch ($m) {
            case 'm1':
                $re = DB::table('tbl_product')->where('product_status','1')->where('product_price','<',100000)->get();
                break;
            case 'm2':
                $re = DB::table('tbl_product')->where('product_status','1')->where('product_price','>',100000)->where('product_price','<',150000)->get();
                break;
            case 'm3':
                $re = DB::table('tbl_product')->where('product_status','1')->where('product_price','>',150000)->where('product_price','<',200000)->get();
                break;
            case 'm4':
                $re = DB::table('tbl_product')->where('product_status','1')->where('product_price','>',200000)->where('product_price','<',500000)->get();
                break;
            case 'm5':
                $re = DB::table('tbl_product')->where('product_status','1')->where('product_price','>',500000)->get();
                break;
          }
        return view('page.search')->with('category',$category_product)->with('product',$re);
    }
    public function index_2(){
        return view('page.shop_content');
    }
}
