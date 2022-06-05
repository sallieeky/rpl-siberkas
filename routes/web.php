<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserKesosController;
use App\Http\Controllers\UserPpsdaController;
use App\Http\Controllers\UserTapemController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth'])->group(function () {
  Route::get('/', [DashboardController::class, "home"])->name('home');
  Route::get('/profile', [DashboardController::class, "profile"]);
  Route::post('/profile/update/{user}', [DashboardController::class, "profileUpdate"]);
  Route::get('/history', [DashboardController::class, "history"]);
  Route::get('/kritik-dan-saran', [DashboardController::class, "kritikDanSaran"]);
  Route::post('/kritik-dan-saran', [DashboardController::class, "kritikDanSaranPost"]);

  Route::middleware(['user_lengkap'])->group(function () {
    Route::get("/ppsda/keperluan-pbb", [UserPpsdaController::class, "keperluanPbb"]);
    Route::post("/ppsda/keperluan-pbb", [UserPpsdaController::class, "keperluanPbbPost"]);

    Route::get("/ppsda/keterangan-harga-bangunan", [UserPpsdaController::class, "keteranganHargaBangunan"]);
    Route::post("/ppsda/keterangan-harga-bangunan", [UserPpsdaController::class, "keteranganHargaBangunanPost"]);

    Route::get("/ppsda/keterangan-memiliki-bangunan", [UserPpsdaController::class, "keteranganMemilikiBangunan"]);
    Route::post("/ppsda/keterangan-memiliki-bangunan", [UserPpsdaController::class, "keteranganMemilikiBangunanPost"]);

    Route::get("/ppsda/keterangan-memiliki-tanah", [UserPpsdaController::class, "keteranganMemilikiTanah"]);
    Route::post("/ppsda/keterangan-memiliki-tanah", [UserPpsdaController::class, "keteranganMemilikiTanahPost"]);

    Route::get("/ppsda/keterangan-njop", [UserPpsdaController::class, "keteranganNjop"]);
    Route::post("/ppsda/keterangan-njop", [UserPpsdaController::class, "keteranganNjopPost"]);

    Route::get("/kesos/skck", [UserKesosController::class, "skck"]);
    Route::post("/kesos/skck", [UserKesosController::class, "skckPost"]);

    Route::get("/kesos/keterangan-usaha", [UserKesosController::class, "keteranganUsaha"]);
    Route::post("/kesos/keterangan-usaha", [UserKesosController::class, "keteranganUsahaPost"]);

    Route::get("/kesos/pengantar-nikah", [UserKesosController::class, "pengantarNikah"]);
    Route::post("/kesos/pengantar-nikah", [UserKesosController::class, "pengantarNikahPost"]);

    Route::get("/tapem/formulir-pendaftaran-perpindahan-penduduk", [UserTapemController::class, "formulirPendaftaranPerpindahanPenduduk"]);
    Route::post("/tapem/formulir-pendaftaran-perpindahan-penduduk", [UserTapemController::class, "formulirPendaftaranPerpindahanPendudukPost"]);

    Route::get("/tapem/formulir-meminta-surat-keterangan", [UserTapemController::class, "formulirMemintaSuratKeterangan"]);
    Route::post("/tapem/formulir-meminta-surat-keterangan", [UserTapemController::class, "formulirMemintaSuratKeteranganPost"]);

    Route::get("/tapem/formulir-keterangan-kurang-mampu", [UserTapemController::class, "formulirKeteranganKurangMampu"]);
    Route::post("/tapem/formulir-keterangan-kurang-mampu", [UserTapemController::class, "formulirKeteranganKurangMampuPost"]);
  });
  // PPSDA
  Route::get("/ppsda", [UserPpsdaController::class, "index"]);

  Route::get("/ppsda/pbb/detail/{pbb}", [UserPpsdaController::class, "keperluanPbbDetail"]);
  Route::get("/ppsda/keterangan_harga_bangunan/detail/{khb}", [UserPpsdaController::class, "keteranganHargaBangunanDetail"]);
  Route::get("/ppsda/keterangan_memiliki_bangunan/detail/{kmb}", [UserPpsdaController::class, "keteranganMemilikiBangunanDetail"]);
  Route::get("/ppsda/keterangan_memiliki_tanah/detail/{kmt}", [UserPpsdaController::class, "keteranganMemilikiTanahDetail"]);
  Route::get("/ppsda/keterangan_njop/detail/{njop}", [UserPpsdaController::class, "keteranganNjopDetail"]);



  // KESOS
  Route::get("/kesos", [UserKesosController::class, "index"]);

  Route::get("/kesos/skck/detail/{skck}", [UserKesosController::class, "skckDetail"]);
  Route::get("/kesos/keterangan_usaha/detail/{ku}", [UserKesosController::class, "keteranganUsahaDetail"]);
  Route::get("/kesos/pengantar_nikah/detail/{pn}", [UserKesosController::class, "pengantarNikahDetail"]);



  // TAPEM
  Route::get("/tapem", [UserTapemController::class, "index"]);

  Route::get("/tapem/formulir_pendaftaran_perpindahan_penduduk/detail/{fppp}", [UserTapemController::class, "formulirPendaftaranPerpindahanPendudukDetail"]);
  Route::get("/tapem/formulir_meminta_surat_keterangan/detail/{fmsk}", [UserTapemController::class, "formulirMemintaSuratKeteranganDetail"]);
  Route::get("/tapem/formulir_keterangan_kurang_mampu/detail/{fkkm}", [UserTapemController::class, "formulirKeteranganKurangMampuDetail"]);



  // ADMIN
  Route::get("/berkas-masuk", [AdminController::class, "berkasMasuk"]);
  Route::post("/upload-berkas-balasan", [AdminController::class, "uploadBerkasBalasan"]);
  Route::post("/update-status", [AdminController::class, "updateStatus"]);

  Route::get("/admin/kritik-dan-saran", [AdminController::class, "kritikDanSaran"]);

  Route::get("/kelola-user", [AdminController::class, "kelolaUser"]);
  Route::post("/kelola-user/tambah", [AdminController::class, "kelolaUserTambah"]);
  Route::get("/kelola-user/delete/{user}", [AdminController::class, "kelolaUserDelete"]);
});


Route::get("/login", [AuthController::class, "login"])->name("login")->middleware("guest");
Route::post("/login", [AuthController::class, "loginPost"]);
Route::get("/logout", [AuthController::class, "logout"]);
