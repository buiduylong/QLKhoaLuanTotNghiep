<?php

use Illuminate\Database\Seeder;

class KhoaSeeder extends Seeder
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
        		'ten_khoa' => 'Toán - Tin'
        	],
        	[
        		'ten_khoa' => 'Kinh tế - Quản lý'
        	],
        	[
        		'ten_khoa' => 'Ngoại ngữ'
        	],
            [
                'ten_khoa' => 'Khoa học sức khỏe'
            ],
            [
                'ten_khoa' => 'Khoa học xã hội và nhân văn'
            ],
            [
                'ten_khoa' => 'Thanh nhạc'
            ],
        ];
        DB::table('khoa')->insert($data);
    }
}
