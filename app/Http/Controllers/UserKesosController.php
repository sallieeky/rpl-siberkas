<?php

namespace App\Http\Controllers;

use App\Models\KeteranganUsaha;
use App\Models\Skck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserKesosController extends Controller
{
    public function index()
    {
        return view("user.kesos");
    }

    public function skck()
    {
        return view("user.kesos.skck");
    }
    public function skckPost(Request $request)
    {
        $request->validate([
            "nama" => "required",
            "nik" => "required",
            "ttl" => "required",
            "alamat" => "required",
            "no_telp" => "required",
            "jenis_kelamin" => "required",
            "pendidikan" => "required",
            "warga_negara" => "required",
            "agama" => "required",
            "status_perkawinan" => "required",
            "pekerjaan" => "required",
            "kelurahan" => "required",
            "kecamatan" => "required",
            "maksud" => "required",
            "surat_pengantar_file" => "required",
            "ktp_file" => "required",
        ]);

        $request->file("surat_pengantar_file")->storeAs("public/kesos/surat_pengantar", $request->file("surat_pengantar_file")->getClientOriginalName());
        $request->file("ktp_file")->storeAs("public/kesos/ktp", $request->file("ktp_file")->getClientOriginalName());

        $request["user_id"] = Auth::user()->id;
        $request["surat_pengantar"] = $request->file("surat_pengantar_file")->getClientOriginalName();
        $request["ktp"] = $request->file("ktp_file")->getClientOriginalName();

        Skck::create($request->all());

        return back()->with("pesan", "Pengajuan SKCK Anda telah dikirim. Tunggu konfirmasi dari admin.");
    }

    public function keteranganUsaha()
    {
        return view("user.kesos.keterangan_usaha");
    }
    public function keteranganUsahaPost(Request $request)
    {
        $request->validate([
            "nama" => "required",
            "nik" => "required",
            "ttl" => "required",
            "alamat" => "required",
            "no_telp" => "required",
            "jenis_kelamin" => "required",
            "agama" => "required",
            "status_perkawinan" => "required",
            "pekerjaan" => "required",
            "bidang_usaha" => "required",
            "alamat_tempat_usaha" => "required",
            "mulai_usaha" => "required",
            "surat_pengantar_file" => "required",
            "ktp_file" => "required",
        ]);

        $request->file("surat_pengantar_file")->storeAs("public/kesos/surat_pengantar", $request->file("surat_pengantar_file")->getClientOriginalName());
        $request->file("ktp_file")->storeAs("public/kesos/ktp", $request->file("ktp_file")->getClientOriginalName());

        $request["user_id"] = Auth::user()->id;
        $request["surat_pengantar"] = $request->file("surat_pengantar_file")->getClientOriginalName();
        $request["ktp"] = $request->file("ktp_file")->getClientOriginalName();

        KeteranganUsaha::create($request->all());

        return back()->with("pesan", "Pengajuan Keterangan Usaha Anda telah dikirim. Tunggu konfirmasi dari admin.");
    }
}
