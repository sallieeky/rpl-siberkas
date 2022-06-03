<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulirKeteranganKurangMampusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulir_keterangan_kurang_mampus', function (Blueprint $table) {
            $table->id();
            $table->string("user_id");
            $table->string("nama");
            $table->string("nik");
            $table->string("ttl");
            $table->string("alamat");
            $table->string("no_telp");

            // data ortu
            $table->string("nama_ortu");
            $table->string("ttl_ortu");
            $table->string("jenis_kelamin_ortu");
            $table->string("agama_ortu");
            $table->string("pekerjaan_ortu");
            $table->string("alamat_ortu");

            // data anak
            $table->string("nama_anak");
            $table->string("jenis_kelamin_anak");
            $table->string("ttl_anak");
            $table->string("sekolah_anak");

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
        Schema::dropIfExists('formulir_keterangan_kurang_mampus');
    }
}
