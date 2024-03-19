<?php

use Illuminate\Support\Facades\Route;

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
    return view('tabel');
});

