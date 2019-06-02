<?php

use Illuminate\Database\Seeder;

class NamSeeder extends Seeder
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
        		'nam' => '2019 - 2020'
        	],
        	[
        		'nam' => '2020 - 2021'
        	],
        ];
        DB::table('nam')->insert($data);
    }
}
