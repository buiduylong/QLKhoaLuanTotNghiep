<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get( 'conver-pass' ,function()
{
	$users=App\models\ThanhVien::all();
	foreach( $users as $row)
	{
		$user=App\models\ThanhVien::find($row->id);
		$user->password=bcrypt(123456);
		$user->save();
	}
});


Route::get('login','LoginController@getLogin')->middleware('CheckLogin');
Route::post('login','LoginController@postLogin');

Route::get('logout','TrangChuController@getLogout');

Route::get('trangchu','TrangChuController@getTrangchu')->middleware('CheckLogout');

Route::get('timkiem', 'TrangChuController@TimKiem')->middleware('CheckLogout');
Route::post('timkiem','KhoaLuanController@CapNhatDiem')->middleware('CheckLogout');


Route::group(['prefix'=>'thanhvien','middleware'=>'CheckLogout'], function(){
	Route::get('dsthanhvien','ThanhVienController@getDSTV');
	Route::post('dsthanhvien','ThanhVienController@loadDataAjax');
	Route::get('them_thanhvien','ThanhVienController@getThemTV');
	Route::post('them_thanhvien','ThanhVienController@postThemTV');
	Route::get('sua_thanhvien/{id}','ThanhVienController@getSuaTV');
	Route::post('sua_thanhvien/{id}','ThanhVienController@postSuaTV');
	Route::get('xoa_thanhvien/{id}','ThanhVienController@XoaTV');
	Route::get('import_thanhvien','ThanhVienController@getImport');
	Route::post('import_thanhvien','ThanhVienController@postImport');
	Route::get('timkiem2','ThanhVienController@TimKiem2');
});

Route::group(['prefix'=>'khoaluan','middleware'=>'CheckLogout'], function(){
	Route::get('dskhoaluan', 'KhoaLuanController@getDSKL');
	Route::post('dskhoaluan', 'KhoaLuanController@postCapNhatDiem');
	Route::get('dangkykl', 'KhoaLuanController@getDangKyKL');
	Route::post('dangkykl','KhoaLuanController@postDangKyKL');
	Route::get('xacnhankl', 'KhoaLuanController@getXacNhanKL');
	Route::post('xacnhankl', 'KhoaLuanController@postXacNhanKL');
	Route::get('xoa_dangkykl/{id}', 'KhoaLuanController@XoaDangKyKL');
	Route::get('khoaluancanhan', 'KhoaLuanController@getKhoaLuanCaNhan');
	Route::get('gvhdkhoaluan', 'KhoaLuanController@getGVHDKhoaLuan');
});

Route::group(['prefix'=>'detai','middleware'=>'CheckLogout'], function(){
	Route::get('dsdetai','DeTaiController@getDSDT');
	Route::get('them_detai','DeTaiController@getThemDeTai');
	Route::post('them_detai','DeTaiController@postThemDeTai');
	Route::get('sua_detai/{id}','DeTaiController@getSuaDeTai');
	Route::post('sua_detai/{id}','DeTaiController@postSuaDeTai');
	Route::get('xoa_detai/{id}','DeTaiController@XoaDeTai');
});

Route::group(['prefix'=>'qlhoidong','middleware'=>'CheckLogout'], function(){
	Route::get('dshoidong','QLHoiDongController@getDSHD');
	Route::get('them_tvhoidong','QLHoiDongController@getThemTVHD');
	Route::post('them_tvhoidong','QLHoiDongController@postThemTVHD');
	Route::post('dshoidong', 'QLHoiDongController@postSuaTVHD');
	Route::get('xoa_tvhd/{id}', 'QLHoiDongController@XoaTVHD');
	Route::get('thietlap_hoidong','QLHoiDongController@getThietLapHD');
	Route::post('thietlap_hoidong','QLHoiDongController@postThietLapHD');
	Route::get('danhsachhoidong','QLHoiDongController@getDanhSachHoiDong');
	Route::get('sua_hoidong/{id}','QLHoiDongController@getSuaHoiDong');
	Route::post('sua_hoidong/{id}','QLHoiDongController@postSuaHoiDong');
	Route::get('xoa_hoidong/{id}','QLHoiDongController@XoaHoiDong');
});

Route::group(['prefix'=>'qlbaocao','middleware'=>'CheckLogout'], function(){
	Route::get('qlbaocao','QLBaoCaoController@getQLBaoCao');
	Route::get('sua_baocao/{id}','QLBaoCaoController@getSuaBaoCao');
	Route::post('sua_baocao/{id}','QLBaoCaoController@postSuaBaoCao');
	Route::post('qlbaocao','QLBaoCaoController@postCongKhai');
	Route::get('xoa_baocao/{id}','QLBaoCaoController@XoaBaoCao' );
});

