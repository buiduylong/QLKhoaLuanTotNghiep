<?php

use Illuminate\Database\Seeder;

class ThanhVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	[
        		'ma_thanhvien' => 'A24912',
        		'ten_thanhvien' => 'Bùi Duy Long',
        		'password' => bcrypt('123456'),
        		'anh_thanhvien' => 'long.jpg',
        		'quyen' => 1,
        		'khoa_thanhvien' => 1,
        		'nganh_thanhvien' => 1,
        	]
        ];
        DB::table('thanhvien')->insert($data);
    }
}
