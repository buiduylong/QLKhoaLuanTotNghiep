<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Auth;

class LoginController extends Controller
{
    public function getLogin(){
    	return view('layout/login');
    }

    public function postLogin(Request $request){
    	$arr = ['ma_thanhvien' => $request->ma_thanhvien, 'password'=> $request->password];
		if($request->remember = 'Remember me'){
			$remember = true;
		}else{
			$remember= false;
		}
		if(Auth::attempt($arr,$remember)){
			return redirect('trangchu');
		}else{
			return back()->withInput()->with('thongbao','Tài khoản hoặc mật khẩu chưa đúng');
		}
    }
}
