<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ThemNamRequest;
use App\Http\Requests\SuaNamRequest;
use App\Models\{Nam,ThongBao};
use Carbon\Carbon;
use DB,Auth;

class QLNamController extends Controller
{
    public function getQLNam(){
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
    	$data['nam'] = Nam::paginate(5);
		return view('layout/qlnam',$data);
    }

    public function postQLNam(ThemNamRequest $request){
    	$nam = new Nam;
    	$nam->nam = $request->nam;
    	$nam->save();
    	return redirect('qlnam/qlnam')->with('thongbao','Đã thêm thành công');
    }

    public function getSuaNam($id){
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
    	$data['nam'] = Nam::find($id);
    	return view('layout/sua_nam',$data);
    }

    public function postSuaNam(SuaNamRequest $request,$id){
        $nam = Nam::find($id);
        $nam->nam = $request->nam;
        $nam->save();
    	return redirect('qlnam/qlnam')->with('thongbao','Đã sửa thành công');
    }

    public function XoaNam($id){
        Nam::destroy($id);
        return redirect('qlnam/qlnam')->with('thongbao','Đã xóa thành công');
    }
}
