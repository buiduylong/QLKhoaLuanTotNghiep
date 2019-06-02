<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{DeTai,ThanhVien,Nam,Khoa,KhoaLuan,ThongBao};
use App\Http\Requests\{ThemDetaiRequest, SuaDeTaiRequest};
use Carbon\Carbon;
use DB,Auth;

class DeTaiController extends Controller
{
    public function getDSDT(){
    	$data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
    	$data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
    	$data['time'] = Carbon::now();
		$data['kllist'] = KhoaLuan::all();
		$data['khoalist'] = Khoa::all();
		$data['namlist'] = Nam::all();
		$data['detailist'] = DeTai::with(['nam', 'thanhvien'])->orderBy('id_detai','desc')->get();
		return view('layout/dsdetai',$data);
    }

    public function getThemDeTai(){
    	$data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
    	$data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
    	$data['time'] = Carbon::now();
    	$data['tvlist'] = ThanhVien::all();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
		$data['nam'] = Nam::where('nam','>=',date('Y'))->get();
    	return view('layout/them_detai',$data);
    }

    public function postThemDeTai(ThemDetaiRequest $request){
    	if($request->ky=='unselect' || $request->nhom=='unselect' || $request->nam_detai=='unselect'){
			return back()->withInput()->with('thongbao2','Không được để trống Kỳ, Nhóm hoặc Năm');
		}else{
			$detai = new DeTai;
			$detai->ten_detai = $request->ten_detai;
			$detai->ky = $request->ky;
			$detai->nhom = $request->nhom;
			$detai->thanhvien_detai = Auth::user()->id;
			$detai->nam_detai = $request->nam_detai;
			$detai->save();
			return redirect('detai/dsdetai')->with('thongbao','Đã thêm thành công');
		}
    }

    public function getSuaDeTai($id){
    	$data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
    	$data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
    	$data['time'] = Carbon::now();
    	$data['detai'] = DeTai::find($id);
		$data['tvlist'] = ThanhVien::all();
		$data['namlist'] = Nam::all();
		return view('layout/sua_detai',$data);
    }

    public function postSuaDeTai(SuaDeTaiRequest $request,$id){
    	$detai = new DeTai;
		$arr['ten_detai'] = $request->ten_detai;
		$arr['ky'] = $request->ky;
		$arr['nhom'] = $request->nhom;
		$arr['nam_detai'] = $request->nam_detai;
		$detai::where('id_detai',$id)->update($arr);
		return redirect('detai/dsdetai')->with('thongbao','Đã sửa thành công');
    }

    public function XoaDeTai($id){
    	DeTai::destroy($id);
		return redirect('detai/dsdetai')->with('thongbao','Đã xóa thành công');
    }
}
