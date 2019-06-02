<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Khoa,Nganh,Nam,HoiDong,ThanhVien,ThietLapHoiDong,ThongBao};
use App\Http\Requests\{ThemTVHoiDongRequest, SuaTVHoiDongRequest};
use App\Http\Requests\{ThietLapHoiDongRequest, SuaHoiDongRequest};
use Carbon\Carbon;
use Auth;

class QLHoiDongController extends Controller
{
    public function getDSHD(){
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
    	$data['khoalist'] = Khoa::all();
		$data['namlist'] = Nam::all();
		return view('layout/dshoidong',$data);
    }

    public function getThemTVHD(){
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
    	$data['khoalist'] = Khoa::all();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
		$data['namlist'] = Nam::where('nam','>=',date('Y'))->get();
    	return view('layout/them_tvhoidong',$data);
    }

    public function postThemTVHD(ThemTVHoiDongRequest $request){
    	if($request->ky=='unselect' || $request->nhom=='unselect' || $request->nam_hoidong=='unselect' || $request->thanhvien_hoidong=='unselect'){
			return back()->withInput()->with('thongbao2','Không được để trống Kỳ, Nhóm, Năm hoặc Giáo viên');
		}else{
			$hd = HoiDong::where([['ky',$request->ky],['nhom', $request->nhom],['nam_hoidong',$request->nam_hoidong],['thanhvien_hoidong',$request->thanhvien_hoidong]])->count();
			if($hd == 0){
				$hoidong = new HoiDong;
				$hoidong->ky = $request->ky;
				$hoidong->nhom = $request->nhom;
				$hoidong->thanhvien_hoidong = $request->thanhvien_hoidong;
				$hoidong->nam_hoidong = $request->nam_hoidong;
				$hoidong->save();
				return redirect('qlhoidong/dshoidong')->with('thongbao','Đã thêm thành công');
			}
			else{
				return back()->withInput()->with('thongbao3','Giáo viên đã có trong hội đồng');
			}
		}
    }

    public function postSuaTVHD(Request $request){
    	$hd = new HoiDong;
        $arr['ky'] = $request->ky;
        $arr['nhom'] = $request->nhom;
        $arr['nam_hoidong'] = $request->nam_hoidong;
        $hd::where('id_hoidong',$request->id)->update($arr);
        return redirect('qlhoidong/dshoidong')->with('thongbao','Đã sửa thành công');
    }

    public function XoaTVHD($id){
    	HoiDong::destroy($id);
		return redirect('qlhoidong/dshoidong')->with('thongbao','Đã xóa thành công');
    }

    public function getThietLapHD(){
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
    	$data['khoalist'] = Khoa::all();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
		$data['namlist'] = Nam::where('nam','>=',date('Y'))->get();
    	return view('layout/thietlap_hoidong',$data);
    }

    public function postThietLapHD(ThietLapHoiDongRequest $request){
    	if($request->ten_hoidong == null || $request->ky=='unselect' || $request->nhom=='unselect' || $request->nam_thietlap=='unselect' || $request->hd1=='unselect' || $request->hd2=='unselect' || $request->hd3=='unselect' || $request->hd4=='unselect'){
			return back()->withInput()->with('thongbao4','Vui lòng chọn hoặc thêm đầy đủ các giá trị');
		}
		else{
			$tl = new ThietLapHoiDong;
			$tl->ten_hoidong = $request->ten_hoidong;
			$tl->ky = $request->ky;
			$tl->nhom = $request->nhom;
			$tl->nam_thietlap = $request->nam_thietlap;
			$tl->khoa_thietlap = $request->khoatl;
            $tl->nganh_thietlap = $request->nganhtl;
			$tl->hd1 = $request->hd1;
			$tl->hd2 = $request->hd2;
			$tl->hd3 = $request->hd3;
			$tl->hd4 = $request->hd4;
			$tl->save();
			return redirect('qlhoidong/danhsachhoidong')->with('thongbao','Đã thiết lập hội đồng thành công');
		}
    }

    public function getDanhSachHoiDong(){
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
    	$data['dshd'] = ThietLapHoiDong::join('nam','thietlap.nam_thietlap','=','id_nam')->join('khoa','thietlap.khoa_thietlap','=','id_khoa')->get();
    	return view('layout/danhsachhoidong',$data);
    }

    public function getSuaHoiDong($id){
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
    	$data['thietlap'] = ThietLapHoiDong::find($id);
        $data['namlist'] = Nam::all();
        $data['khoalist'] = Khoa::all();
        $data['nganhlist'] = Nganh::all();
    	return view('layout/sua_hoidong',$data);
    }

    public function postSuaHoiDong(Request $request,$id){
        $tl = ThietLapHoiDong::find($id);
        $tl->ten_hoidong = $request->ten_hoidong;
        $tl->ky = $request->ky;
        $tl->nhom = $request->nhom;
        $tl->nam_thietlap = $request->nam_thietlap;
        $tl->khoa_thietlap = $request->khoatl;
        $tl->hd1 = $request->hd1;
        $tl->hd2 = $request->hd2;
        $tl->hd3 = $request->hd3;
        $tl->hd4 = $request->hd4;
        $tl->save();
    	return redirect('qlhoidong/danhsachhoidong')->with('thongbao', 'Đã sửa hội đồng thành công');
    }

    public function XoaHoiDong($id){
    	ThietLapHoiDong::destroy($id);
		return redirect('qlhoidong/danhsachhoidong')->with('thongbao','Đã xóa thành công');
    }
}
