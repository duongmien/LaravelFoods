<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function add_user(){
        return view('admin.add_user');
    }

    public function all_user(){
        $all_user = DB::table('tbl_user')->get();
        $manager_user = view('admin.all_user')->with('all_user',$all_user);
        return view('admin_layout')->with('admin.all_user', $manager_user);
    }

    public function save_user(Request $request){
        $data = array();
        $data['name']= $request->name;
        $data['username'] = $request->username;
        $data['user_verified_at']=$request->user_user_verified_at;
        $data['password']=$request->password;
        $data['role_id']=$request->role_id;
        $data['user_sex']=$request->user_sex;
        $data['user_tel']=$request->user_tel;
        $data['user_address']=$request->user_address;
        $data['user_email']=$request->user_email;
        DB::table('tbl_user')->insert($data);
        Session::put('message','Add User success successfully!');
        return Redirect::to('/add-user');
    }

    // public function active_user($user_id){
    //     DB::table('tbl_user')->where('user_id',$user_id)->update(['user_status'=>1]);
    //     Session::put('message','Kích hoạt danh mục sản phẩm thành công!!!');
    //     return Redirect::to('all-user');
    // }

    // public function unactive_user($user_id){
    //     DB::table('tbl_user')->where('user_id',$user_id)->update(['user_status'=>0]);
    //     Session::put('message','Không kích hoạt danh mục sản phẩm thành công!!!');
    //     return Redirect::to('all-user');
    // }

    public function edit_user($user_id){
        $edit_user = DB::table('tbl_user')->where('user_id',$user_id)->get();
        $manager_user = view('admin.edit_user')->with('edit_user',$edit_user);
        return view('admin_layout')->with('admin.edit_user', $manager_user);
    }

    // public function update_user(Request $request ,$user_id){
    //     $data = array();
    //     $data['user_name'] = $request->user_name;
    //     $data['user_desc'] = $request->user_desc;

    //     DB::table('tbl_user')->where('user_id',$user_id)->update($data);
    //     Session::put('message','Cập nhật danh mục sản phẩm thành công!!!');
    //     return Redirect::to('/all-user');
    // }

    // public function delete_user($user_id){
    //     DB::table('tbl_user')->where('user_id',$user_id)->delete();
    //     Session::put('message','Xóa danh mục sản phẩm thành công!!!');
    //     return Redirect::to('/all-user');
    // }
}
