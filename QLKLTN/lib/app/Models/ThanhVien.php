<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThanhVien extends Model
{
    protected $table = 'thanhvien';
    protected $primaryKey = 'id';
    protected $fillable  = [
        'ma_thanhvien',
        'ten_thanhvien',
        'password',
        // 'ngaysinh',
        'lop',
        'quyen',
        'khoa_thanhvien',
        'nganh_thanhvien',
        'bomon_thanhvien'
    ];

    function khoa()
    {
    	return $this->BelongsTo('App\Models\Khoa','khoa_thanhvien', 'id_khoa');
    }

    function nganh()
    {
    	return $this->BelongsTo('App\Models\Nganh','nganh_thanhvien','id_nganh');
    }
    
    public function laydiem()
    {
        return $this->HasOne('App\Models\KhoaLuan','thanhvien_khoaluan', 'id');    
    }

    public function khoaluan()
    {
        return $this->belongsToMany('App\Models\KhoaLuan','thanhvien_hoidong', 'thanhvien_id', 'khoaluan_id')
          ->withPivot('chuc_vu')->withTimestamps();
    }

    public function bomon(){
        return $this->BelongsTo('App\Models\BoMon','bomon_thanhvien', 'id_bomon');
    }
    
}
