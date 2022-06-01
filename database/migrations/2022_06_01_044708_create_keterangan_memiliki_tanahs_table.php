<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeteranganMemilikiTanahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keterangan_memiliki_tanahs', function (Blueprint $table) {
            $table->id();
            $table->string("user_id");
            $table->string("nama");
            $table->string("nik");
            $table->string("ttl");
            $table->string("alamat");
            $table->string("no_telp");

            $table->string("kelurahan");
            $table->string("kecamatan");
            $table->string("kabupaten");
            $table->string("provinsi");
            $table->string("luas");
            $table->string("rt");

            // batas_tanah
            $table->string("sebelah_utara");
            $table->string("sebelah_timur");
            $table->string("sebelah_selatan");
            $table->string("sebelah_barat");

            $table->string("surat_pengantar");
            $table->string("ktp");

            $table->string("status")->default("Diterima");
            $table->string("admin_id")->nullable();
            $table->string("berkas_balasan")->nullable();

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
        Schema::dropIfExists('keterangan_memiliki_tanahs');
    }
}
