<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkcksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skcks', function (Blueprint $table) {
            $table->id();
            $table->string("user_id");
            $table->string("nama");
            $table->string("nik");
            $table->string("ttl");
            $table->string("alamat");
            $table->string("no_telp");

            $table->string("jenis_kelamin");
            $table->string("pendidikan");
            $table->string("warga_negara");
            $table->string("agama");
            $table->string("status_perkawinan");
            $table->string("pekerjaan");
            $table->string("kelurahan");
            $table->string("kecamatan");
            $table->text("maksud");
            $table->string("berlaku_selama")->default("3 Bulan");

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
        Schema::dropIfExists('skcks');
    }
}
