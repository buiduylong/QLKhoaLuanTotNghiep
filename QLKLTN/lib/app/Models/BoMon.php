<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BoMon extends Model
{
    protected $table = 'bomon';
    protected $primaryKey = 'id_bomon';
    protected $guarded = [];

    public function thanhvien(){
    	return $this->hasMany('App\Models\ThanhVien','bomon_thanhvien');
    }
}
