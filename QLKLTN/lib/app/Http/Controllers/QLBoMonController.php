<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{BoMon,ThongBao};
use App\Http\Requests\{ThemBoMonRequest, SuaBoMonRequest};
use Carbon\Carbon;
use DB,Auth;

class QLBoMonController extends Controller
{
    public function getQLBoMon(){
    	$data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
    	$data['bomonlist'] = BoMon::paginate(5);
    	return view('layout/qlbomon',$data);
    }

    public function postQLBoMon(ThemBoMonRequest $request){
    	$bomon = new BoMon;
    	$bomon->ten_bomon = $request->ten_bomon;
    	$bomon->save();
    	return redirect('qlbomon')->with('thongbao','Đã thêm thành công');
    }

    public function getSuaBoMon($id){
    	$data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
    	$data['bomonlist'] = BoMon::find($id);
    	return view('layout/sua_bomon',$data);
    }

    public function postSuaBoMon(SuaBoMonRequest $request,$id){
    	$bomon = BoMon::find($id);
        $bomon->ten_bomon = $request->ten_bomon;
        $bomon->save();
    	return redirect('qlbomon')->with('thongbao','Đã sửa thành công');
    }

    public function XoaBoMon($id){
    	BoMon::destroy($id);
        return redirect('qlbomon')->with('thongbao','Đã xóa thành công');
    }
}
