<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ThemNganhRequest;
use App\Http\Requests\SuaNganhRequest;
use App\Models\{Nganh,Khoa,ThongBao};
use Carbon\Carbon;
use DB,Auth;

class QLNganhController extends Controller
{
    public function getQLNganh(){
    	$data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
    	$data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
    	$data['time'] = Carbon::now();
    	$data['khoalist'] = Khoa::all();
		$data['nganhlist'] = DB::table('nganh')->join('khoa','nganh.khoa_nganh','=','id_khoa')->orderBy('id_nganh','desc')->paginate(5);
		return view('layout/qlnganh',$data);
    }

    public function postQLNganh(ThemNganhRequest $request){
    	if($request->khoa_nganh=='unselect'){
			return back()->withInput()->with('thongbao2','Khoa không được để trống');
		}else{
			$nganh = new Nganh;
			$nganh->ten_nganh = $request->ten_nganh;
			$nganh->khoa_nganh = $request->khoa_nganh;
			$nganh->save();
			return redirect('qlnganh/qlnganh')->with('thongbao','Đã thêm thành công');
		}    	
    }

    public function getSuaNganh($id){
    	$data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
    	$data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
    	$data['time'] = Carbon::now();
    	$data['nganh'] = Nganh::find($id);
		$data['khoalist'] = Khoa::all();
		return view('layout/sua_nganh',$data);
    }

    public function postSuaNganh(SuaNganhRequest $request,$id){
    	$nganh = new Nganh;
		$arr['ten_nganh'] = $request->ten_nganh;
		$arr['khoa_nganh'] = $request->khoa_nganh;
		$nganh::where('id_nganh',$id)->update($arr);
		return redirect('qlnganh/qlnganh')->with('thongbao','Đã sửa thành công');
    }

    public function XoaNganh($id){
    	Nganh::destroy($id);
		return redirect('qlnganh/qlnganh')->with('thongbao','Đã xóa thành công');
    }
}
