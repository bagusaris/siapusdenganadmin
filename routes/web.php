<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\PuskesmasController;
use App\Http\Controllers\AntreanController;

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

Route::get('/', [PuskesmasController::class, 'index'])->name('beranda');

Route::get('/informasipoli', function () {
    return view('siapus.informasipoli');
})->name('informasipoli');

Route::get('/daftar', function () {
    return view('siapus.pendaftaranantrean');
})->name('daftar');

// Route::get('/tiket', function () {
//     return view('siapus.antreansaya');
// })->name('tiket');

//pasien
Route::get('/kabupaten', [PasienController::class, 'kabupaten'])->name('kabupaten.kabupaten');
Route::get('/kecamatan', [PasienController::class, 'kecamatan'])->name('kecamatan.kecamatan');
Route::get('/desa', [PasienController::class, 'desa'])->name('desa.desa');
Route::Resource('/pasiens', PasienController::class);

//puskesmas
Route::get('/puskesmas/index', [PuskesmasController::class, 'get'])->name('puskesmas.get');
Route::get('/poli/find', [PuskesmasController::class, 'poli'])->name('puskesmas.poli');
Route::Resource('/puskesmas', PuskesmasController::class);

//antrean
Route::get('/saat_ini/{id_poli}/{id_puskesmas}',[AntreanController::class,'saat_ini'])->name('antrean.saat_ini');
Route::Resource('/tiket', AntreanController::class);

//admin
Route::get('/admin', function () {
    return view('adminapus.dashboard');
})->name('admin');

Route::get('/pasien', function () {
    return view('adminapus.datapasien');
})->name('pasien');