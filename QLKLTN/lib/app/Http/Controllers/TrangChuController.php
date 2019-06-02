<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{KhoaLuan,ThanhVien,Khoa,ThongBao};
use DB,Auth;
use Carbon\Carbon;

class TrangChuController extends Controller
{
    public function getTrangchu(){
    	$data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
    	$data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
    	$data['time'] = Carbon::now();
    	$data['kl'] = KhoaLuan::count();
		$data['tv'] = ThanhVien::where('quyen',3)->count();
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$data['l'] = date('Y-m-d');
		$data['kla'] = KhoaLuan::with(['thanhvien','khoa'])->get();
		$date=date_create(date('Y-m-d'));
		date_modify($date, "+1 days");
		$data['r'] = date_format($date, "Y-m-d");
		$data['tk'] = KhoaLuan::all();
		$data['lh'] = ThanhVien::where('quyen',1)->get();
		$data['ngay'] = Carbon::now()->day;
		$data['thang'] = Carbon::now()->month;
		$data['nam'] = Carbon::now()->year;
    	return view('layout/trangchu', $data);
    }

    public function getLogout(){
    	Auth::logout();
		return redirect('login');
    }

    public function TimKiem(Request $request){
    	$data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
    	$data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
    	$data['time'] = Carbon::now();
    	$result = $request->result;
		$data['keyword'] = $result;
		$result = str_replace(' ', '%', $result);
		$data['items'] = DB::table('khoaluan')->join('thanhvien','khoaluan.thanhvien_khoaluan','=','id')->where('ten_thanhvien','like','%'.$result.'%')->orwhere('lop','like','%'.$result.'%')->orwhere('ma_thanhvien','like','%'.$result.'%')->paginate(10);
		$data['tv'] = ThanhVien::all();
		return view('layout/timkiem',$data);
    }
}
