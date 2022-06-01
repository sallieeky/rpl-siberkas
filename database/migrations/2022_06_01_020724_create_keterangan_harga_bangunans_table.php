<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeteranganHargaBangunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keterangan_harga_bangunans', function (Blueprint $table) {
            $table->id();
            $table->string("user_id");
            $table->string("nama");
            $table->string("nik");
            $table->string("ttl");
            $table->string("alamat");
            $table->string("no_telp");

            $table->enum("pilihan", ["Sertifikat", "Segel", "Nomor"]);
            $table->string("nilai");
            $table->string("nama_pemilik");
            $table->date("tanggal");
            $table->string("izin_bangunan");
            $table->string("alamat_objek");
            $table->string("jenis_bangunan");
            $table->string("harga_tanah");
            $table->string("harga_bangunan");

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
        Schema::dropIfExists('keterangan_harga_bangunans');
    }
}
