<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class ProductController extends Controller
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

    public function add_product(){
        $this->AuthLogin();
        $category_product = DB::table('tbl_category_product')->orderBy('category_id','desc')->get();
        return view('admin.add_product')->with('category_product', $category_product);
    }

    public function all_product(){
        $this->AuthLogin();
        $all_product = DB::table('tbl_product')->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')->orderBy('tbl_product.product_id','desc')->get();
        $manager_product = view('admin.all_product')->with('all_product',$all_product);
        return view('admin_layout')->with('admin.all_product', $manager_product);
    }

    public function save_product(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['category_id'] = $request->product_category;
        $data['product_name'] = $request->product_name;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['product_meal'] = $request->product_meal;
        $data['product_price'] = $request->product_price;
        $data['product_status'] = $request->product_status;
        $data['product_rate'] = '5';
        $get_image = $request->file('product_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('uploads/product',$new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->insert($data);
            Session::put('message','Add product successful');
            return Redirect::to('all-product');
        }
        $data['product_image'] = '';
        DB::table('tbl_product')->insert($data);
        Session::put('message','Add product successful');
        return Redirect::to('all-product');
    }

    public function active_product($product_id){
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>1]);
        Session::put('message','Activated');
        return Redirect::to('all-product');
    }

    public function unactive_product($product_id){
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>0]);
        Session::put('message','Unactivated');
        return Redirect::to('all-product');
    }

    public function edit_product($product_id){
        $this->AuthLogin();
        $category_product = DB::table('tbl_category_product')->orderBy('category_id','desc')->get();
        $edit_product = DB::table('tbl_product')->where('product_id',$product_id)->get();
        $manager_product = view('admin.edit_product')->with('edit_product',$edit_product)->with('category_product', $category_product);
        return view('admin_layout')->with('admin.edit_product', $manager_product);
    }

    public function update_product(Request $request ,$product_id){
        $this->AuthLogin();
        $data = array();
        $data['category_id'] = $request->product_category;
        $data['product_name'] = $request->product_name;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['product_meal'] = $request->product_meal;
        $data['product_price'] = $request->product_price;
        $get_image = $request->file('product_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('uploads/product',$new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->where('product_id',$product_id)->update($data);
            Session::put('message','Update successful');
            return Redirect::to('all-product');
        }
        DB::table('tbl_product')->where('product_id',$product_id)->update($data);
            Session::put('message','Update successful');
        return Redirect::to('all-product');
    }

    public function delete_product($product_id){
        $this->AuthLogin();
        DB::table('tbl_product')->where('product_id',$product_id)->delete();
        Session::put('message','Delete successful');
        return Redirect::to('all-product');
    }
    //end admin function page
    public function show_product_category($category_id){
        $category_product = DB::table('tbl_category_product')->where('category_status','1')->orderBy('category_id','desc')->get();
        
        $all_category_product = DB::table('tbl_product')->where('category_id',$category_id)->get();

        return view('page.shop_content')->with('category',$category_product)->with('product',$all_category_product);

    }
    public function product_detail($product_id){
        $detail_product = DB::table('tbl_product')->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')->where('tbl_product.product_id',$product_id)->get();
        $image_product = DB::table('tbl_image')->where('tbl_image.product_id',$product_id)->get();
        foreach($detail_product as $key => $value){
            $category_id = $value->category_id;
        }
        
        $recoment_product = DB::table('tbl_product')->where('product_status','1')->where('category_id',$category_id)->orderBy('product_id','desc')->orderBy('product_sold','desc')->limit(9)->get();

        return view('page.shop_detail')->with('recoment_product',$recoment_product)->with('product_detail',$detail_product)->with('image_product',$image_product);
    }
}
