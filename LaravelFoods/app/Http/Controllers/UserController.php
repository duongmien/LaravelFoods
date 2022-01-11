<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class UserController extends Controller
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
    public function AuthLogin2()
    {
        $admin_id = Session::get('user_id');
        if($admin_id){
            return Redirect::to('home');
        }else{
            return Redirect::to('login')->send();
        }
    }
    public function add_user(){
        $this->AuthLogin();

        return view('admin.add_user');
    }

    public function all_user(){
        $this->AuthLogin();

        $all_user = DB::table('tbl_user')->get();
        $manager_user = view('admin.all_user')->with('all_user',$all_user);
        return view('admin_layout')->with('admin.all_user', $manager_user);
    }

    public function save_user(Request $request){
        $this->AuthLogin();

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
        Session::put('message','Add User Successfully!');
        return Redirect::to('/add-user');
    }

    public function edit_user($user_id){
        $this->AuthLogin();
        
        $edit_user = DB::table('tbl_user')->where('user_id',$user_id)->get();
        $manager_user = view('admin.edit_user')->with('edit_user',$edit_user);
        return view('admin_layout')->with('admin.edit_user', $manager_user);
    }

    public function update_user(Request $request ,$user_id){
        $this->AuthLogin();

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
        DB::table('tbl_user')->where('user_id',$user_id)->update($data);
        Session::put('message','Update User Successfully!');
        return Redirect::to('/all-user');
    }

    public function delete_user($user_id){
        $this->AuthLogin();
        DB::table('tbl_user')->where('user_id',$user_id)->delete();
        Session::put('message','Delete User Successfully!');
        return Redirect::to('/all-user');
    }
    public function change_password($user_id){
        DB::table('tbl_user')->where('user_id',$user_id)->get();
        return view('page.change_password')->with('user_id',$user_id);
    }
    public function check_change(Request $request){
        $user_id=$request->user_id;
        $old=$request->old_password;
        $new=$request->new_password;
        $cfm=$request->cfm_password;
        $user = DB::table('tbl_user')->where('user_id',$user_id)->first();
        if($old!=$user->password){
            Session::put('message','Incorect Password!');
            return view('page.change_password');
        }else if($new != $cfm){
            Session::put('message','Incorect Password Confirm!');
            return view('page.change_password');
        }else{
            DB::table('tbl_user')->where('user_id',$user_id)->update(['password'=>$new]);
            Session::put('message','Change Password Successfully!');
            return Redirect::to('/home');
        }
    }
    public function edit_info($user_id){
        $this->AuthLogin2();
        $user = DB::table('tbl_user')->where('user_id',$user_id)->first(); 
        return view('page.edit_info')->with('user',$user);
    }
}
