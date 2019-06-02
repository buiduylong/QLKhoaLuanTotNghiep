<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ThemKhoaRequest;
use App\Http\Requests\SuaKhoaRequest;
use App\Models\{Khoa,ThongBao};
use Carbon\Carbon;
use DB,Auth;

class QLKhoaController extends Controller
{
    public function getQLKhoa(){
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
    	$data['khoalist'] = Khoa::paginate(5);
		return view('layout/qlkhoa',$data);
    }

    public function postQLKhoa(ThemKhoaRequest $request){
    	$khoa = new Khoa;
    	$khoa->ten_khoa = $request->ten_khoa;
    	$khoa->save();
    	return redirect('qlkhoa/qlkhoa')->with('thongbao','Đã thêm thành công');
    }

    public function getSuaKhoa($id){
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
    	$data['khoalist'] = Khoa::find($id);
    	return view('layout/sua_khoa',$data);
    }

    public function postSuaKhoa(SuaKhoaRequest $request,$id){
    	$khoa = Khoa::find($id);
        $khoa->ten_khoa = $request->ten_khoa;
        $khoa->save();
    	return redirect('qlkhoa/qlkhoa')->with('thongbao','Đã sửa thành công');
    }

    public function XoaKhoa($id){
    	Khoa::destroy($id);
        return redirect('qlkhoa/qlkhoa')->with('thongbao','Đã xóa thành công');
    }
}
