<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Thongbao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thongbao', function (Blueprint $table) {
            $table->increments('id_thongbao')->unsigned();
            $table->integer('id_gui');
            $table->integer('id_nhan');
            $table->string('noi_dung');
            $table->tinyInteger('trangthai')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thongbao');
    }
}
