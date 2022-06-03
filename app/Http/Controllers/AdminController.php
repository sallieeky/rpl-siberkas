<?php

namespace App\Http\Controllers;

use App\Models\FormulirKeteranganKurangMampu;
use App\Models\FormulirMemintaSuratKeterangan;
use App\Models\FormulirPendaftaranPerpindahanPenduduk;
use App\Models\KeteranganHargaBangunan;
use App\Models\KeteranganMemilikiBangunan;
use App\Models\KeteranganMemilikiTanah;
use App\Models\KeteranganNjop;
use App\Models\KeteranganUsaha;
use App\Models\Pbb;
use App\Models\PengantarNikah;
use App\Models\Skck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function berkasMasuk()
    {
        if (Auth::user()->bidang == "ppsda") {
            $data = [
                "pbb" => [
                    "bidang" => "PPSDA",
                    "nama" => "PBB",
                    "data" => Pbb::all()
                ],
                "keterangan_harga_bangunan" => [
                    "bidang" => "PPSDA",
                    "nama" => "Keterangan Harga Bangunan",
                    "data" => KeteranganHargaBangunan::all()
                ],
                "keterangan_memiliki_bangunan" => [
                    "bidang" => "PPSDA",
                    "nama" => "Keterangan Memiliki Bangunan",
                    "data" => KeteranganMemilikiBangunan::all()
                ],
                "keterangan_memiliki_tanah" => [
                    "bidang" => "PPSDA",
                    "nama" => "Keterangan Memiliki Tanah",
                    "data" => KeteranganMemilikiTanah::all()
                ],
                "keterangan_njop" => [
                    "bidang" => "PPSDA",
                    "nama" => "Keterangan NJOP",
                    "data" => KeteranganNjop::all()
                ],
            ];
        } else if (Auth::user()->bidang == "kesos") {
            $data = [
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
            ];
        } else if (Auth::user()->bidang == "tapem") {
            $data = [
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
        }

        $status = ["Diterima", "Diperiksa", "Ditolak", "Selesai"];
        return view('admin.berkas-masuk', compact('data', 'status'));
    }

    public function uploadBerkasBalasan(Request $request)
    {
        if ($request->nama == "PBB") {
            $pbb = Pbb::find($request->id);
            $pbb->berkas_balasan = $request->file("berkas_balasan")->getClientOriginalName();
            $pbb->save();
        } else if ($request->nama == "Keterangan Harga Bangunan") {
            $keterangan_harga_bangunan = KeteranganHargaBangunan::find($request->id);
            $keterangan_harga_bangunan->berkas_balasan = $request->file("berkas_balasan")->getClientOriginalName();
            $keterangan_harga_bangunan->save();
        } else if ($request->nama == "Keterangan Memiliki Bangunan") {
            $keterangan_memiliki_bangunan = KeteranganMemilikiBangunan::find($request->id);
            $keterangan_memiliki_bangunan->berkas_balasan = $request->file("berkas_balasan")->getClientOriginalName();
            $keterangan_memiliki_bangunan->save();
        } else if ($request->nama == "Keterangan Memiliki Tanah") {
            $keterangan_memiliki_tanah = KeteranganMemilikiTanah::find($request->id);
            $keterangan_memiliki_tanah->berkas_balasan = $request->file("berkas_balasan")->getClientOriginalName();
            $keterangan_memiliki_tanah->save();
        } else if ($request->nama == "Keterangan NJOP") {
            $keterangan_njop = KeteranganNjop::find($request->id);
            $keterangan_njop->berkas_balasan = $request->file("berkas_balasan")->getClientOriginalName();
            $keterangan_njop->save();
        } else if ($request->nama == "Keterangan Usaha") {
            $keterangan_usaha = KeteranganUsaha::find($request->id);
            $keterangan_usaha->berkas_balasan = $request->file("berkas_balasan")->getClientOriginalName();
            $keterangan_usaha->save();
        } else if ($request->nama == "Pengantar Nikah") {
            $pengantar_nikah = PengantarNikah::find($request->id);
            $pengantar_nikah->berkas_balasan = $request->file("berkas_balasan")->getClientOriginalName();
            $pengantar_nikah->save();
        } else if ($request->nama == "Formulir Pendaftaran Perpindahan Penduduk") {
            $formulir_pendaftaran_perpindahan_penduduk = FormulirPendaftaranPerpindahanPenduduk::find($request->id);
            $formulir_pendaftaran_perpindahan_penduduk->berkas_balasan = $request->file("berkas_balasan")->getClientOriginalName();
            $formulir_pendaftaran_perpindahan_penduduk->save();
        } else if ($request->nama == "Formulir Meminta Surat Keterangan") {
            $formulir_meminta_surat_keterangan = FormulirMemintaSuratKeterangan::find($request->id);
            $formulir_meminta_surat_keterangan->berkas_balasan = $request->file("berkas_balasan")->getClientOriginalName();
            $formulir_meminta_surat_keterangan->save();
        } else if ($request->nama == "Formulir Keterangan Kurang Mampu") {
            $formulir_keterangan_kurang_mampu = FormulirKeteranganKurangMampu::find($request->id);
            $formulir_keterangan_kurang_mampu->berkas_balasan = $request->file("berkas_balasan")->getClientOriginalName();
            $formulir_keterangan_kurang_mampu->save();
        } else if ($request->nama == "SKCK") {
            $skck = Skck::find($request->id);
            $skck->berkas_balasan = $request->file("berkas_balasan")->getClientOriginalName();
            $skck->save();
        }

        $request->file("berkas_balasan")->storeAs("public/berkas_balasan", $request->file("berkas_balasan")->getClientOriginalName());
        return redirect()->back();
    }
}
