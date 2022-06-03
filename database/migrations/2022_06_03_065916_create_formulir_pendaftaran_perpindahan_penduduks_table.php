<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulirPendaftaranPerpindahanPenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulir_pendaftaran_perpindahan_penduduks', function (Blueprint $table) {
            $table->id();
            $table->string("user_id");
            $table->string("nama");
            $table->string("nik");
            $table->string("ttl");
            $table->string("alamat");
            $table->string("no_telp");

            $table->string("no_kk");
            $table->string("jenis_permohonan");
            $table->string("alamat_pindah");
            $table->string("alasan_pindah");
            $table->string("jenis_kepindahan");
            $table->string("anggota_keluarga_yang_tidak_pindah");
            $table->string("anggota_keluarga_yang_pindah");

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
        Schema::dropIfExists('formulir_pendaftaran_perpindahan_penduduks');
    }
}
