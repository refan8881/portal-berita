<?php

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

use App\Mahasiswa;
use App\dosen;
use App\hobi;

Route::get('/', function () {
    return view('welcome');
});


//relasi
Route::get('artikel', function () {
    $penulis = \App\User::find(1);

    foreach ($penulis->artikel as $data) {
        echo "Judul : $data->judul";
        echo "<br>";
        echo "Deskripsi : $data->deskripsi";
        echo "<br>";
        echo "Slug : $data->slug";
        echo "<hr>";
    }
});
//relasi



route::get('relasi-1', function () {
    //mencari mahasiswa dengan nim 12131
    $mahasiswa = Mahasiswa::where('nim', '=', '12131')->first();
});
route::get('relasi-2', function () {
    //mencari mahasiswa dengan nim 122131
    $mahasiswa = Mahasiswa::where('nim', '=', '122131')->first();
});
route::get('relasi-3', function () {
    //mencari dosen yang bernama yusup
    $dosen = dosen::where('nama', '=', 'yusup')->first();
});


route::resource('Siswa', 'SiswaController');
Route::get('tabungan/report', 'TabunganController@jumlah_tabungan');
route::resource('tabungan', 'TabunganController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
