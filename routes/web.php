<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserKesosController;
use App\Http\Controllers\UserPpsdaController;
use App\Http\Controllers\UserTapemController;
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

Route::get('/', [DashboardController::class, "home"]);

Route::get("/login", [AuthController::class, "login"])->name("login")->middleware("guest");
Route::post("/login", [AuthController::class, "loginPost"]);
Route::get("/logout", [AuthController::class, "logout"]);

// PPSDA
Route::get("/ppsda", [UserPpsdaController::class, "index"]);

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

// KESOS
Route::get("/kesos", [UserKesosController::class, "index"]);

Route::get("/kesos/skck", [UserKesosController::class, "skck"]);
Route::post("/kesos/skck", [UserKesosController::class, "skckPost"]);

Route::get("/kesos/keterangan-usaha", [UserKesosController::class, "keteranganUsaha"]);
Route::post("/kesos/keterangan-usaha", [UserKesosController::class, "keteranganUsahaPost"]);

// TAPEM
Route::get("/tapem", [UserTapemController::class, "index"]);
