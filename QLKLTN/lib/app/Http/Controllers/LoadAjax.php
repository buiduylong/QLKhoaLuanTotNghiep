<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\{Khoa,DeTai,Nganh,ThanhVien,HoiDong,ThietLapHoiDong,KhoaLuan,Nam,Thanhvien_Hoidong,ThongBao,BoMon};
use DB;
use Carbon\Carbon;

class LoadAjax extends Controller
{
	public function loadKhoa(Request $request){
		$khoalist = DB::table('nganh')->join('khoa','nganh.khoa_nganh','=','id_khoa')->where('id_khoa',$request->khoa_nganh)->get();
		return view('component/khoa', compact('khoalist'));
	}

	public function loadNganh(Request $request){
		$data['nganhs'] = Khoa::with('nganh')->find($request->idkhoa);
		if ($request->idnganh) {
			$data['idnganh'] = $request->idnganh;
		}
		return view('component/nganh', $data);
	}

	public function loadChiTiet(Request $request) {
		$ct = ThanhVien::with('khoa')->with('nganh')->find($request->id);
		return view('component/child/chitiettv', compact('ct'));
	}
	
	public function loadThanhVien(Request $request)
	{   
		$data['tvlist'] = ThanhVien::where([['khoa_thanhvien',$request->khoa], ['trang_thai',$request->trang_thai], ['quyen',$request->quyen]])->get();

		// $data['tvlist1'] = BoMon::join('thanhvien','thanhvien.bomon_thanhvien','=','id_bomon')->where([['quyen',$request->quyen]])->get();

		$data['tvlist14'] = BoMon::join('thanhvien','thanhvien.bomon_thanhvien','=','id_bomon')->where([['quyen',$request->quyen],['bomon_thanhvien',$request->bomon]])->get();

		$data['tvlist01'] = BoMon::join('thanhvien','thanhvien.bomon_thanhvien','=','id_bomon')->where([['quyen',2]])->get();

		$data['tvlist4'] = BoMon::join('thanhvien','thanhvien.bomon_thanhvien','=','id_bomon')->where([['bomon_thanhvien',$request->bomon],['quyen',2]])->get();

		if($request->bomon != 0 && $request->quyen == 2 && $request->khoa == 0 && $request->trang_thai == 0){
			$data['row14'] = BoMon::join('thanhvien','thanhvien.bomon_thanhvien','=','id_bomon')->where([['quyen',$request->quyen],['bomon_thanhvien',$request->bomon]])->count();
		}

		if($request->bomon == 0 && $request->quyen == 2 && $request->khoa == 0 && $request->trang_thai == 0){
			$data['row01'] = BoMon::join('thanhvien','thanhvien.bomon_thanhvien','=','id_bomon')->where([['quyen',2]])->count();
		}

		if($request->bomon != 0 && $request->quyen == 0 && $request->khoa == 0 && $request->trang_thai == 0){
			$data['row4'] = BoMon::join('thanhvien','thanhvien.bomon_thanhvien','=','id_bomon')->where([['quyen',$request->quyen],['bomon_thanhvien',$request->bomon]])->count();
		}

		$data['tvlist1'] = ThanhVien::where([['quyen',$request->quyen]])->get();

		$data['tvlist2'] = ThanhVien::where([['khoa_thanhvien',$request->khoa]])->get();

		$data['tvlist3'] = ThanhVien::where([['trang_thai',$request->trang_thai],['quyen',3]])->get();

		$data['tvlist12'] = ThanhVien::where([['quyen',$request->quyen],['khoa_thanhvien',$request->khoa]])->get();

		$data['tvlist13'] = ThanhVien::where([['quyen',3],['trang_thai',$request->trang_thai]])->get();

		$data['tvlist23'] = ThanhVien::where([['khoa_thanhvien',$request->khoa],['trang_thai',$request->trang_thai],['quyen',3]])->get();

		if($request->quyen != 0 && $request->khoa != 0 && $request->trang_thai != 0 && $request->bomon == 0){
			if($request->quyen == 3){
				$data['row'] = ThanhVien::where([['khoa_thanhvien',$request->khoa],['trang_thai', $request->trang_thai],['quyen',$request->quyen]])->count();
			}
		}

		// if($request->quyen != 2 && $request->khoa == 0 && $request->trang_thai == 0){
		// 	$data['row01'] = ThanhVien::where([['quyen',$request->quyen]])->count();
		// }

		if($request->quyen != 2 && $request->khoa == 0 && $request->trang_thai == 0 && $request->bomon == 0){
			$data['row1'] = ThanhVien::where([['quyen',$request->quyen]])->count();
		}

		if($request->quyen == 0 && $request->khoa != 0 && $request->trang_thai == 0 && $request->bomon == 0){
			$data['row2'] = ThanhVien::where([['khoa_thanhvien',$request->khoa]])->count();
		}

		if($request->quyen == 0 && $request->khoa == 0 && $request->trang_thai != 0 && $request->bomon == 0){
			$data['row3'] = ThanhVien::where([['trang_thai',$request->trang_thai],['quyen',3]])->count();
		}

		if($request->quyen != 2 && $request->khoa != 0 && $request->trang_thai == 0 && $request->bomon == 0){
			$data['row12'] = ThanhVien::where([['quyen',$request->quyen],['khoa_thanhvien',$request->khoa]])->count();
		}

		if($request->quyen == 3 && $request->khoa == 0 && $request->trang_thai != 0 && $request->bomon == 0){
			$data['row13'] = ThanhVien::where([['quyen',3],['trang_thai',$request->trang_thai]])->count();
		}

		if($request->quyen == 0 && $request->khoa != 0 && $request->trang_thai != 0 && $request->bomon == 0){
			$data['row23'] = ThanhVien::where([['khoa_thanhvien',$request->khoa],['trang_thai', $request->trang_thai],['quyen',3]])->count();
		}

		$data['bomonlist'] = BoMon::all();
		
		return view('component/tv', $data);
	}
	
