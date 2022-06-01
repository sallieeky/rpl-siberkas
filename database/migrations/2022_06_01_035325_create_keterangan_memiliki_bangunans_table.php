<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeteranganMemilikiBangunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keterangan_memiliki_bangunans', function (Blueprint $table) {
            $table->id();
            $table->string("user_id");
            $table->string("nama");
            $table->string("nik");
            $table->string("ttl");
            $table->string("jenis_kelamin");
            $table->string("alamat");
            $table->string("no_telp");

            // alamat_bangunan
            $table->string("jalan_rt_rw");
            $table->string("desa_kelurahan");
            $table->string("kecamatan");
            $table->string("kabupaten");

            // batas_bangunan
            $table->string("sebelah_utara");
            $table->string("sebelah_timur");
            $table->string("sebelah_selatan");
            $table->string("sebelah_barat");

            // ukuran_bangunan
            $table->string("panjang");
            $table->string("lebar");
            $table->string("luas");

            $table->string("surat_pengantar");
            $table->string("ktp");

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
        Schema::dropIfExists('keterangan_memiliki_bangunans');
    }
}
