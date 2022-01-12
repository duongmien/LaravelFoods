<?php

namespace App\Http\Controllers;

use App\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;
use App\Social;
session_start();

class LoginController extends Controller
{
    public function index()
    {
        return view('page.login');
    }

    public function login_facebook(){
        return Socialite::driver('facebook')->redirect();
    }
        
    public function callback_facebook(){
        $provider = Socialite::driver('facebook')->user();
        $account = Social::where('provider','facebook')->where('provider_user_id',$provider->getId())->first();
        if($account){
        //login in vao trang quan tri
        $account_name = Login::where('user_id',$account->user)->first();
        Session::put('name',$account_name->name);
        Session::put('user_id',$account_name->user_id);
        Session::put('role_id',2);
        return redirect('/home')->with('message', 'Đăng nhập thành công');
        }else{
        
        $hieu = new Social([
        'provider_user_id' => $provider->getId(),
        'provider' => 'facebook'
        ]);
        
        $orang = Login::where('username',$provider->getEmail())->first();
        
        if(!$orang){
        $orang = Login::create([
        
        'name' => $provider->getName(),
        'username' => $provider->getEmail(),
        'user_verified_at' => '',
        'password' => '',
        'role_id' => 2,
        'user_sex' => '',
        'user_tel' => '',
        'user_address' => '',
        'user_email' => ''
        ]);
        }
        $hieu->login()->associate($orang);
        $hieu->save();
        
        $account_name = Login::where('user_id',$account->user)->first();
        
        Session::put('name',$account_name->name);
        Session::put('user_id',$account_name->user_id);
        Session::put('role_id',2);
        return redirect('/home')->with('message', 'Đăng nhập thành công');
        }
    }

    public function check_login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        $login = Login::where('username',$username)->where('password',$password)->first();
        $login_count = $login->count();
        if($login_count){
                if($login->role_id==1){
                    Session::put('name',$login->name);
                    Session::put('user_id',$login->user_id);
                    Session::put('role_id',$login->role_id);
                    return Redirect::to('/dashboard');
                }else if($login->role_id==2){
                        Session::put('name',$login->name);
                        Session::put('user_id',$login->user_id);
                        Session::put('message','Login successful');
                        return Redirect::to('/home');
                }
            }else{
                Session::put('message','Incorrect account or password');
                return Redirect::to('/login');
            }


        // $username = $request->username;
        // $password = $request->password;

        // $result = DB::table('tbl_user')->where('username',$username)->where('password',$password)->first();
        // if($result){
        //     if($result->role_id==1){
        //         Session::put('name',$result->name);
        //         Session::put('user_id',$result->user_id);
        //         Session::put('role_id',$result->role_id);
        //         return Redirect::to('/dashboard');
        //     }else if($result->role_id==2){
        //             Session::put('name',$result->name);
        //             Session::put('user_id',$result->user_id);
        //             Session::put('message','Login successful');
        //             return Redirect::to('/home');
        //     }
        // }else{
        //     Session::put('message','Incorrect account or password');
        //     return Redirect::to('/login');
        // }
    }
    public function logout()
    {
        Session::put('name',null);
        Session::put('user_id',null);
        return Redirect::to('/login');
    }
}
