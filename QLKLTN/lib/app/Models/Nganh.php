<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nganh extends Model
{
    protected $table = 'nganh';
    protected $primaryKey = 'id_nganh';
    protected $guarded = [];

    function thanhvien()
    {
    	return $this->hasMany('App\Models\ThanhVien', 'nganh_thanhvien');
    }

    function khoa()
    {
    	return $this->belongsTo('App\Models\Khoa', 'khoa_nganh');
    }

    public function khoaluan()
    {
        return $this->hasMany('App\Models\KhoaLuan', 'nganh_khoaluan');
    }
}
