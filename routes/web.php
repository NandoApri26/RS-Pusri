<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\landingpageController;
use App\Http\Controllers\tentangkamiController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\layananController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/used-component', function () {
    return view('used-component');
});

Route::get('/beranda', [landingpageController::class, 'index'])->name('beranda');
Route::get('/tentang-kami', [tentangkamiController::class, 'index'])->name('tentang-kami');

Route::get('/layanan', [layananController::class, 'jadwal'])->name('jadwal');
Route::get('/rawat-jalan', [layananController::class, 'rawatJalan'])->name('rawat-jalan');
Route::get('/rawat-inap', [layananController::class, 'rawatInap'])->name('rawat-inap');
Route::get('/detail-ruangan', [layananController::class, 'detailRuangan'])->name('detail-ruangan');
