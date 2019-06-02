<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Thanhvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thanhvien', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('ma_thanhvien');
            $table->string('ten_thanhvien');
            $table->string('password');
            $table->date('ngaysinh')->nullable();
            $table->string('anh_thanhvien')->default('user.png');
            $table->tinyInteger('quyen');
            $table->integer('khoa_thanhvien')->unsigned();
            $table->foreign('khoa_thanhvien')->references('id_khoa')->on('khoa')->onDelete('cascade');
            $table->integer('nganh_thanhvien')->unsigned();
            $table->foreign('nganh_thanhvien')->references('id_nganh')->on('nganh')->onDelete('cascade');
            $table->integer('bomon_thanhvien')->unsigned()->nullable();
            $table->foreign('bomon_thanhvien')->references('id_bomon')->on('bomon')->onDelete('cascade');
            $table->string('lop')->nullable();
            $table->string('email')->nullable();
            $table->string('hocvi')->nullable();
            $table->integer('so_dienthoai')->nullable();
            $table->integer('trang_thai')->nullable()->default(2);
            $table->rememberToken();
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
        Schema::dropIfExists('thanhvien');
    }
}
