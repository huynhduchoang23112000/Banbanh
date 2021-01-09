<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Session;
use Auth;

class UserController extends Controller
{
    public function signin(){
    	return view('ban-banh.login');
    }

    //public function signup(){
    //	return view('ban-banh.signup');
   // }
    public function getsignup(){
    	return view('ban-banh.signup');
    }

    public function postsignup(Request $req){
    	$this-> validate($req,
    		[
    			'email'=>'required|email|unique:users,mail',
    			'password'=>'required|min:6|max:20',
    			'fullname'=>'required',
    			're_password'=>'required|same:password'
    		],
    		[
    			'email.required'=>'vui long nhap mail',
    			'email.email'=>'khong dung dinh dang mail',
    			'email.unique'=>'Email da co nguoi su dung',
    			'password.required'=>'vui long nhap mat khau',
    			're_password.same'=>'mat khau khong giong nhau',
    			'password.min'=>'mat khau it nhat 6 ky tu'
    		]);
    	$user= new User();
    	$user->full_name= $req->fullname;
    	$user->email =$req ->email;
    	$user->password = Hash::make($req->password);
    	$user->phone = $req->phone;
    	$user->address = $req->address;
    	$user-> save();
    	return redirect()->back() ->with('thanhcong','tao tai khoan thanh cong');
    }
}
