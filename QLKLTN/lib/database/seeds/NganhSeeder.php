<?php

use Illuminate\Database\Seeder;

class NganhSeeder extends Seeder
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
        		'ten_nganh' => 'Khoa học máy tính',
        		'khoa_nganh' => 1
        	],
        	[
        		'ten_nganh' => 'Truyền thông và mạng máy tính',
        		'khoa_nganh' => 1
        	],
        	[
        		'ten_nganh' => 'Hệ thống thông tin',
        		'khoa_nganh' => 1
        	],
        	[
        		'ten_nganh' => 'Toán ứng dụng',
        		'khoa_nganh' => 1
        	],
        ];
        DB::table('nganh')->insert($data);
    }
}
