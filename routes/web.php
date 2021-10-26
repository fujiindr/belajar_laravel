<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('hal2', function () {
    return "<h1>Selamat Datang Dihalaman Kedua</h1>";
});
Route::get('biodata', function () {
    $nama = "Fuji Indah Rahayu";
    $jk = "Perempuan";
    $tl = "Bandung";
    $tgl = "23 Mei 2005";
    $alamat = "Kp.Bojong Citepus";
    $agama = "Islam";
    $hobi = "Voli";
    return
        "Nama : " . $nama . "<br>
        Jenis Kelamin : " . $jk . "<br>
        Tempat Lahir : " . $tl . "<br>
        Tanggal Lahir : " . $tgl . "<br>
        Alamat : " . $alamat . "<br>
        Agama : " . $agama . "<br>
        Hobi : " . $hobi;
});
Route::get('biodata2', function () {
    $nama = "Fuji Indah Rahayu";
    $jk = "Perempuan";
    $tl = "Bandung";
    $tgl = "23 Mei 2005";
    $alamat = "Kp.Bojong Citepus";
    $agama = "Islam";
    $hobi = "Voli";

    return view('biodata',
        compact('nama', 'jk', 'tl', 'tgl', 'alamat', 'agama', 'hobi'));
});
