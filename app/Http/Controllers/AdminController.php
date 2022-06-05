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
use Illuminate\Support\Facades\Mail;

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
                    "data" => Skck::all()
                ],
                "keterangan_usaha" => [
                    "bidang" => "KESOS",
                    "nama" => "Keterangan Usaha",
                    "data" => KeteranganUsaha::all()
                ],
                "pengantar_nikah" => [
                    "bidang" => "KESOS",
                    "nama" => "Pengantar Nikah",
                    "data" => PengantarNikah::all()
                ],
            ];
        } else if (Auth::user()->bidang == "tapem") {
            $data = [
                "formulir_pendaftaran_perpindahan_penduduk" => [
                    "bidang" => "TAPEM",
                    "nama" => "Formulir Pendaftaran Perpindahan Penduduk",
                    "data" => FormulirPendaftaranPerpindahanPenduduk::all()
                ],
                "formulir_meminta_surat_keterangan" => [
                    "bidang" => "TAPEM",
                    "nama" => "Formulir Meminta Surat Keterangan",
                    "data" => FormulirMemintaSuratKeterangan::all()
                ],
                "formulir_keterangan_kurang_mampu" => [
                    "bidang" => "TAPEM",
                    "nama" => "Formulir Keterangan Kurang Mampu",
                    "data" => FormulirKeteranganKurangMampu::all()
                ],
            ];
        }
        $status = ["Diterima", "Diperiksa", "Ditolak", "Selesai"];
        return view('admin.berkas-masuk', compact('data', 'status'));
    }

    public function uploadBerkasBalasan(Request $request)
    {
        $user = "";
        if ($request->nama == "PBB") {
            $pbb = Pbb::find($request->id);
            $pbb->berkas_balasan = $request->file("berkas_balasan")->getClientOriginalName();
            $pbb->status = "Selesai";
            $pbb->admin_id = Auth::user()->id;
            $pbb->save();
            $user = $pbb->user;
        } else if ($request->nama == "Keterangan Harga Bangunan") {
            $keterangan_harga_bangunan = KeteranganHargaBangunan::find($request->id);
            $keterangan_harga_bangunan->berkas_balasan = $request->file("berkas_balasan")->getClientOriginalName();
            $keterangan_harga_bangunan->status = "Selesai";
            $keterangan_harga_bangunan->admin_id = Auth::user()->id;
            $keterangan_harga_bangunan->save();
            $user = $keterangan_harga_bangunan->user;
        } else if ($request->nama == "Keterangan Memiliki Bangunan") {
            $keterangan_memiliki_bangunan = KeteranganMemilikiBangunan::find($request->id);
            $keterangan_memiliki_bangunan->berkas_balasan = $request->file("berkas_balasan")->getClientOriginalName();
            $keterangan_memiliki_bangunan->status = "Selesai";
            $keterangan_memiliki_bangunan->admin_id = Auth::user()->id;
            $keterangan_memiliki_bangunan->save();
            $user = $keterangan_memiliki_bangunan->user;
        } else if ($request->nama == "Keterangan Memiliki Tanah") {
            $keterangan_memiliki_tanah = KeteranganMemilikiTanah::find($request->id);
            $keterangan_memiliki_tanah->berkas_balasan = $request->file("berkas_balasan")->getClientOriginalName();
            $keterangan_memiliki_tanah->status = "Selesai";
            $keterangan_memiliki_tanah->admin_id = Auth::user()->id;
            $keterangan_memiliki_tanah->save();
            $user = $keterangan_memiliki_tanah->user;
        } else if ($request->nama == "Keterangan NJOP") {
            $keterangan_njop = KeteranganNjop::find($request->id);
            $keterangan_njop->berkas_balasan = $request->file("berkas_balasan")->getClientOriginalName();
            $keterangan_njop->status = "Selesai";
            $keterangan_njop->admin_id = Auth::user()->id;
            $keterangan_njop->save();
            $user = $keterangan_njop->user;
        } else if ($request->nama == "Keterangan Usaha") {
            $keterangan_usaha = KeteranganUsaha::find($request->id);
            $keterangan_usaha->berkas_balasan = $request->file("berkas_balasan")->getClientOriginalName();
            $keterangan_usaha->status = "Selesai";
            $keterangan_usaha->admin_id = Auth::user()->id;
            $keterangan_usaha->save();
            $user = $keterangan_usaha->user;
        } else if ($request->nama == "Pengantar Nikah") {
            $pengantar_nikah = PengantarNikah::find($request->id);
            $pengantar_nikah->berkas_balasan = $request->file("berkas_balasan")->getClientOriginalName();
            $pengantar_nikah->status = "Selesai";
            $pengantar_nikah->admin_id = Auth::user()->id;
            $pengantar_nikah->save();
            $user = $pengantar_nikah->user;
        } else if ($request->nama == "Formulir Pendaftaran Perpindahan Penduduk") {
            $formulir_pendaftaran_perpindahan_penduduk = FormulirPendaftaranPerpindahanPenduduk::find($request->id);
            $formulir_pendaftaran_perpindahan_penduduk->berkas_balasan = $request->file("berkas_balasan")->getClientOriginalName();
            $formulir_pendaftaran_perpindahan_penduduk->status = "Selesai";
            $formulir_pendaftaran_perpindahan_penduduk->admin_id = Auth::user()->id;
            $formulir_pendaftaran_perpindahan_penduduk->save();
            $user = $formulir_pendaftaran_perpindahan_penduduk->user;
        } else if ($request->nama == "Formulir Meminta Surat Keterangan") {
            $formulir_meminta_surat_keterangan = FormulirMemintaSuratKeterangan::find($request->id);
            $formulir_meminta_surat_keterangan->berkas_balasan = $request->file("berkas_balasan")->getClientOriginalName();
            $formulir_meminta_surat_keterangan->status = "Selesai";
            $formulir_meminta_surat_keterangan->admin_id = Auth::user()->id;
            $formulir_meminta_surat_keterangan->save();
            $user = $formulir_meminta_surat_keterangan->user;
        } else if ($request->nama == "Formulir Keterangan Kurang Mampu") {
            $formulir_keterangan_kurang_mampu = FormulirKeteranganKurangMampu::find($request->id);
            $formulir_keterangan_kurang_mampu->berkas_balasan = $request->file("berkas_balasan")->getClientOriginalName();
            $formulir_keterangan_kurang_mampu->status = "Selesai";
            $formulir_keterangan_kurang_mampu->admin_id = Auth::user()->id;
            $formulir_keterangan_kurang_mampu->save();
            $user = $formulir_keterangan_kurang_mampu->user;
        } else if ($request->nama == "SKCK") {
            $skck = Skck::find($request->id);
            $skck->berkas_balasan = $request->file("berkas_balasan")->getClientOriginalName();
            $skck->status = "Selesai";
            $skck->admin_id = Auth::user()->id;
            $skck->save();
            $user = $skck->user;
        }

        $request->file("berkas_balasan")->storeAs("public/berkas_balasan", $request->file("berkas_balasan")->getClientOriginalName());
        $data = [
            "berkas_balasan" => $request->file("berkas_balasan")->getClientOriginalName(),
            "status" => "Selesai",
            "admin" => Auth::user()->nama,
            "user" => $user,
            "nama_berkas" => $request->nama
        ];
        Mail::send('mail.berkas_balasan', $data, function ($message) use ($user, $request) {
            $message->from(env("MAIL_FROM_ADDRESS"), env("MAIL_FROM_NAME"));
            $message->to($user->email, $user->nama);
            $message->subject("Balasan Pengajuan Berkas " . $request->nama);
        });
        return redirect()->back();
    }

    public function updateStatus(Request $request)
    {
        $user = "";
        if ($request->nama == "PBB") {
            $pbb = Pbb::find($request->id);
            $pbb->status = $request->status;
            $pbb->admin_id = Auth::user()->id;
            $pbb->save();
            $user = $pbb->user;
        } else if ($request->nama == "Keterangan Harga Bangunan") {
            $keterangan_harga_bangunan = KeteranganHargaBangunan::find($request->id);
            $keterangan_harga_bangunan->status = $request->status;
            $keterangan_harga_bangunan->admin_id = Auth::user()->id;
            $keterangan_harga_bangunan->save();
            $user = $keterangan_harga_bangunan->user;
        } else if ($request->nama == "Keterangan Memiliki Bangunan") {
            $keterangan_memiliki_bangunan = KeteranganMemilikiBangunan::find($request->id);
            $keterangan_memiliki_bangunan->status = $request->status;
            $keterangan_memiliki_bangunan->admin_id = Auth::user()->id;
            $keterangan_memiliki_bangunan->save();
            $user = $keterangan_memiliki_bangunan->user;
        } else if ($request->nama == "Keterangan Memiliki Tanah") {
            $keterangan_memiliki_tanah = KeteranganMemilikiTanah::find($request->id);
            $keterangan_memiliki_tanah->status = $request->status;
            $keterangan_memiliki_tanah->admin_id = Auth::user()->id;
            $keterangan_memiliki_tanah->save();
            $user = $keterangan_memiliki_tanah->user;
        } else if ($request->nama == "Keterangan NJOP") {
            $keterangan_njop = KeteranganNjop::find($request->id);
            $keterangan_njop->status = $request->status;
            $keterangan_njop->admin_id = Auth::user()->id;
            $keterangan_njop->save();
            $user = $keterangan_njop->user;
        } else if ($request->nama == "Keterangan Usaha") {
            $keterangan_usaha = KeteranganUsaha::find($request->id);
            $keterangan_usaha->status = $request->status;
            $keterangan_usaha->admin_id = Auth::user()->id;
            $keterangan_usaha->save();
            $user = $keterangan_usaha->user;
        } else if ($request->nama == "Pengantar Nikah") {
            $pengantar_nikah = PengantarNikah::find($request->id);
            $pengantar_nikah->status = $request->status;
            $pengantar_nikah->admin_id = Auth::user()->id;
            $pengantar_nikah->save();
            $user = $pengantar_nikah->user;
        } else if ($request->nama == "Formulir Pendaftaran Perpindahan Penduduk") {
            $formulir_pendaftaran_perpindahan_penduduk = FormulirPendaftaranPerpindahanPenduduk::find($request->id);
            $formulir_pendaftaran_perpindahan_penduduk->status = $request->status;
            $formulir_pendaftaran_perpindahan_penduduk->admin_id = Auth::user()->id;
            $formulir_pendaftaran_perpindahan_penduduk->save();
            $user = $formulir_pendaftaran_perpindahan_penduduk->user;
        } else if ($request->nama == "Formulir Meminta Surat Keterangan") {
            $formulir_meminta_surat_keterangan = FormulirMemintaSuratKeterangan::find($request->id);
            $formulir_meminta_surat_keterangan->status = $request->status;
            $formulir_meminta_surat_keterangan->admin_id = Auth::user()->id;
            $formulir_meminta_surat_keterangan->save();
            $user = $formulir_meminta_surat_keterangan->user;
        } else if ($request->nama == "Formulir Keterangan Kurang Mampu") {
            $formulir_keterangan_kurang_mampu = FormulirKeteranganKurangMampu::find($request->id);
            $formulir_keterangan_kurang_mampu->status = $request->status;
            $formulir_keterangan_kurang_mampu->admin_id = Auth::user()->id;
            $formulir_keterangan_kurang_mampu->save();
            $user = $formulir_keterangan_kurang_mampu->user;
        } else if ($request->nama == "SKCK") {
            $skck = Skck::find($request->id);
            $skck->status = $request->status;
            $skck->admin_id = Auth::user()->id;
            $skck->save();
            $user = $skck->user;
        }

        $data = [
            "status" => $request->status,
            "admin" => Auth::user()->nama,
            "user" => $user,
            "nama_berkas" => $request->nama
        ];
        Mail::send('mail.ubah_status', $data, function ($message) use ($user, $request) {
            $message->from(env("MAIL_FROM_ADDRESS"), env("MAIL_FROM_NAME"));
            $message->to($user->email, $user->nama);
            $message->subject("Status Pengajuan Berkas " . $request->nama);
        });

        return response()->json(['success' => 'Data Berhasil Diubah']);
    }
}
