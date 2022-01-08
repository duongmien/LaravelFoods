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

        return view('page.shop_content')->with('category',$category_product)->with('product',$all_product);
    }
    public function search(Request $request)
    {
        $key = $request->keywords;

        $category_product = DB::table('tbl_category_product')->where('category_status','1')->orderBy('category_id','desc')->get();

        $search_product = DB::table('tbl_product')->where('product_status','1')->where('product_name','like','%'.$key.'%')->orWhere('product_content','like','%'.$key.'%')->orWhere('product_desc','like','%'.$key.'%')->orderBy('product_id','desc')->get();

        return view('page.search')->with('category',$category_product)->with('product',$search_product);
    }
    public function index_2(){
        return view('page.shop_content');
    }
}
