<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Khoa,Nam,KhoaLuan,ThongBao,ThanhVien};
use Carbon\Carbon;
use Auth;

class ThongBaoController extends Controller
{
	public function getThongBao(){
		$data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
    	$data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
    	$data['time'] = Carbon::now();
		$data['thongbaolist'] = ThongBao::all();
		$data['thanhvienlist'] = ThanhVien::all();
		$data['listthanhvien'] = ThongBao::join('thanhvien','id_gui','=','id')->get();
		// dd($data['listthanhvien']);
		return view('layout/thongbao', $data);
	}

	public function postTrangThai(Request $request){
		$trangthai = new ThongBao;
		$arr['trangthai'] = $request->trangthai;
		$trangthai::where('id_thongbao',$request->id)->update($arr);
		return redirect('thongbao')->with('thongbao', 'Cập nhật thành công');
	}
}
