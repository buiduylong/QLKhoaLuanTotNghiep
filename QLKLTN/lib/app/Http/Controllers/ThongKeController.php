<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Khoa,Nganh,Nam,ThanhVien,ThietLapHoiDong,ThongBao,KhoaLuan};
use Carbon\Carbon;
use Auth;

class ThongKeController extends Controller
{
	public function getThongKeDangBieuDo(){
		$data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
    	$data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
    	$data['time'] = Carbon::now();
		$data['khoalist'] = Khoa::all();
		$data['namlist'] = Nam::all();
		return view('layout/thongke',$data);
	}
	public function getThongKeDangBang(){
		$data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
    	$data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
    	$data['time'] = Carbon::now();
		$data['namlist'] = Nam::all();
		$data['nganhlist'] = Nganh::with('khoaluan')->get();
		return view('layout/thongketyle',$data);
	}
}
