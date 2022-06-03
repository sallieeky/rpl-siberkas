<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengantarNikahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengantar_nikahs', function (Blueprint $table) {
            $table->id();
            $table->string("user_id");
            $table->string("nama");
            $table->string("nik");
            $table->string("ttl");
            $table->string("alamat");
            $table->string("no_telp");

            $table->string("jenis_kelamin");
            $table->string("kewarganegaraan");
            $table->string("agama");
            $table->string("status_perkawinan");
            $table->string("pekerjaan");

            // data pria
            $table->string("nama_pria");
            $table->string("nik_pria");
            $table->string("ttl_pria");
            $table->string("alamat_pria");
            $table->string("kewarganegaraan_pria");
            $table->string("agama_pria");
            $table->string("pekerjaan_pria");

            // data wanita
            $table->string("nama_wanita");
            $table->string("nik_wanita");
            $table->string("ttl_wanita");
            $table->string("alamat_wanita");
            $table->string("kewarganegaraan_wanita");
            $table->string("agama_wanita");
            $table->string("pekerjaan_wanita");

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
        Schema::dropIfExists('pengantar_nikahs');
    }
}
