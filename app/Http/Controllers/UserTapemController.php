<?php

namespace App\Http\Controllers;

use App\Models\FormulirMemintaSuratKeterangan;
use App\Models\FormulirPendaftaranPerpindahanPenduduk;
use Illuminate\Http\Request;

class UserTapemController extends Controller
{
    public function index()
    {
        return view("user.tapem");
    }

    public function formulirPendaftaranPerpindahanPenduduk()
    {
        return view("user.tapem.formulir-pendaftaran-perpindahan-penduduk");
    }
    public function formulirPendaftaranPerpindahanPendudukPost(Request $request)
    {
        $request->validate([
            "nama" => "required",
            "nik" => "required",
            "ttl" => "required",
            "alamat" => "required",
            "no_telp" => "required",
            "no_kk" => "required",
            "jenis_permohonan" => "required",
            "alamat_pindah" => "required",
            "alasan_pindah" => "required",
            "jenis_kepindahan" => "required",
            "anggota_keluarga_yang_tidak_pindah" => "required",
            "anggota_keluarga_yang_pindah" => "required",
            "surat_pengantar_file" => "required",
            "ktp_file" => "required",
        ]);

        $request->file("surat_pengantar_file")->storeAs("public/tapem/surat_pengantar", $request->file("surat_pengantar_file")->getClientOriginalName());
        $request->file("ktp_file")->storeAs("public/tapem/ktp", $request->file("ktp_file")->getClientOriginalName());

        $request["surat_pengantar"] = $request->file("surat_pengantar_file")->getClientOriginalName();
        $request["ktp"] = $request->file("ktp_file")->getClientOriginalName();
        $request["user_id"] = auth()->user()->id;

        FormulirPendaftaranPerpindahanPenduduk::create($request->all());
        return back()->with("pesan", "Formulir Pendafataran Perpindahan Penduduk Berhasil Dikirim, Silahkan Tunggu Konfirmasi dari Admin");
    }

    public function formulirMemintaSuratKeterangan()
    {
        return view("user.tapem.formulir-meminta-surat-keterangan");
    }
    public function formulirMemintaSuratKeteranganPost(Request $request)
    {
        $request->validate([
            "nama" => "required",
            "nik" => "required",
            "ttl" => "required",
            "alamat" => "required",
            "no_telp" => "required",
            "jenis_kelamin" => "required",
            "agama" => "required",
            "pekerjaan" => "required",
            "status_perkawinan" => "required",
            "keperluan" => "required",
            "surat_pengantar_file" => "required",
            "ktp_file" => "required",
        ]);

        $request->file("surat_pengantar_file")->storeAs("public/tapem/surat_pengantar", $request->file("surat_pengantar_file")->getClientOriginalName());
        $request->file("ktp_file")->storeAs("public/tapem/ktp", $request->file("ktp_file")->getClientOriginalName());

        $request["surat_pengantar"] = $request->file("surat_pengantar_file")->getClientOriginalName();
        $request["ktp"] = $request->file("ktp_file")->getClientOriginalName();
        $request["user_id"] = auth()->user()->id;

        FormulirMemintaSuratKeterangan::create($request->all());
        return back()->with("pesan", "Formulir Meminta Surat Keterangan Berhasil Dikirim, Silahkan Tunggu Konfirmasi dari Admin");
    }

    public function formulirKeteranganKurangMampu()
    {
        return view("user.tapem.formulir-keterangan-kurang-mampu");
    }
}
