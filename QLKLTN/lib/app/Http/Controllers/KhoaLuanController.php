<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{KhoaLuan,ThanhVien,Nam,Khoa,Thanhvien_Hoidong,DeTai,ThietLapHoiDong,ThongBao};
use App\Http\Requests\ThemKhoaLuanRequest;
use App\Http\Requests\SuaKhoaLuanRequest;
use Carbon\Carbon;
use Auth;

class KhoaLuanController extends Controller
{
    public function getDSKL(){
        $data['lh'] = ThanhVien::where('quyen',1)->get();
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
        $data['khoalist'] = Khoa::all();
        $data['namlist'] = Nam::all();
        $data['khoaluanlist'] = KhoaLuan::with('thanhvien')->get();
        return view('layout/dskhoaluan',$data);
    }

    public function getDangKyKL(){
        $data['lh'] = ThanhVien::where('quyen',1)->get();
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $data['khoaluan'] = Nam::where('nam','>=',date('Y'))->get();
        $data['detailist'] = DeTai::all();
        return view('layout/dangkykl',$data);
    }

    public function postDangKyKL(Request $request){
        if($request->ky=='unselect' || $request->nhom=='unselect' || $request->nam_khoaluan=='unselect'){
            return back()->withInput()->with('thongbao2','Không được để trống Kỳ, Nhóm hoặc Năm');
        }
        else{
            $kl = KhoaLuan::where([['ky',$request->ky],['nhom',$request->nhom],['nam_khoaluan',$request->nam_khoaluan],['thanhvien_khoaluan',Auth::user()->id]])->count();
            $kls = KhoaLuan::where([['thanhvien_khoaluan',Auth::user()->id],['diem1',null],['diem2',null],['diem3',null],['diem4',null]])->count();
            if($kl == 0 && $kls == 0){
                $khoaluan = new KhoaLuan;
                if(isset($request->de_tai)){
                    $khoaluan->de_tai = $request->de_tai;
                }
                else{
                    $khoaluan->de_tai = $request->chon_detai;
                }
                $khoaluan->ky = $request->ky;
                $khoaluan->nhom = $request->nhom;
                $khoaluan->nam_khoaluan = $request->nam_khoaluan;
                $khoaluan->thanhvien_khoaluan = Auth::user()->id;
                $khoaluan->khoa_khoaluan = Auth::user()->khoa_thanhvien;
                $khoaluan->nganh_khoaluan = Auth::user()->nganh_thanhvien;
                $khoaluan->save();
                $tv = new ThanhVien;
                if(Auth::user()->quyen == 3){
                    $arr['trang_thai'] = 1;
                    $tv::where('id',Auth::user()->id)->update($arr);
                }
                $t = ThanhVien::where('quyen',1)->get()->toArray();
                foreach ($t as $key) {
                    $tb = new ThongBao;
                    $tb->id_gui = Auth::user()->id;
                    $tb->id_nhan = $key['id'];
                    $tb->noi_dung = Auth::user()->ma_thanhvien." đã đăng ký khóa luận kỳ ".$request->ky." - nhóm ".$request->nhom;
                    $tb->save();
                }
                return redirect('khoaluan/dangkykl')->with('thongbao','Đăng ký khóa luận thành công'); 
            }
            else
            {
               return back()->withInput()->with('thongbao3','Bạn đã đăng ký khóa luận và chưa bảo vệ');
           }
       }
    }
    public function getXacNhanKL(){
        $data['lh'] = ThanhVien::where('quyen',1)->get();
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
        $data['khoalist'] = Khoa::all();
        $data['namlist'] = Nam::all();
        // $tb=ThongBao::find($id);
        // $tb->trangthai = 1;
        // $tb->save();
        return view('layout/xacnhankl',$data);
    }

    public function postXacNhanKL(Request $request){
        $tb = new ThongBao;
        $tb->id_gui = Auth::user()->id;
        $tb->id_nhan = $request->tv;
        $tb->noi_dung = "Khóa luận đã được xác nhận";
        $tb->save(); 

        $xn = new KhoaLuan;
        $arr['giao_vien'] = $request->giao_vien;
        $arr['de_tai'] = $request->de_tai;
        $arr['thoi_gian'] = $request->thoi_gian;
        $arr['phong'] = $request->phong;
        if($request->thietlap_khoaluan != null){
            $arr['thietlap_khoaluan'] = $request->thietlap_khoaluan;
        }
        else{
            $arr['thietlap_khoaluan'] = null;
            if($request->hd1 != null && $request->hd2 != null && $request->hd3 != null && $request->hd4 != null)
            {
                $tv = new Thanhvien_Hoidong;
                $tv->thanhvien_id = $request->hd1;
                $tv->khoaluan_id = $request->id;
                $tv->chuc_vu = 1;
                $tv->save();
                $tv = new Thanhvien_Hoidong;
                $tv->thanhvien_id = $request->hd2;
                $tv->khoaluan_id = $request->id;
                $tv->chuc_vu = 2;
                $tv->save();
                $tv = new Thanhvien_Hoidong;
                $tv->thanhvien_id = $request->hd3;
                $tv->khoaluan_id = $request->id;
                $tv->chuc_vu = 3;
                $tv->save();
                $tv = new Thanhvien_Hoidong;
                $tv->thanhvien_id = $request->hd4;
                $tv->khoaluan_id = $request->id;
                $tv->chuc_vu = 4;
                $tv->save();
            }
        }
        $xn::where('id_khoaluan',$request->id)->update($arr);

        return redirect('khoaluan/xacnhankl')->with('thongbao','Xác nhận khóa luận thành công');
    }

    public function postCapNhatDiem(Request $request){       
        $d = new KhoaLuan;
        $arr['diem1'] = $request->diem1;
        $arr['diem2'] = $request->diem2;
        $arr['diem3'] = $request->diem3;
        $arr['diem4'] = $request->diem4;
        $arr['ts1'] = $request->ts1;
        $arr['ts2'] = $request->ts2;
        $arr['ts3'] = $request->ts3;
        $arr['ts4'] = $request->ts4;
        $d::where('id_khoaluan',$request->id)->update($arr);

        $result = $request->diem1*($request->ts1/100)+$request->diem2*($request->ts2/100)+$request->diem3*($request->ts3/100)+$request->diem4*($request->ts4/100);
        return [
            'result' => $result
        ];
        // return redirect('khoaluan/dskhoaluan')->with('thongbao','Cập nhật điểm thành công');
    }

    public function XoaDangKyKL($id){
        KhoaLuan::destroy($id);
        return redirect('khoaluan/xacnhankl')->with('thongbao', 'Đã xóa thành công');
    }

    public function getKhoaLuanCaNhan(){
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
        $data['kl'] = KhoaLuan::with('nam')->where('thanhvien_khoaluan',Auth::user()->id)->get();
        return view('layout/khoaluancanhan',$data);
    }

    public function getGVHDKhoaLuan(){
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
        $data['kl'] = KhoaLuan::with('nam')->where('giao_vien',Auth::user()->id)->orderBy('id_khoaluan','desc')->get();
        return view('layout/gvhdkhoaluan',$data);
    }
}
