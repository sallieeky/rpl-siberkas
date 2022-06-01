<?php

namespace App\Http\Controllers;

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
        // $request["user_id"] = Auth::user()->id;
        $request["user_id"] = 0;
        $request["surat_pengantar"] = $request->file("surat_pengantar_file")->getClientOriginalName();
        $request["ktp"] = $request->file("ktp_file")->getClientOriginalName();

        Skck::create($request->all());

        return back()->with("pesan", "Pengajuan SKCK Anda telah dikirim. Tunggu konfirmasi dari admin.");
    }
}
