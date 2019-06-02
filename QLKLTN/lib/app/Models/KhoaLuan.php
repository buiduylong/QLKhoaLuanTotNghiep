<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KhoaLuan extends Model
{
    protected $table = 'khoaluan';
    protected $primaryKey = 'id_khoaluan';
    protected $guarded = [];

    function thanhvien()
    {
    	return $this->hasOne('App\Models\ThanhVien', 'id', 'thanhvien_khoaluan');
    }

    function nam()
    {
    	return $this->hasOne('App\Models\Nam', 'id_nam', 'nam_khoaluan');
    }

    function khoa()
    {
        return $this->hasOne('App\Models\Khoa', 'id_khoa', 'khoa_khoaluan');
    }

    function nganh()
    {
        return $this->belongsTo('App\Models\Nganh', 'nganh_khoaluan', 'id_nganh');
    }

    public function giaovien()
    {
        return $this->belongsToMany('App\Models\ThanhVien', 'thanhvien_hoidong', 'khoaluan_id', 'thanhvien_id')->withTimestamps()->withPivot('chuc_vu');
    }

    function huongdan()
    {
        return $this->hasOne('App\Models\ThanhVien', 'id', 'giao_vien');
    }

    function thietlap()
    {
        return $this->belongsTo('App\Models\ThietLapHoiDong', 'thietlap_khoaluan', 'id_thietlap');
    }
}
