<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThietLapHoiDong extends Model
{
    protected $table = 'thietlap';
    protected $primaryKey = 'id_thietlap';
    protected $guarded = [];


    function thanhvien1()
    {
        return $this->hasOne('App\Models\ThanhVien', 'id', 'hd1');
    }
    function thanhvien2()
    {
        return $this->hasOne('App\Models\ThanhVien', 'id', 'hd2');
    }
    function thanhvien3()
    {
        return $this->hasOne('App\Models\ThanhVien', 'id', 'hd3');
    }
    function thanhvien4()
    {
        return $this->hasOne('App\Models\ThanhVien', 'id', 'hd4');
    }
    function khoa()
    {
        return $this->hasOne('App\Models\Khoa', 'id_khoa', 'khoa_thietlap');
    }
    function nam()
    {
        return $this->hasOne('App\Models\Nam', 'id_nam', 'nam_thietlap');
    }
    
}
