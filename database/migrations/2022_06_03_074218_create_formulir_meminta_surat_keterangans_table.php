<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulirMemintaSuratKeterangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulir_meminta_surat_keterangans', function (Blueprint $table) {
            $table->id();
            $table->string("user_id");
            $table->string("nama");
            $table->string("nik");
            $table->string("ttl");
            $table->string("alamat");
            $table->string("no_telp");

            $table->string("jenis_kelamin");
            $table->string("agama");
            $table->string("pekerjaan");
            $table->string("status_perkawinan");
            $table->string("keperluan");

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
        Schema::dropIfExists('formulir_meminta_surat_keterangans');
    }
}
