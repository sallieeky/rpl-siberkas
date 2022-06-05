<?php

namespace App\Http\Controllers;

use App\Models\FormulirKeteranganKurangMampu;
use App\Models\FormulirMemintaSuratKeterangan;
use App\Models\FormulirPendaftaranPerpindahanPenduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
    public function formulirPendaftaranPerpindahanPendudukDetail(FormulirPendaftaranPerpindahanPenduduk $fppp)
    {
        return view("user.tapem.formulir-pendaftaran-perpindahan-penduduk", compact("fppp"));
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
        $this->kirimEmail("Formulir Pendaftaran Perpindahan Penduduk");
        return back()->with("pesan", "Formulir Pendafataran Perpindahan Penduduk Berhasil Dikirim, Silahkan Tunggu Konfirmasi dari Admin");
    }

    public function formulirMemintaSuratKeterangan()
    {
        return view("user.tapem.formulir-meminta-surat-keterangan");
    }
    public function formulirMemintaSuratKeteranganDetail(FormulirMemintaSuratKeterangan $fmsk)
    {
        return view("user.tapem.formulir-meminta-surat-keterangan", compact("fmsk"));
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
        $this->kirimEmail("Formulir Meminta Surat Keterangan");
        return back()->with("pesan", "Formulir Meminta Surat Keterangan Berhasil Dikirim, Silahkan Tunggu Konfirmasi dari Admin");
    }

    public function formulirKeteranganKurangMampu()
    {
        return view("user.tapem.formulir-keterangan-kurang-mampu");
    }
    public function formulirKeteranganKurangMampuDetail(FormulirKeteranganKurangMampu $fkkm)
    {
        return view("user.tapem.formulir-keterangan-kurang-mampu", compact("fkkm"));
    }
    public function formulirKeteranganKurangMampuPost(Request $request)
    {
        $request->validate([
            "nama" => "required",
            "nik" => "required",
            "ttl" => "required",
            "alamat" => "required",
            "no_telp" => "required",

            "nama_ortu" => "required",
            "ttl_ortu" => "required",
            "jenis_kelamin_ortu" => "required",
            "agama_ortu" => "required",
            "pekerjaan_ortu" => "required",
            "alamat_ortu" => "required",

            "nama_anak" => "required",
            "jenis_kelamin_anak" => "required",
            "ttl_anak" => "required",
            "sekolah_anak" => "required",

            "surat_pengantar_file" => "required",
            "ktp_file" => "required",
        ]);

        $request->file("surat_pengantar_file")->storeAs("public/tapem/surat_pengantar", $request->file("surat_pengantar_file")->getClientOriginalName());
        $request->file("ktp_file")->storeAs("public/tapem/ktp", $request->file("ktp_file")->getClientOriginalName());

        $request["surat_pengantar"] = $request->file("surat_pengantar_file")->getClientOriginalName();
        $request["ktp"] = $request->file("ktp_file")->getClientOriginalName();
        $request["user_id"] = auth()->user()->id;

        FormulirKeteranganKurangMampu::create($request->all());
        $this->kirimEmail("Formulir Keterangan Kurang Mampu");
        return back()->with("pesan", "Formulir Keterangan Kurang Mampu Berhasil Dikirim, Silahkan Tunggu Konfirmasi dari Admin");
    }

    public function kirimEmail($nama_berkas)
    {
        $user = Auth::user();
        $data = [
            "user" => $user,
            "nama_berkas" => $nama_berkas,
        ];
        Mail::send('mail.kirim_pengajuan', $data, function ($message) use ($user, $nama_berkas) {
            $message->from(env("MAIL_FROM_ADDRESS"), env("MAIL_FROM_NAME"));
            $message->to($user->email, $user->nama);
            $message->subject("Berhasil Mengirim Pengajuan Berkas " . $nama_berkas);
        });
    }
}