	public function loadGiaoVien(Request $request)
	{
		$data['giaovien'] = Nganh::with('thanhvien')->find($request->idnganh);
		if ($request->idgiaovien) {
			$data['idgiaovien'] = $request->idgiaovien;
		}
		
		return view('component/giaovien', $data);
	}

	public function loadDSHoiDong(Request $request)
	{
		$hoidonglist = HoiDong::whereHas('thanhvien', function($qr) use ($request) {
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nhom', $request->nhom],['nam_hoidong',$request->nam_hoidong]])->get();

		$hoidonglist1 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->get();

		$hoidonglist3 = HoiDong::where('ky',$request->ky)->get();

		$hoidonglist4 = HoiDong::where('nhom',$request->nhom)->get();

		$hoidonglist5 = HoiDong::where('nam_hoidong',$request->nam_hoidong)->get();
		
		$hoidonglist12 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->get();

		$hoidonglist13 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where('ky',$request->ky)->get();

		$hoidonglist14 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where('nhom', $request->nhom)->get();

		$hoidonglist15 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where('nam_hoidong',$request->nam_hoidong)->get();

		$hoidonglist34 = HoiDong::where([['ky',$request->ky],['nhom',$request->nhom]])->get();

		$hoidonglist35 = HoiDong::where([['ky',$request->ky],['nam_hoidong',$request->nam_hoidong]])->get();

		$hoidonglist45 = HoiDong::where([['nhom',$request->nhom],['nam_hoidong',$request->nam_hoidong]])->get();

		$hoidonglist123 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where('ky',$request->ky)->get();

		$hoidonglist124 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where('nhom', $request->nhom)->get();

		$hoidonglist125 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where('nam_hoidong',$request->nam_hoidong)->get();

		$hoidonglist134 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where([['ky',$request->ky],['nhom', $request->nhom]])->get();

		$hoidonglist135 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where([['ky',$request->ky],['nam_hoidong',$request->nam_hoidong]])->get();

		$hoidonglist145 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where([['nhom', $request->nhom],['nam_hoidong',$request->nam_hoidong]])->get();

		$hoidonglist345 = HoiDong::where([['ky',$request->ky],['nhom',$request->nhom],['nam_hoidong',$request->nam_hoidong]])->get();

		$hoidonglist1234 = HoiDong::whereHas('thanhvien', function($qr) use ($request) {
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nhom', $request->nhom]])->get();

		$hoidonglist1235 = HoiDong::whereHas('thanhvien', function($qr) use ($request) {
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nam_hoidong',$request->nam_hoidong]])->get();

		$hoidonglist1245 = HoiDong::whereHas('thanhvien', function($qr) use ($request) {
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['nhom',$request->nhom],['nam_hoidong',$request->nam_hoidong]])->get();

		$row = HoiDong::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nhom', $request->nhom],['nam_hoidong',$request->nam_hoidong]])->count();

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_hoidong == 0){
			$row1 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_hoidong == 0){
			$row3 = HoiDong::where('ky',$request->ky)->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_hoidong == 0){
			$row4 = HoiDong::where('nhom', $request->nhom)->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_hoidong != 0){
			$row5 = HoiDong::where('nam_hoidong',$request->nam_hoidong)->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_hoidong == 0){
			$row12 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_hoidong == 0){
			$row13 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where('ky', $request->ky)->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_hoidong == 0){
			$row14 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where('nhom', $request->nhom)->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_hoidong != 0){
			$row15 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where('nam_hoidong',$request->nam_hoidong)->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_hoidong == 0){
			$row34 = HoiDong::where([['ky',$request->ky],['nhom',$request->nhom]])->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_hoidong != 0){
			$row35 = HoiDong::where([['ky',$request->ky],['nam_hoidong',$request->nam_hoidong]])->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_hoidong != 0){
			$row45 = HoiDong::where([['nhom',$request->nhom],['nam_hoidong',$request->nam_hoidong]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_hoidong == 0){
			$row123 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where('ky', $request->ky)->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_hoidong == 0){
			$row124 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where('nhom', $request->nhom)->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_hoidong != 0){
			$row125 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where('nam_hoidong',$request->nam_hoidong)->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_hoidong == 0){
			$row134 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where([['ky',$request->ky],['nhom', $request->nhom]])->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_hoidong != 0){
			$row135 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where([['ky',$request->ky],['nam_hoidong',$request->nam_hoidong]])->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_hoidong != 0){
			$row145 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where([['nhom', $request->nhom],['nam_hoidong',$request->nam_hoidong]])->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_hoidong != 0){
			$row345 = HoiDong::where([['ky',$request->ky],['nhom',$request->nhom],['nam_hoidong',$request->nam_hoidong]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_hoidong == 0){
			$row1234 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where([['ky',$request->ky],['nhom', $request->nhom]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_hoidong != 0){
			$row1235 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where([['ky',$request->ky],['nam_hoidong',$request->nam_hoidong]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_hoidong != 0){
			$row1245 = HoiDong::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where([['nhom',$request->nhom],['nam_hoidong',$request->nam_hoidong]])->count();
		}

		return view('component/dshoidong', compact('hoidonglist','hoidonglist1','hoidonglist3','hoidonglist4','hoidonglist5','hoidonglist12','hoidonglist13','hoidonglist14','hoidonglist15','hoidonglist34','hoidonglist35','hoidonglist45','hoidonglist123','hoidonglist124','hoidonglist125','hoidonglist134','hoidonglist135','hoidonglist145','hoidonglist345','hoidonglist1234','hoidonglist1235','hoidonglist1245','row','row1','row3','row4','row5','row12','row13','row14','row15','row34','row35','row45','row123','row124','row125','row134','row135','row145','row345','row1234','row1235','row1245'));
	}

	public function loadSuaTTHD(Request $request)
	{
		$hd = HoiDong::with('nam')->find($request->id);
		$namlist = Nam::all();
		return view('component/suathongtin_hoidong', compact('hd','namlist'));
	}

	public function loadChiTietHoiDong(Request $request)
	{
		$hd1 = ThietLapHoiDong::select('hd1')->find($request->id);
		$ten = ThanhVien::select('ten_thanhvien')->find($hd1);
		$cthd = ThietLapHoiDong::with('khoa')->find($request->id);
		$data=array('chutich'=>'','gvhd'=>'','phanbien'=>'','thuky'=>'');
		$data['chutich']= ThanhVien::find(ThietLapHoiDong::find($request->id)->hd1)->ten_thanhvien ;
		$data['gvhd']= ThanhVien::find(ThietLapHoiDong::find($request->id)->hd2)->ten_thanhvien ;
		$data['phanbien']= ThanhVien::find(ThietLapHoiDong::find($request->id)->hd3)->ten_thanhvien ;
		$data['thuky']= ThanhVien::find(ThietLapHoiDong::find($request->id)->hd4)->ten_thanhvien ;
		return view('component/child/chitiet_hoidong', compact('ten','cthd','data'));
	}

	public function loadLocDeTai(Request $request)
	{
		$detailist = DeTai::whereHas('thanhvien', function($qr) use ($request) {
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nhom', $request->nhom],['nam_detai',$request->nam_detai]])->get();

		$detailist1 = DeTai::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->get();

		$detailist3 = DeTai::where('ky',$request->ky)->get();

		$detailist4 = DeTai::where('nhom',$request->nhom)->get();

		$detailist5 = DeTai::where('nam_detai',$request->nam_detai)->get();
		
		$detailist12 = DeTai::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->get();

		$detailist13 = DeTai::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where('ky',$request->ky)->get();

		$detailist14 = DeTai::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where('nhom', $request->nhom)->get();

		$detailist15 = DeTai::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where('nam_detai',$request->nam_detai)->get();

		$detailist34 = DeTai::where([['ky',$request->ky],['nhom',$request->nhom]])->get();

		$detailist35 = DeTai::where([['ky',$request->ky],['nam_detai',$request->nam_detai]])->get();

		$detailist45 = DeTai::where([['nhom',$request->nhom],['nam_detai',$request->nam_detai]])->get();

		$detailist123 = DeTai::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where('ky',$request->ky)->get();

		$detailist124 = DeTai::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where('nhom', $request->nhom)->get();

		$detailist125 = DeTai::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where('nam_detai',$request->nam_detai)->get();

		$detailist134 = DeTai::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where([['ky',$request->ky],['nhom', $request->nhom]])->get();

		$detailist135 = DeTai::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where([['ky',$request->ky],['nam_detai',$request->nam_detai]])->get();

		$detailist145 = DeTai::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where([['nhom', $request->nhom],['nam_detai',$request->nam_detai]])->get();

		$detailist345 = DeTai::where([['ky',$request->ky],['nhom',$request->nhom],['nam_detai',$request->nam_detai]])->get();

		$detailist1234 = DeTai::whereHas('thanhvien', function($qr) use ($request) {
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nhom', $request->nhom]])->get();

		$detailist1235 = DeTai::whereHas('thanhvien', function($qr) use ($request) {
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nam_detai',$request->nam_detai]])->get();

		$detailist1245 = DeTai::whereHas('thanhvien', function($qr) use ($request) {
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['nhom', $request->nhom],['nam_detai',$request->nam_detai]])->get();

		$row = DeTai::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nhom', $request->nhom],['nam_detai',$request->nam_detai]])->count();

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_detai == 0){
			$row1 = DeTai::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_detai == 0){
			$row3 = DeTai::where('ky',$request->ky)->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_detai == 0){
			$row4 = DeTai::where('nhom', $request->nhom)->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_detai != 0){
			$row5 = DeTai::where('nam_detai',$request->nam_detai)->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_detai == 0){
			$row12 = DeTai::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_detai == 0){
			$row13 = DeTai::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where('ky', $request->ky)->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_detai == 0){
			$row14 = DeTai::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where('nhom', $request->nhom)->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_detai != 0){
			$row15 = DeTai::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where('nam_detai',$request->nam_detai)->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_detai == 0){
			$row34 = DeTai::where([['ky',$request->ky],['nhom',$request->nhom]])->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_detai != 0){
			$row35 = DeTai::where([['ky',$request->ky],['nam_detai',$request->nam_detai]])->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_detai != 0){
			$row45 = DeTai::where([['nhom',$request->nhom],['nam_detai',$request->nam_detai]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_detai == 0){
			$row123 = DeTai::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where('ky', $request->ky)->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_detai == 0){
			$row124 = DeTai::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where('nhom', $request->nhom)->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_detai != 0){
			$row125 = DeTai::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where('nam_detai',$request->nam_detai)->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_detai == 0){
			$row134 = DeTai::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where([['ky',$request->ky],['nhom', $request->nhom]])->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_detai != 0){
			$row135 = DeTai::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where([['ky',$request->ky],['nam_detai',$request->nam_detai]])->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_detai != 0){
			$row145 = DeTai::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where([['nhom', $request->nhom],['nam_detai',$request->nam_detai]])->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_detai != 0){
			$row345 = DeTai::where([['ky',$request->ky],['nhom',$request->nhom],['nam_detai',$request->nam_detai]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_detai == 0){
			$row1234 = DeTai::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where([['ky',$request->ky],['nhom', $request->nhom]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_detai != 0){
			$row1235 = DeTai::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where([['ky',$request->ky],['nam_detai',$request->nam_detai]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_detai != 0){
			$row1245 = DeTai::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where([['nhom', $request->nhom],['nam_detai',$request->nam_detai]])->count();
		}

		$kllist = KhoaLuan::all();

		$kl = KhoaLuan::find($request->id);
		$hd = HoiDong::with('thanhvien')->where([
			['ky',$request->ky],
			['nam_hoidong',$request->nam_khoaluan],
			['nhom',$request->nhom]
		])->get();
		return view('component/locdetai', compact('detailist','detailist1','detailist3','detailist4','detailist5','detailist12','detailist13','detailist14','detailist15','detailist34','detailist35','detailist45','detailist123','detailist124','detailist125','detailist134','detailist135','detailist145','detailist345','detailist1234','detailist1235','detailist1245','row','row1','row3','row4','row5','row12','row13','row14','row15','row34','row35','row45','row123','row124','row125','row134','row135','row145','row345','row1234','row1235','row1245','kllist','kl','hd'));
	}

	public function loadDSKhoaLuan(Request $request)
	{
		$khoaluanlist = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist1 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist3 = KhoaLuan::where('ky',$request->ky)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist4 = KhoaLuan::where('nhom', $request->nhom)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist5 = KhoaLuan::where('nam_khoaluan',$request->nam_khoaluan)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist12 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist13 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where('ky',$request->ky)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist14 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where('nhom', $request->nhom)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist15 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where('nam_khoaluan',$request->nam_khoaluan)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist34 = KhoaLuan::where([['ky',$request->ky],['nhom', $request->nhom]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist35 = KhoaLuan::where([['ky',$request->ky],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist45 = KhoaLuan::where([['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist123 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where('ky',$request->ky)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist124 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where('nhom', $request->nhom)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist125 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where('nam_khoaluan',$request->nam_khoaluan)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist134 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where([['ky',$request->ky],['nhom', $request->nhom]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist135 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where([['ky',$request->ky],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist145 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where([['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist345 = KhoaLuan::where([['ky',$request->ky],['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist1234 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nhom', $request->nhom]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist1235 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist1245 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['nhom',$request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$row = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->count();

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_khoaluan == 0){
			$row1 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan == 0){
			$row3 = KhoaLuan::where('ky',$request->ky)->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row4 = KhoaLuan::where('nhom', $request->nhom)->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row5 = KhoaLuan::where('nam_khoaluan', $request->nam_khoaluan)->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_khoaluan == 0){
			$row12 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan == 0){
			$row13 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where('ky',$request->ky)->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row14 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where('nhom',$request->nhom)->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row15 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where('nam_khoaluan', $request->nam_khoaluan)->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row34 = KhoaLuan::where([['ky',$request->ky],['nhom', $request->nhom]])->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row35 = KhoaLuan::where([['ky',$request->ky],['nam_khoaluan', $request->nam_khoaluan]])->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan != 0){
			$row45 = KhoaLuan::where([['nhom', $request->nhom],['nam_khoaluan', $request->nam_khoaluan]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan == 0){
			$row123 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where('ky',$request->ky)->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row124 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where('nhom', $request->nhom)->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row125 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where('nam_khoaluan',$request->nam_khoaluan)->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row134 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where([['ky',$request->ky],['nhom', $request->nhom]])->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row135 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where([['ky',$request->ky],['nam_khoaluan',$request->nam_khoaluan]])->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan != 0){
			$row145 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where([['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_khoaluan != 0){
			$row345 = KhoaLuan::where([['ky',$request->ky],['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row1234 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where([['ky',$request->ky],['nhom', $request->nhom]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row1235 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where([['ky',$request->ky],['nam_khoaluan',$request->nam_khoaluan]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan != 0){
			$row1245 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where([['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->count();
		}
		
		return view('component/dskhoaluan', compact('khoaluanlist','khoaluanlist1','khoaluanlist3','khoaluanlist4','khoaluanlist5','khoaluanlist12','khoaluanlist13','khoaluanlist14','khoaluanlist15','khoaluanlist34','khoaluanlist35','khoaluanlist45','khoaluanlist123','khoaluanlist124','khoaluanlist125','khoaluanlist134','khoaluanlist135','khoaluanlist145','khoaluanlist345','khoaluanlist1234','khoaluanlist1235','khoaluanlist1245','row','row1','row3','row4','row5','row12','row13','row14','row15','row34','row35','row45','row123','row124','row125','row134','row135','row145','row345','row1234','row1235','row1245'));
	}

	public function loadXacNhanKL(Request $request)
	{
		$khoaluanlist = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist1 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist3 = KhoaLuan::where('ky',$request->ky)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist4 = KhoaLuan::where('nhom', $request->nhom)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist5 = KhoaLuan::where('nam_khoaluan',$request->nam_khoaluan)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist12 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist13 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where('ky',$request->ky)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist14 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where('nhom', $request->nhom)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist15 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where('nam_khoaluan',$request->nam_khoaluan)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist34 = KhoaLuan::where([['ky',$request->ky],['nhom', $request->nhom]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist35 = KhoaLuan::where([['ky',$request->ky],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist45 = KhoaLuan::where([['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist123 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where('ky',$request->ky)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist124 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where('nhom', $request->nhom)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist125 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where('nam_khoaluan',$request->nam_khoaluan)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist134 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where([['ky',$request->ky],['nhom', $request->nhom]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist135 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where([['ky',$request->ky],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist145 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where([['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist345 = KhoaLuan::where([['ky',$request->ky],['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist1234 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nhom', $request->nhom]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist1235 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist1245 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['nhom',$request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$row = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->count();

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_khoaluan == 0){
			$row1 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan == 0){
			$row3 = KhoaLuan::where('ky',$request->ky)->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row4 = KhoaLuan::where('nhom', $request->nhom)->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row5 = KhoaLuan::where('nam_khoaluan', $request->nam_khoaluan)->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_khoaluan == 0){
			$row12 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan == 0){
			$row13 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where('ky',$request->ky)->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row14 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where('nhom',$request->nhom)->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row15 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where('nam_khoaluan', $request->nam_khoaluan)->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row34 = KhoaLuan::where([['ky',$request->ky],['nhom', $request->nhom]])->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row35 = KhoaLuan::where([['ky',$request->ky],['nam_khoaluan', $request->nam_khoaluan]])->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan != 0){
			$row45 = KhoaLuan::where([['nhom', $request->nhom],['nam_khoaluan', $request->nam_khoaluan]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan == 0){
			$row123 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where('ky',$request->ky)->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row124 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where('nhom', $request->nhom)->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row125 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where('nam_khoaluan',$request->nam_khoaluan)->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row134 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where([['ky',$request->ky],['nhom', $request->nhom]])->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row135 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where([['ky',$request->ky],['nam_khoaluan',$request->nam_khoaluan]])->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan != 0){
			$row145 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where([['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_khoaluan != 0){
			$row345 = KhoaLuan::where([['ky',$request->ky],['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row1234 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where([['ky',$request->ky],['nhom', $request->nhom]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row1235 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where([['ky',$request->ky],['nam_khoaluan',$request->nam_khoaluan]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan != 0){
			$row1245 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where([['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->count();
		}

		return view('component/xacnhankl', compact('khoaluanlist','khoaluanlist1','khoaluanlist3','khoaluanlist4','khoaluanlist5','khoaluanlist12','khoaluanlist13','khoaluanlist14','khoaluanlist15','khoaluanlist34','khoaluanlist35','khoaluanlist45','khoaluanlist123','khoaluanlist124','khoaluanlist125','khoaluanlist134','khoaluanlist135','khoaluanlist145','khoaluanlist345','khoaluanlist1234','khoaluanlist1235','khoaluanlist1245','row','row1','row3','row4','row5','row12','row13','row14','row15','row34','row35','row45','row123','row124','row125','row134','row135','row145','row345','row1234','row1235','row1245'));
	}

	public function loadXacNhanKL2(Request $request) {
		$kl = KhoaLuan::find($request->id);
		$hd = HoiDong::with('thanhvien')->where([
			['ky',$kl->ky],
			['nam_hoidong',$kl->nam_khoaluan],
			['nhom',$kl->nhom]
		])->get();
		$tl = ThietLapHoiDong::where([
			['ky',$kl->ky],
			['nam_thietlap',$kl->nam_khoaluan],
			['nhom',$kl->nhom]
		])->get();
		$gv = ThanhVien::where('quyen',2)->where('khoa_thanhvien',$kl->thanhvien->khoa_thanhvien)->get();
		return view('component/child/xacnhankl2', compact('kl','hd','gv','tl'));
	}

	public function loadThietLapHD(Request $request)
	{
		$data['tl'] = ThietLapHoiDong::find($request->idhoidong);
		if ($request->idthietlap) {
			$data['idthietlap'] = $request->idthietlap;
		}
		return view('component/child/thietlap', $data);
	}
	
	public function loadCapNhatDiem(Request $request) {
		$kl = KhoaLuan::find($request->id);
		$hd = HoiDong::with('thanhvien')->where([
			['ky',$kl->ky],
			['nam_hoidong',$kl->nam_khoaluan],
			['nhom',$kl->nhom]
		])->get();
		$tl = ThietLapHoiDong::find($kl->thietlap_khoaluan);
		return view('component/child/capnhatdiem', compact('kl','hd','tl'));
	}

	public function loadBaoCao(Request $request){
		$khoaluanlist = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist1 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist3 = KhoaLuan::where('ky',$request->ky)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist4 = KhoaLuan::where('nhom', $request->nhom)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist5 = KhoaLuan::where('nam_khoaluan',$request->nam_khoaluan)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist12 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist13 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where('ky',$request->ky)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist14 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where('nhom', $request->nhom)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist15 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where('nam_khoaluan',$request->nam_khoaluan)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist34 = KhoaLuan::where([['ky',$request->ky],['nhom', $request->nhom]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist35 = KhoaLuan::where([['ky',$request->ky],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist45 = KhoaLuan::where([['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist123 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where('ky',$request->ky)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist124 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where('nhom', $request->nhom)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist125 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where('nam_khoaluan',$request->nam_khoaluan)->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist134 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where([['ky',$request->ky],['nhom', $request->nhom]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist135 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where([['ky',$request->ky],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist145 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where([['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist345 = KhoaLuan::where([['ky',$request->ky],['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist1234 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nhom', $request->nhom]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist1235 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$khoaluanlist1245 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['nhom',$request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->orderBy('id_khoaluan','desc')->get();

		$row = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->count();

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_khoaluan == 0){
			$row1 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan == 0){
			$row3 = KhoaLuan::where('ky',$request->ky)->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row4 = KhoaLuan::where('nhom', $request->nhom)->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row5 = KhoaLuan::where('nam_khoaluan', $request->nam_khoaluan)->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_khoaluan == 0){
			$row12 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan == 0){
			$row13 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where('ky',$request->ky)->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row14 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where('nhom',$request->nhom)->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row15 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where('nam_khoaluan', $request->nam_khoaluan)->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row34 = KhoaLuan::where([['ky',$request->ky],['nhom', $request->nhom]])->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row35 = KhoaLuan::where([['ky',$request->ky],['nam_khoaluan', $request->nam_khoaluan]])->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan != 0){
			$row45 = KhoaLuan::where([['nhom', $request->nhom],['nam_khoaluan', $request->nam_khoaluan]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan == 0){
			$row123 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where('ky',$request->ky)->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row124 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where('nhom', $request->nhom)->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row125 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where('nam_khoaluan',$request->nam_khoaluan)->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row134 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where([['ky',$request->ky],['nhom', $request->nhom]])->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row135 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where([['ky',$request->ky],['nam_khoaluan',$request->nam_khoaluan]])->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan != 0){
			$row145 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where([['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_khoaluan != 0){
			$row345 = KhoaLuan::where([['ky',$request->ky],['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row1234 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where([['ky',$request->ky],['nhom', $request->nhom]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row1235 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where([['ky',$request->ky],['nam_khoaluan',$request->nam_khoaluan]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan != 0){
			$row1245 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where([['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->count();
		}
		
		return view('component/baocao', compact('khoaluanlist','khoaluanlist1','khoaluanlist3','khoaluanlist4','khoaluanlist5','khoaluanlist12','khoaluanlist13','khoaluanlist14','khoaluanlist15','khoaluanlist34','khoaluanlist35','khoaluanlist45','khoaluanlist123','khoaluanlist124','khoaluanlist125','khoaluanlist134','khoaluanlist135','khoaluanlist145','khoaluanlist345','khoaluanlist1234','khoaluanlist1235','khoaluanlist1245','row','row1','row3','row4','row5','row12','row13','row14','row15','row34','row35','row45','row123','row124','row125','row134','row135','row145','row345','row1234','row1235','row1245'));
	}

	public function loadCongKhai(Request $request){
		$bc = KhoaLuan::find($request->id);
		return view('component/child/congkhai', compact('bc'));
	}

	public function loadTimKiem(Request $request) {
		$tk = KhoaLuan::find($request->id);
		$hd = HoiDong::with('thanhvien')->where([
			['ky',$tk->ky],
			['nam_hoidong',$tk->nam_khoaluan],
			['nhom',$tk->nhom]
		])->get();
		$tl = ThietLapHoiDong::find($tk->thietlap_khoaluan);
		return view('component.child.timkiem', compact('tk','tl','hd'));
	}

	public function loadThongKeTyLe(Request $request){
		$data['nganhlist'] = Nganh::whereHas('khoaluan', function($qr) use ($request){
			$qr->where('nam_khoaluan', $request->nam_khoaluan);
		})->get();
		return view('component.thongketyle', $data);
	}

	public function loadThongKe(Request $request){
		$tk = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->get();

		$tk1 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->get();

		$tk3 = KhoaLuan::where('ky',$request->ky)->get();

		$tk4 = KhoaLuan::where('nhom',$request->nhom)->get();

		$tk5 = KhoaLuan::where('nam_khoaluan',$request->nam_khoaluan)->get();
		
		$tk12 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->get();

		$tk13 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where('ky',$request->ky)->get();

		$tk14 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where('nhom', $request->nhom)->get();

		$tk15 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where('nam_khoaluan',$request->nam_khoaluan)->get();

		$tk34 = KhoaLuan::where([['ky',$request->ky],['nhom',$request->nhom]])->get();

		$tk35 = KhoaLuan::where([['ky',$request->ky],['nam_khoaluan',$request->nam_khoaluan]])->get();

		$tk45 = KhoaLuan::where([['nhom',$request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->get();

		$tk123 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where('ky',$request->ky)->get();

		$tk124 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where('nhom', $request->nhom)->get();

		$tk125 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where('nam_khoaluan',$request->nam_khoaluan)->get();

		$tk134 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where([['ky',$request->ky],['nhom', $request->nhom]])->get();

		$tk135 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where([['ky',$request->ky],['nam_khoaluan',$request->nam_khoaluan]])->get();

		$tk45 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->where([['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->get();

		$tk345 = KhoaLuan::where([['ky',$request->ky],['nhom',$request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->get();

		$tk1234 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request) {
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nhom', $request->nhom]])->get();

		$tk1235 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request) {
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nam_khoaluan',$request->nam_khoaluan]])->get();

		$tk1245 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request) {
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['nhom',$request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->get();

		$row = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->where([['ky',$request->ky],['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->count();

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_khoaluan == 0){
			$row1 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan == 0){
			$row3 = KhoaLuan::where('ky',$request->ky)->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row4 = KhoaLuan::where('nhom', $request->nhom)->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row5 = KhoaLuan::where('nam_khoaluan',$request->nam_khoaluan)->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_khoaluan == 0){
			$row12 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan == 0){
			$row13 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where('ky', $request->ky)->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row14 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where('nhom', $request->nhom)->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row15 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where('nam_khoaluan',$request->nam_khoaluan)->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row34 = KhoaLuan::where([['ky',$request->ky],['nhom',$request->nhom]])->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row35 = KhoaLuan::where([['ky',$request->ky],['nam_khoaluan',$request->nam_khoaluan]])->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan != 0){
			$row45 = KhoaLuan::where([['nhom',$request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan == 0){
			$row123 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where('ky', $request->ky)->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row124 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where('nhom', $request->nhom)->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row125 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where('nam_khoaluan',$request->nam_khoaluan)->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row134 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where([['ky',$request->ky],['nhom', $request->nhom]])->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row135 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where([['ky',$request->ky],['nam_khoaluan',$request->nam_khoaluan]])->count();
		}

		if($request->khoa != 0 && $request->nganh == 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan != 0){
			$row145 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->where([['nhom', $request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->count();
		}

		if($request->khoa == 0 && $request->nganh == 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_khoaluan != 0){
			$row345 = KhoaLuan::where([['ky',$request->ky],['nhom',$request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky != 0 && $request->nhom != 0 && $request->nam_khoaluan == 0){
			$row1234 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where([['ky',$request->ky],['nhom', $request->nhom]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky != 0 && $request->nhom == 0 && $request->nam_khoaluan != 0){
			$row1235 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where([['ky',$request->ky],['nam_khoaluan',$request->nam_khoaluan]])->count();
		}

		if($request->khoa != 0 && $request->nganh != 0 && $request->ky == 0 && $request->nhom != 0 && $request->nam_khoaluan != 0){
			$row1245 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->where([['nhom',$request->nhom],['nam_khoaluan',$request->nam_khoaluan]])->count();
		}

		$tvlist = ThanhVien::where('quyen',3)->get();

		return view('component/thongke', compact('tk','tk1','tk3','tk4','tk5','tk12','tk13','tk14','tk15','tk34','tk35','tk45','tk123','tk124','tk125','tk134','tk135','tk145','tk345','tk1234','tk1235','tk1245','row','row1','row3','row4','row5','row12','row13','row14','row15','row34','row35','row45','row123','row124','row125','row134','row135','row145','row345','row1234','row1235','row1245','tvlist'));
	}

	public function loadDSSV(Request $request){
		$thanhvien1 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->orderBy('id_khoaluan','desc')->get();		
		
		$thanhvien12 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->orderBy('id_khoaluan','desc')->get();
		
		if($request->khoa != 0){
			$row1 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->count();
		}
		
		if($request->khoa != 0 && $request->nganh != 0){
			$row12 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->count();
		}
		
		$namlist = Nam::all();
		return view('component/dssv_diemkl', compact('thanhvien1','thanhvien12','row1','row12','namlist'));
	}

	public function loadBBDiemKL(Request $request){
		$data=array();
		$nganh=array();
		foreach($request->sinhvien as $value)
		{
			$thanhvien=ThanhVien::find($value);
			$nganhhoc=ThanhVien::find($value)->nganh_thanhvien;
			$data[]=$thanhvien;
			$nganh[]=$nganhhoc;
		}
		$data['data']=$data;

		$data['nganh']=$nganh;
// dd($nganh);
		$ky=array();
		foreach($request->ky as $value)
		{
			$ky[]=$value;
		}
		$data['ky']=$ky;

		$nhom=array();
		foreach($request->nhom as $value)
		{
			$nhom[]=$value;
		}
		$data['nhom']=$nhom;

		$nam=array();
		foreach($request->nam as $value)
		{
			$nam[]=$value;
		}
		$data['nam']=$nam;
		$data['namlist'] = Nam::find($nam[0]);
		// dd($data['nganh']);

		return view('component/bienban_diemkl', $data);
	}
	

	public function loadDSSV2(Request $request){
		$thanhvien1 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->orderBy('id_khoaluan','desc')->get();

		$thanhvien12 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->orderBy('id_khoaluan','desc')->get();
		
		if($request->khoa != 0){
			$row1 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->count();
		}

		if($request->khoa != 0 && $request->nganh != 0){
			$row12 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->count();
		}
		
		return view('component/dssv_chamdiemkl', compact('thanhvien1','thanhvien12','row1','row12'));
	}

	public function loadBBChamDiemKL(Request $request){
		$data=$request->sinhvien;

		$thanhvien=ThanhVien::find($data[0]);

		$giaovien = $thanhvien->laydiem->giaovien;
		
		$ngay = Carbon::now()->day;

		$thang = Carbon::now()->month;

		$nam = Carbon::now()->year;
		return view('component/bienban_chamdiemkl', compact('ngay', 'thang', 'nam', 'data','thanhvien','giaovien'));
	}

	public function loadDSSV3(Request $request){
		$thanhvien1 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where('khoa_thanhvien', $request->khoa);
		})->orderBy('id_khoaluan','desc')->get();

		$thanhvien12 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
			$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
		})->orderBy('id_khoaluan','desc')->get();

		if($request->khoa != 0){
			$row1 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where('khoa_thanhvien', $request->khoa);
			})->count();
		}

		if($request->khoa != 0 && $request->nganh != 0){
			$row12 = KhoaLuan::whereHas('thanhvien', function($qr) use ($request){
				$qr->where([['khoa_thanhvien', $request->khoa],['nganh_thanhvien', $request->nganh]]);
			})->count();
		}
		return view('component/dssv_danhgia', compact('thanhvien1','thanhvien12','row1','row12'));
	}

	public function loadBBDanhGia(Request $request){

		$data=array();
		foreach($request->sinhvien as $value)
		{
			$thanhvien=ThanhVien::find($value);
			$data[]=$thanhvien;
		}
		$data['data']=$data;

		$diem=array();
		foreach($request->diem as $value)
		{
			$diem[]=$value;
		}
		$data['diem']=$diem;

		$data['thanhvien2'] = ThanhVien::all();

		return view('component/bienban_danhgia',$data);
	}

	public function loadTrangThai(Request $request){
		$data = json_decode(stripslashes($request->data));
		ThongBao::wherein('id_thongbao',$data)->update(['trangthai'=>1]);
		return "OK";
	}
}
