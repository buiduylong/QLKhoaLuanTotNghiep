<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Khoaluan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khoaluan', function (Blueprint $table) {
            $table->increments('id_khoaluan')->unsigned();
            $table->string('de_tai');
            $table->datetime('thoi_gian');
            $table->string('phong');
            $table->integer('thanhvien_khoaluan')->unsigned();
            $table->foreign('thanhvien_khoaluan')->references('id')->on('thanhvien')->onDelete('cascade');
            $table->float('diem1')->nullable();
            $table->float('diem2')->nullable();
            $table->float('diem3')->nullable();
            $table->float('diem4')->nullable();
            $table->integer('ts1')->nullable();
            $table->integer('ts2')->nullable();
            $table->integer('ts3')->nullable();
            $table->integer('ts4')->nullable();
            $table->integer('khoa_khoaluan')->unsigned();
            $table->foreign('khoa_khoaluan')->references('id_khoa')->on('khoa')->onDelete('cascade');
            $table->integer('nganh_khoaluan')->unsigned();
            $table->foreign('nganh_khoaluan')->references('id_nganh')->on('nganh')->onDelete('cascade');
            $table->tinyInteger('ky');
            $table->tinyInteger('nhom');
            $table->integer('nam_khoaluan')->unsigned();
            $table->foreign('nam_khoaluan')->references('id_nam')->on('nam')->onDelete('cascade');
            $table->string('bao_cao')->nullable();
            $table->integer('giao_vien');
            $table->integer('thietlap_khoaluan')->unsigned()->nullable();
            $table->foreign('thietlap_khoaluan')->references('id_thietlap')->on('thietlap')->onDelete('cascade');
            $table->integer('pub')->default(2);
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
        Schema::dropIfExists('khoaluan');
    }
}
