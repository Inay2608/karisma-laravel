<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/intro', function () {
    return view('introduction');
});

Route::get('/angka/{angka}', function ($angka) {
    return 'Nilai : '. $angka;
});

Route::get('/penjumlahan/{angka1}/{angka2}', function ($angka1, $angka2) {
    return 'Hasil Penjumlahan : '. $angka1 + $angka2;
});

Route::get('/pengurangan/{angka1}/{angka2}', function ($angka1, $angka2) {
    return 'Hasil Pengurangan : '. $angka1 - $angka2;
});

Route::get('/coba', function () {
    return view('coba');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/tabel', function () {
    $data = ['meja', 'kursi', 'lampu', 'pensil', 'buku'];
    return view('tabel', compact('data'));
});

// Route::get('siswa', [SiswaController::class, 'index']);

Route::resource('siswa', SiswaController::class)->middleware(['auth', 'admin']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
