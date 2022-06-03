<?php

namespace App\Http\Controllers;

use App\Models\KeteranganHargaBangunan;
use App\Models\KeteranganMemilikiBangunan;
use App\Models\KeteranganMemilikiTanah;
use App\Models\KeteranganNjop;
use App\Models\KeteranganPengantarNikah;
use App\Models\KeteranganUsaha;
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
            ]
        ];
        // return $data;
        return view("user.history", compact("data"));
    }
}
