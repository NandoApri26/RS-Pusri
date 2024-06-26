<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\landingpageController;
use App\Http\Controllers\tentangkamiController;
use App\Http\Controllers\dokterController;
use App\Http\Controllers\layananController;
use App\Http\Controllers\informasiController;
use App\Http\Controllers\hubungiKamiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/used-component', function () {
    return view('used-component');
});

Route::get('/', [landingpageController::class, 'index'])->name('beranda');
Route::get('/tentang-kami', [tentangkamiController::class, 'index'])->name('tentang-kami');

// Layanan
Route::prefix('/layanan')->group(function () {
    Route::get('/jadwal', [layananController::class, 'jadwal'])->name('jadwal');
    Route::get('/rawat-jalan', [layananController::class, 'rawatJalan'])->name('rawat-jalan');
    Route::get('/rawat-inap', [layananController::class, 'rawatInap'])->name('rawat-inap');
    Route::get('/tipe-ruangan', [layananController::class, 'tipeRuangan'])->name('tipe-ruangan');
    Route::get('/detail-ruangan', [layananController::class, 'detailRuangan'])->name('detail-ruangan');
});

// Doketer
Route::get('/dokter', [dokterController::class, 'index'])->name('dokter');
Route::get('/detail-dokter', [dokterController::class, 'detail'])->name('detail-dokter');

// Informasi
Route::prefix('/informasi')->group(function () {
    Route::get('/berita', [informasiController::class, 'berita'])->name('berita');
    Route::get('/detail-berita', [informasiController::class, 'detailBerita'])->name('detail-berita');
    Route::get('/galeri', [informasiController::class, 'galeri'])->name('galeri');
});

// Kontak
Route::prefix('/hubungi-kami')->group(function () {
    Route::get('', [hubungiKamiController::class, 'kontak'])->name('kontak');
});

