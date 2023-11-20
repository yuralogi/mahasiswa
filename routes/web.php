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

// Route::get('/home', function () {
//     return view('v_home');
// });

Route::get('/home', [\App\Http\Controllers\Mahasiswa::class, 'getDataMahasiswa'] );
Route::get('/tambah', [\App\Http\Controllers\Mahasiswa::class, 'showTambahDataMahasiswa'] );
Route::post('/tambah-data-mhs', [\App\Http\Controllers\Mahasiswa::class, 'addDataMahasiswa'] );
Route::get('/hapus-data-mhs', [\App\Http\Controllers\Mahasiswa::class, 'deleteDataMahasiswa']);
Route::get('/edit-data-mhs', [\App\Http\Controllers\Mahasiswa::class, 'editDataMahasiswa']);

Route::get('/test-template', function () {
    return view('template.v_test_template');
});
