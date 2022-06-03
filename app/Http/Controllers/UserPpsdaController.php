<?php

namespace App\Http\Controllers;

use App\Models\KeteranganHargaBangunan;
use App\Models\KeteranganMemilikiBangunan;
use App\Models\KeteranganMemilikiTanah;
use App\Models\KeteranganNjop;
use App\Models\Pbb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPpsdaController extends Controller
{
    public function index()
    {
        return view("user.ppsda");
    }

    public function keperluanPbb()
    {
        return view("user.ppsda.keperluan-pbb");
    }
    public function keperluanPbbPost(Request $request)
    {
        $request->validate([
            "nama" => "required",
            "nik" => "required|numeric",
            "ttl" => "required",
            "alamat" => "required",
            "no_telp" => "required",
            "nama_alas_hak" => "required",
            "no_alas_hak" => "required",
            "titik_koordinat_objek" => "required",
            "alamat_objek" => "required",
            "keperluan" => "required",
            "spop_file" => "required",
            "lpop_file" => "required",
            "ktp_file" => "required",
            "kk_file" => "required",
            "kepemilikan_tanah_file" => "required",
            "surat_pengantar_file" => "required",
        ]);

        $request->file("spop_file")->storeAs("public/ppsda/spop", $request->file("spop_file")->getClientOriginalName());
        $request->file("lpop_file")->storeAs("public/ppsda/lpop", $request->file("lpop_file")->getClientOriginalName());
        $request->file("ktp_file")->storeAs("public/ppsda/ktp", $request->file("ktp_file")->getClientOriginalName());
        $request->file("kk_file")->storeAs("public/ppsda/kk", $request->file("kk_file")->getClientOriginalName());
        $request->file("kepemilikan_tanah_file")->storeAs("public/ppsda/kepemilikan_tanah", $request->file("kepemilikan_tanah_file")->getClientOriginalName());
        $request->file("surat_pengantar_file")->storeAs("public/ppsda/surat_pengantar", $request->file("surat_pengantar_file")->getClientOriginalName());

        $request["spop"] = $request->file("spop_file")->getClientOriginalName();
        $request["lpop"] = $request->file("lpop_file")->getClientOriginalName();
        $request["ktp"] = $request->file("ktp_file")->getClientOriginalName();
        $request["kk"] = $request->file("kk_file")->getClientOriginalName();
        $request["kepemilikan_tanah"] = $request->file("kepemilikan_tanah_file")->getClientOriginalName();
        $request["surat_pengantar"] = $request->file("surat_pengantar_file")->getClientOriginalName();

        $request["user_id"] = Auth::user()->id;
        // $request["user_id"] = 0;

        Pbb::create($request->all());
        return back()->with("pesan", "Pengajuan berkas berhasil");
    }

    public function keteranganHargaBangunan()
    {
        return view("user.ppsda.keterangan-harga-bangunan");
    }
    public function keteranganHargaBangunanPost(Request $request)
    {
        $request->validate([
            "nama" => "required",
            "nik" => "required|numeric",
            "ttl" => "required",
            "alamat" => "required",
            "no_telp" => "required",
            "pilihan" => "required",
            "nilai" => "required",
            "nama_pemilik" => "required",
            "tanggal" => "required",
            "izin_bangunan" => "required",
            "alamat_objek" => "required",
            "jenis_bangunan" => "required",
            "harga_tanah" => "required",
            "harga_bangunan" => "required",
            "surat_pengantar_file" => "required",
            "ktp_file" => "required",
        ]);

        $request->file("surat_pengantar_file")->storeAs("public/ppsda/surat_pengantar", $request->file("surat_pengantar_file")->getClientOriginalName());
        $request->file("ktp_file")->storeAs("public/ppsda/ktp", $request->file("ktp_file")->getClientOriginalName());

        $request["user_id"] = Auth::user()->id;
        // $request["user_id"] = 0;
        $request["surat_pengantar"] = $request->file("surat_pengantar_file")->getClientOriginalName();
        $request["ktp"] = $request->file("ktp_file")->getClientOriginalName();

        KeteranganHargaBangunan::create($request->all());
        return back()->with("pesan", "Pengajuan berkas berhasil");
    }

    public function keteranganMemilikiBangunan()
    {
        return view("user.ppsda.keterangan-memiliki-bangunan");
    }
    public function keteranganMemilikiBangunanPost(Request $request)
    {
        $request->validate([
            "nama" => "required",
            "nik" => "required|numeric",
            "ttl" => "required",
            "jenis_kelamin" => "required",
            "alamat" => "required",
            "no_telp" => "required",
            "jalan_rt_rw" => "required",
            "desa_kelurahan" => "required",
            "kecamatan" => "required",
            "kabupaten" => "required",
            "sebelah_utara" => "required",
            "sebelah_timur" => "required",
            "sebelah_selatan" => "required",
            "sebelah_barat" => "required",
            "panjang" => "required|numeric",
            "lebar" => "required|numeric",
            "luas" => "required|numeric",
            "surat_pengantar_file" => "required",
            "ktp_file" => "required",
        ]);

        $request->file("surat_pengantar_file")->storeAs("public/ppsda/surat_pengantar", $request->file("surat_pengantar_file")->getClientOriginalName());
        $request->file("ktp_file")->storeAs("public/ppsda/ktp", $request->file("ktp_file")->getClientOriginalName());

        $request["user_id"] = Auth::user()->id;
        // $request["user_id"] = 0;
        $request["surat_pengantar"] = $request->file("surat_pengantar_file")->getClientOriginalName();
        $request["ktp"] = $request->file("ktp_file")->getClientOriginalName();

        KeteranganMemilikiBangunan::create($request->all());
        return back()->with("pesan", "Pengajuan berkas berhasil");
    }

    public function keteranganMemilikiTanah()
    {
        return view("user.ppsda.keterangan-memiliki-tanah");
    }
    public function keteranganMemilikiTanahPost(Request $request)
    {
        $request->validate([
            "nama" => "required",
            "nik" => "required|numeric",
            "ttl" => "required",
            "alamat" => "required",
            "no_telp" => "required",
            "kelurahan" => "required",
            "kecamatan" => "required",
            "kabupaten" => "required",
            "provinsi" => "required",
            "luas" => "required|numeric",
            "rt" => "required",
            "sebelah_utara" => "required",
            "sebelah_timur" => "required",
            "sebelah_selatan" => "required",
            "sebelah_barat" => "required",
            "surat_pengantar_file" => "required",
            "ktp_file" => "required",
        ]);

        $request->file("surat_pengantar_file")->storeAs("public/ppsda/surat_pengantar", $request->file("surat_pengantar_file")->getClientOriginalName());
        $request->file("ktp_file")->storeAs("public/ppsda/ktp", $request->file("ktp_file")->getClientOriginalName());

        $request["user_id"] = Auth::user()->id;
        // $request["user_id"] = 0;
        $request["surat_pengantar"] = $request->file("surat_pengantar_file")->getClientOriginalName();
        $request["ktp"] = $request->file("ktp_file")->getClientOriginalName();

        KeteranganMemilikiTanah::create($request->all());
        return back()->with("pesan", "Pengajuan berkas berhasil");
    }

    public function keteranganNjop()
    {
        return view("user.ppsda.keterangan-njop");
    }
    public function keteranganNjopPost(Request $request)
    {
        $request->validate([
            "nama" => "required",
            "nik" => "required|numeric",
            "ttl" => "required",
            "alamat" => "required",
            "no_telp" => "required",
            "no_objek_pajak" => "required",
            "jenis_objek_pajak" => "required",
            "letak_objek" => "required",
            "bumi_luas" => "required|numeric",
            "bumi_njop" => "required|numeric",
            "bangunan_luas" => "required|numeric",
            "bangunan_njop" => "required|numeric",
            "surat_pengantar_file" => "required",
            "ktp_file" => "required",
        ]);

        $request["bumi_luas_njop"] = $request["bumi_luas"] * $request["bumi_njop"];
        $request["bangunan_luas_njop"] = $request["bangunan_luas"] * $request["bangunan_njop"];

        $request["total_njop"] = $request["bumi_luas_njop"] + $request["bangunan_luas_njop"];

        $request->file("surat_pengantar_file")->storeAs("public/ppsda/surat_pengantar", $request->file("surat_pengantar_file")->getClientOriginalName());
        $request->file("ktp_file")->storeAs("public/ppsda/ktp", $request->file("ktp_file")->getClientOriginalName());

        $request["user_id"] = Auth::user()->id;
        // $request["user_id"] = 0;
        $request["surat_pengantar"] = $request->file("surat_pengantar_file")->getClientOriginalName();
        $request["ktp"] = $request->file("ktp_file")->getClientOriginalName();

        KeteranganNjop::create($request->all());
        return back()->with("pesan", "Pengajuan berkas berhasil");
    }
}
