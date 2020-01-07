<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDataDiri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_data_diri', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('nama');
            $table->bigIncrements('nip');
            $table->bigIncrements('unit_kerja');
            $table->bigIncrements('tempat_lahir');
            $table->bigIncrements('tgl_lahir');
            $table->bigIncrements('alamat');
            $table->bigIncrements('jabatan');
            $table->bigIncrements('pangkat');
            $table->bigIncrements('jenjang_pend');
            $table->bigIncrements('jurusan');
            $table->bigIncrements('univ');
            $table->bigIncrements('tgl_mulai');
            $table->bigIncrements('tgl_akhir');
            $table->bigIncrements('beasiswa');
            $table->bigIncrements('alasan_perpanjangan');
            $table->bigIncrements('jml_wkt_perp');
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
        Schema::dropIfExists('table_data_diri');
    }
}
