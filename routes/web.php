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

Route::get('/', function () {
    return view('welcome');
});


//relasi
route::get('artikel', function () {
    $penulis = \App\User::find(1);

    foreach ($penulis->artikel as $data) {
        echo "Judul : $data->judul";
        echo "Deskripsi : $data->deskripsi";
        echo "Slug : $data->slug";
        echo "<br>";
    }
});
