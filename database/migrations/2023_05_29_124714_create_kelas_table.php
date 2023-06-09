<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('guru_id');
            $table->bigInteger('matpel_id');
            $table->string('nama_kelas');
            $table->text('deskripsi');
            $table->text('gambar');
            $table->text('link_rpp');
            $table->text('link_ar');
            $table->text('link_vr');
            $table->text('qr_code_ar');
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
        Schema::dropIfExists('kelas');
    }
}
