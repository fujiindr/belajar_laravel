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
Route::get('blog', function () {
    $data = [
        ['id' => 1, 'title' => 'Lorem Ipsum 1', 'content' => 'content pertama'],
        ['id' => 2, 'title' => 'Lorem Ipsum 2', 'content' => 'content kedua'],
        ['id' => 3, 'title' => 'Lorem Ipsum 3', 'content' => 'content ketiga'],
    ];
    // dd($data);
    return view('blog', compact('data'));
});
Route::get('siswa', function () {
    $data = [
        ['nis' => 19201753236, 'nama' => 'Cindy', 'jk' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 19201753237, 'nama' => 'Dinda', 'jk' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 19201753238, 'nama' => 'Fuji', 'jk' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 19201753239, 'nama' => 'Indah', 'jk' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 19201753240, 'nama' => 'Indri', 'jk' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 19201753241, 'nama' => 'Irfan', 'jk' => 'Laki-Laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 19201753242, 'nama' => 'Kiki', 'jk' => 'Laki-Laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 19201753243, 'nama' => 'Lia', 'jk' => 'Perempuan', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 19201753244, 'nama' => 'M Resta', 'jk' => 'Laki-Laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
        ['nis' => 19201753245, 'nama' => 'M Zulfan', 'jk' => 'Laki-Laki', 'kelas' => 'XII RPL 3', 'alamat' => 'Bandung'],
    ];
    // dd($data);
    return view('siswa', compact('data'));
});
