<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\{ThemTVRequest,ImportTVRequest};
use App\Http\Requests\SuaTVRequest;
use App\Models\{ThanhVien,Khoa,Nganh,ThongBao,BoMon};
use App\Imports\UsersImport;
use Maatwebsite\Excel\Excel;
use Carbon\Carbon;
use DB,Auth;

class ThanhVienController extends Controller
{
    private $excel;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    public function getDSTV(){
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
        // $data['time'] = Carbon::now();
        $data['dstv'] = ThanhVien::join('khoa','thanhvien.khoa_thanhvien','=','id_khoa')->join('nganh','thanhvien.nganh_thanhvien','=','id_nganh')->orderBy('id','desc')->paginate(10);
        $data['khoa'] = Khoa::all();
        $data['thanhvien'] = ThanhVien::all();
        $data['bomonlist'] = BoMon::all();
        return view('layout/dsthanhvien', $data);
    }

    public function getThemTV(){
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
        $data['khoa'] = Khoa::all();
        return view('layout/them_thanhvien', $data);
    }

    public function postThemTV(ThemTVRequest $request){
        if($request->khoa_thanhvien=='unselect' || $request->nganh_thanhvien==0 || $request->quyen=='unselect'){
            return back()->withInput()->with('thongbao2','Không được bỏ trống Khoa, Ngành hoặc Quyền của thành viên');
        }else{
            $thanhvien = new ThanhVien;
            
            $thanhvien->ma_thanhvien = $request->ma_thanhvien;
            $thanhvien->ten_thanhvien = $request->ten_thanhvien;
            $thanhvien->password = bcrypt($request->password);
            $thanhvien->ngaysinh = $request->ngaysinh;
            if ($request->hasFile('anh_thanhvien')) {
                $filename = $request->anh_thanhvien->getClientOriginalName();
                $thanhvien->anh_thanhvien = $filename;
                $request->anh_thanhvien->storeAs('avatar',$filename);
            }
            $thanhvien->quyen = $request->quyen;
            $thanhvien->khoa_thanhvien = $request->khoa_thanhvien;
            $thanhvien->nganh_thanhvien = $request->nganh_thanhvien;
            $thanhvien->lop = $request->lop;
            $thanhvien->email = $request->email;
            $thanhvien->save();
            return redirect('thanhvien/dsthanhvien')->with('thongbao', 'Đã thêm thành công');
        }
    }

    public function getSuaTV($id){
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
        $data['thanhvien'] = ThanhVien::find($id);
        $data['khoalist'] = Khoa::all();
        $data['nganhlist'] = Nganh::all();
        $data['bomonlist'] = BoMon::all();
        return view('layout/sua_thanhvien',$data);
    }

    public function postSuaTV(SuaTVRequest $request,$id){
        $thanhvien = new ThanhVien;
        $arr['ma_thanhvien'] = $request->ma_thanhvien;
        $arr['ten_thanhvien'] = $request->ten_thanhvien;
        $arr['password'] = bcrypt($request->password);
        if ($request->hasfile('anh_thanhvien')) {
            $anh_thanhvien = $request->anh_thanhvien->getClientOriginalName();
            $arr['anh_thanhvien'] = $anh_thanhvien;
            $request->anh_thanhvien->storeAs('avatar',$anh_thanhvien);
        }
        $arr['ngaysinh'] = $request->ngaysinh;
        $arr['quyen'] = $request->quyen;
        $arr['khoa_thanhvien'] = $request->khoa_thanhvien;
        $arr['nganh_thanhvien'] = $request->nganh_thanhvien;
        $arr['bomon_thanhvien'] = $request->bomon_thanhvien;
        $arr['lop'] = $request->lop;
        $arr['email'] = $request->email;
        $arr['so_dienthoai'] = $request->so_dienthoai;
        $arr['hocvi'] = $request->hocvi;
        
        $thanhvien::where('id',$id)->update($arr);
        return redirect('thanhvien/dsthanhvien')->with('thongbao','Đã sửa thành công');;
    }

    public function XoaTV($id){
        ThanhVien::destroy($id);
        return redirect('thanhvien/dsthanhvien')->with('thongbao','Đã xóa thành công');
    }

    public function TimKiem2(Request $request){
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
        $result2 = $request->result2;
        $data['keyword'] = $result2;
        $result2 = str_replace(' ', '%', $result2);
        $data['items2'] = ThanhVien::where('ten_thanhvien','like','%'.$result2.'%')->orwhere('lop','like','%'.$result2.'%')->orwhere('ma_thanhvien','like','%'.$result2.'%')->get();
        $data['khoalist'] = Khoa::all();
        return view('layout/timkiem2',$data);
    }

    public function getImport(){
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
        $data['khoalist'] = Khoa::all();
        return view('layout/import_thanhvien',$data);
    }

    // public function postImport(Request $request){
    //     Excel::import(new UsersImport, $request->file('import'));
    //     return redirect('thanhvien/dsthanhvien')->with('thongbao','Đã import thành viên thành công');
    // }

    public function postImport(Request $request){
        $all = $request->all();
        // $khoa = array_get($all,'khoa_thanhvien');
        // $nganh = array_get($all,'nganh_thanhvien');
        $import = array_get($all,'import');

        if($request->hasFile('import')) {
            // đường đãn file
            $path = $request->file('import')->getRealPath();
            // dd($path);
            // lấy dữ liêu từ file excel
            $data = $this->excel->toArray(new ThanhVien(),$request->file('import'));
            // dd($data);
            // file sheet excel đầu tiên
            $data_user = [];
            foreach ($data[0] as $key => $item){
                /*dd($data[0]);*/
                if($key > 0){
                    if(!empty($item[0])){
                        // $ma_thanhvien = $item[0];
                        // $ten_thanhvien = !empty($item[1]) ? $item[1] : '';
                        // $lop = !empty($item[2]) ? $item[2] : '';
                        // $quyen = !empty($item[3]) ? $item[3] : '';

                        $ma_thanhvien = $item[0];
                        $ten_thanhvien = !empty($item[1]) ? $item[1] : '';
                        $quyen = !empty($item[2]) ? $item[2] : '';
                        $khoa = !empty($item[3]) ? $item[3] : '';
                        $nganh = !empty($item[4]) ? $item[4] : '';
                        $lop = !empty($item[5]) ? $item[5] : '';
                        $bomon = !empty($item[6]) ? $item[6] : '';                        

                        //kiem tra neu dung la mã sinh viên va khong ton tai trong database thi tao tai khoan
                        $check_code = ThanhVien::where('ma_thanhvien',$ma_thanhvien)->first();

                        if (empty($check_code)) {
                            $data_user[] = [
                                'ma_thanhvien' => $ma_thanhvien,
                                'ten_thanhvien' => $ten_thanhvien,
                                'lop' => $lop,
                                'quyen' => $quyen,
                                'password' => bcrypt('123456'),
                                'khoa_thanhvien' => $khoa,
                                'nganh_thanhvien' => $nganh,
                                'bomon_thanhvien' => $bomon,
                            ];
                        }
                    }
                }
            }
            /*dd($data_user);*/
            // thêm 1 nhiều data thì phải dùng insert
            ThanhVien::insert($data_user);
        }
        return redirect('thanhvien/dsthanhvien')->with('thongbao','Import file danh sách thành công');
    }
}
