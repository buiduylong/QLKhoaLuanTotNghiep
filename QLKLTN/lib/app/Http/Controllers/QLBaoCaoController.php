<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Khoa,Nam,KhoaLuan,ThongBao,ThanhVien};
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Auth;

class QLBaoCaoController extends Controller
{
    public function getQLBaoCao(){
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
    	$data['khoalist'] = Khoa::all();
		$data['namlist'] = Nam::all();
    	return view('layout/qlbaocao',$data);
    }

    public function getSuaBaoCao($id){
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
    	$data['bc'] = KhoaLuan::find($id);
    	return view('layout/sua_baocao',$data);
    }

    public function postSuaBaoCao(Request $request,$id){
    	$bc = new KhoaLuan;
		if ($request->hasfile('bao_cao')) {
    		$bao_cao = $request->bao_cao->getClientOriginalName();
    		$arr['bao_cao'] = $bao_cao;
    		$request->bao_cao->storeAs('report',$bao_cao);
    	}
		$bc::where('id_khoaluan',$id)->update($arr);
		return redirect('qlbaocao/qlbaocao')->with('thongbao', 'Lưu báo cáo thành công');
    }

    public function postCongKhai(Request $request){
    
    	$bc = new KhoaLuan;
		$arr['pub'] = $request->pub;
		$bc::where('id_khoaluan',$request->id)->update($arr);
		return back()->with('thongbao', 'Thành công');
    }

    public function XoaBaoCao($id){
    	$bc = KhoaLuan::find($id);
		Storage::delete('report/'.$bc->bao_cao);
		$bc->bao_cao = null;
		$bc->save();
		return back()->with('thongbao', 'Xóa báo cáo thành công');
    }
}
