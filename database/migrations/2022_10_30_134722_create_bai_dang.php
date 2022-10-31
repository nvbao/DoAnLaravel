<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaiDang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bai_dang', function (Blueprint $table) {
            $table->id();
            $table->integer('ma_nguoi_dung');
            $table->integer('ma_loai_bai_dang');
            $table->integer('ma_danh_muc');
            $table->integer('ma_lien_he');
            $table->datetime('thoi_gian');
            $table->String('noi_dung');
            $table->String('hinh_anh');
            $table->String('dia_chi');
            $table->integer('trang_thai');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bai_dang');
    }
}
