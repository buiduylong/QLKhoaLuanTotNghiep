<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{DeTai,ThanhVien,Nam,Khoa,KhoaLuan,ThongBao};
use Carbon\Carbon;
use Auth;

class BienBanController extends Controller
{
    public function getBBChamDiem(){
    	$data['khoalist'] = Khoa::all();
    	$data['namlist'] = Nam::all();
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
    	return view('layout/in_chamdiem',$data);
    }

    public function getBBDanhGia(){
        $data['khoalist'] = Khoa::all();
        $data['namlist'] = Nam::all();
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
    	return view('layout/in_danhgia',$data);
    }

    public function getBBDiemKL(){
    	$data['khoalist'] = Khoa::all();
    	$data['namlist'] = Nam::all();
        $data['tb'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->orderBy('created_at','desc')->take(5)->get();
        $data['dem'] = ThongBao::where('id_nhan', Auth::user()->id)->where('trangthai',0)->count();
        $data['time'] = Carbon::now();
    	return view('layout/in_diemkl',$data);
    }
}
