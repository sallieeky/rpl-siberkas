<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeteranganNjopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keterangan_njops', function (Blueprint $table) {
            $table->id();
            $table->string("user_id");
            $table->string("nama");
            $table->string("nik");
            $table->string("ttl");
            $table->string("alamat");
            $table->string("no_telp");

            $table->string("no_objek_pajak");
            $table->string("jenis_objek_pajak");
            $table->string("letak_objek");

            // uraian njop bumi
            $table->string("bumi_luas");
            $table->string("bumi_njop");
            $table->string("bumi_luas_njop");
            // uraian njop bangunan
            $table->string("bangunan_luas");
            $table->string("bangunan_njop");
            $table->string("bangunan_luas_njop");

            $table->string("total_njop");

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
        Schema::dropIfExists('keterangan_njops');
    }
}