Route::group(['prefix'=>'qlkhoa','middleware'=>'CheckLogout'], function(){
	Route::get('qlkhoa','QLKhoaController@getQLKhoa');
	Route::post('qlkhoa','QLKhoaController@postQLKhoa');
	Route::get('sua_khoa/{id}','QLKhoaController@getSuaKhoa');
	Route::post('sua_khoa/{id}','QLKhoaController@postSuaKhoa');
	Route::get('xoa_khoa/{id}','QLKhoaController@XoaKhoa');
});

Route::group(['prefix'=>'qlnganh','middleware'=>'CheckLogout'], function(){
	Route::get('qlnganh','QLNganhController@getQLNganh');
	Route::post('qlnganh','QLNganhController@postQLNganh');
	Route::get('sua_nganh/{id}','QLNganhController@getSuaNganh');
	Route::post('sua_nganh/{id}','QLNganhController@postSuaNganh');
	Route::get('xoa_nganh/{id}','QLNganhController@XoaNganh');
});

Route::group(['prefix' => 'qlbomon','middleware'=>'CheckLogout'], function(){
    Route::get('/','QLBoMonController@getQLBoMon');
    Route::post('/','QLBoMonController@postQLBoMon');
    Route::get('sua_bomon/{id}','QLBoMonController@getSuaBoMon');
    Route::post('sua_bomon/{id}','QLBoMonController@postSuaBoMon');
    Route::get('xoa_bomon/{id}','QLBoMonController@XoaBoMon');
});

Route::group(['prefix'=>'qlnam','middleware'=>'CheckLogout'], function(){
	Route::get('qlnam','QLNamController@getQLNam');
	Route::post('qlnam','QLNamController@postQLNam');
	Route::get('sua_nam/{id}','QLNamController@getSuaNam');
	Route::post('sua_nam/{id}','QLNamController@postSuaNam');
	Route::get('xoa_nam/{id}','QLNamController@XoaNam');
});

Route::group(['prefix'=>'thongke','middleware'=>'CheckLogout'], function(){
	Route::get('thongkebieudo','ThongKeController@getThongKeDangBieuDo');
	Route::get('thongkebang','ThongKeController@getThongKeDangBang');
});

Route::group(['prefix' => 'bienban','middleware'=>'CheckLogout'], function() {
    Route::get('bienban_chamdiem','BienBanController@getBBChamDiem');
    Route::get('bienban_danhgia','BienBanController@getBBDanhGia');
    Route::get('bienban_diemkl','BienBanController@getBBDiemKL');
});

Route::group(['prefix'=>'ajax','middleware'=>'CheckLogout'], function(){
	Route::get('/nganh','LoadAjax@loadNganh');
	Route::get('/khoa','LoadAjax@loadKhoa'); 
	Route::get('/chitiettv','LoadAjax@loadChiTiet');
	Route::get('/tv','LoadAjax@loadThanhVien');
	Route::get('/dshoidong','LoadAjax@loadDSHoiDong');
	Route::get('/giaovien','LoadAjax@loadGiaoVien');
	Route::get('/suathongtin_hoidong','LoadAjax@loadSuaTTHD');
	Route::get('/chitiet_hoidong','LoadAjax@loadChiTietHoiDong');
	Route::get('/locdetai','LoadAjax@loadLocDeTai');
	Route::get('/dskhoaluan','LoadAjax@loadDSKhoaLuan');
	Route::get('/capnhatdiem','LoadAjax@loadCapNhatDiem');
	Route::get('/xacnhankl','LoadAjax@loadXacNhanKL');
	Route::get('/xacnhankl2','LoadAjax@loadXacNhanKL2');
	Route::get('/thietlap','LoadAjax@loadThietLapHD');
	Route::get('/baocao','LoadAjax@loadBaoCao');
	Route::get('/congkhai','LoadAjax@loadCongKhai');
	Route::get('/timkiem','LoadAjax@loadTimKiem');
	Route::get('/thongke','LoadAjax@loadThongKe');
	Route::get('/thongketyle','LoadAjax@loadThongKeTyLe');
	Route::get('/dssv_diemkl','LoadAjax@loadDSSV');
	Route::get('/bienban_diemkl','LoadAjax@loadBBDiemKL');
	Route::get('/dssv_chamdiemkl','LoadAjax@loadDSSV2');
	Route::get('/bienban_chamdiemkl','LoadAjax@loadBBChamDiemKL');
	Route::get('/dssv_danhgia','LoadAjax@loadDSSV3');
	Route::get('/bienban_danhgia','LoadAjax@loadBBDanhGia');
	Route::get('/trangthai', 'LoadAjax@loadTrangThai');
});

Route::group(['prefix' => 'thongbao','middleware'=>'CheckLogout'], function() {
    Route::get('/', 'ThongBaoController@getThongBao');
    Route::post('/','ThongBaoController@postTrangThai');
});


