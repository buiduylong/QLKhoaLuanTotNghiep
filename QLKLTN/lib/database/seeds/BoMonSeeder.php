<?php

use Illuminate\Database\Seeder;

class BoMonSeeder extends Seeder
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
        		'ten_bomon' => 'Bộ môn Toán'
        	],
        	[
        		'ten_bomon' => 'Bộ môn Tin'
        	],
        	
        ];
        DB::table('bomon')->insert($data);
    }
}
