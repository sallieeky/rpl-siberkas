<?php

namespace App\Http\Controllers;

use App\Models\FormulirKeteranganKurangMampu;
use App\Models\FormulirMemintaSuratKeterangan;
use App\Models\FormulirPendaftaranPerpindahanPenduduk;
use App\Models\KeteranganHargaBangunan;
use App\Models\KeteranganMemilikiBangunan;
use App\Models\KeteranganMemilikiTanah;
use App\Models\KeteranganNjop;
use App\Models\KeteranganPengantarNikah;
use App\Models\KeteranganUsaha;
use App\Models\KritikSaran;
use App\Models\Pbb;
use App\Models\PengantarNikah;
use App\Models\Skck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function home()
    {
        return view("home");
    }

    public function history()
    {
        $data = [
            "pbb" => [
                "bidang" => "PPSDA",
                "nama" => "PBB",
                "data" => Pbb::where("user_id", auth()->user()->id)->get()
            ],
            "keterangan_harga_bangunan" => [
                "bidang" => "PPSDA",
                "nama" => "Keterangan Harga Bangunan",
                "data" => KeteranganHargaBangunan::where("user_id", auth()->user()->id)->get()
            ],
            "keterangan_memiliki_bangunan" => [
                "bidang" => "PPSDA",
                "nama" => "Keterangan Memiliki Bangunan",
                "data" => KeteranganMemilikiBangunan::where("user_id", auth()->user()->id)->get()
            ],
            "keterangan_memiliki_tanah" => [
                "bidang" => "PPSDA",
                "nama" => "Keterangan Memiliki Tanah",
                "data" => KeteranganMemilikiTanah::where("user_id", auth()->user()->id)->get()
            ],
            "keterangan_njop" => [
                "bidang" => "PPSDA",
                "nama" => "Keterangan NJOP",
                "data" => KeteranganNjop::where("user_id", auth()->user()->id)->get()
            ],
            "skck" => [
                "bidang" => "KESOS",
                "nama" => "SKCK",
                "data" => Skck::where("user_id", auth()->user()->id)->get()
            ],
            "keterangan_usaha" => [
                "bidang" => "KESOS",
                "nama" => "Keterangan Usaha",
                "data" => KeteranganUsaha::where("user_id", auth()->user()->id)->get()
            ],
            "pengantar_nikah" => [
                "bidang" => "KESOS",
                "nama" => "Pengantar Nikah",
                "data" => PengantarNikah::where("user_id", auth()->user()->id)->get()
            ],
            "formulir_pendaftaran_perpindahan_penduduk" => [
                "bidang" => "TAPEM",
                "nama" => "Formulir Pendaftaran Perpindahan Penduduk",
                "data" => FormulirPendaftaranPerpindahanPenduduk::where("user_id", auth()->user()->id)->get()
            ],
            "formulir_meminta_surat_keterangan" => [
                "bidang" => "TAPEM",
                "nama" => "Formulir Meminta Surat Keterangan",
                "data" => FormulirMemintaSuratKeterangan::where("user_id", auth()->user()->id)->get()
            ],
            "formulir_keterangan_kurang_mampu" => [
                "bidang" => "TAPEM",
                "nama" => "Formulir Keterangan Kurang Mampu",
                "data" => FormulirKeteranganKurangMampu::where("user_id", auth()->user()->id)->get()
            ],
        ];
        // return $data;
        return view("user.history", compact("data"));
    }

    public function kritikDanSaran()
    {
        return view("user.kritik-dan-saran");
    }
    public function kritikDanSaranPost(Request $request)
    {
        $request->validate([
            "kritik" => "required",
            "saran" => "required"
        ]);

        $request["user_id"] = auth()->user()->id;
        KritikSaran::create($request->all());
        return back()->with("pesan", "Kritik dan saran berhasil dikirim");
    }
}
