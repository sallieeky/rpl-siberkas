<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePbbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pbbs', function (Blueprint $table) {
            $table->id();
            $table->string("user_id");
            $table->string("nama");
            $table->string("nik");
            $table->string("ttl");
            $table->string("alamat");
            $table->string("no_telp");

            $table->enum("nama_alas_hak", ["SKT", "PLH", "Sertifikat"]);
            $table->string("no_alas_hak");
            $table->string("titik_koordinat_objek");
            $table->string("alamat_objek");
            $table->text("keperluan");

            $table->string("spop");
            $table->string("lpop");
            $table->string("ktp");
            $table->string("kk");
            $table->string("kepemilikan_tanah");
            $table->string("surat_pengantar");

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
        Schema::dropIfExists('pbbs');
    }
}
