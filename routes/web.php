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

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact', ['name' => 'baba dae', 'phone' => '085...']);
});

Route::view('/contact', 'contact', ['name' => 'baba dae', 'phone' => '085...']);

Route::redirect('/contact', '/contact us');

Route::get('/product', function() {
    return 'product';
});

//use App\Http\Controllers\DosenController;

//Route::get('dosen', [DosenController::class, 'index']);


//use App\Http\Controllers\PegawaiController;

//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

//Route::get('/formulir', 'PegawaiController@formulir');
//Route::post('/formulir/proses', 'PegawaiController@proses');

// // Route CRUD untuk Pegawai
// use App\http\Cotrollers\PegawaiController;
// Route::get('/pegawai', 'PegawaiController@index'); // Menampilkan daftar pegawai

use App\Http\Controllers\PegawaiController;

Route::get('/pegawai', [PegawaiController::class, 'index']);

Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiController::class, 'cari']);

use App\Http\Controllers\MalasngodingController;

Route::get('/input', [MalasngodingController::class, 'input']);

Route::post('/proses', [MalasngodingController::class, 'proses']);

use App\Http\Controllers\PegawaiiController;
Route::get('/pegawaii', [PegawaiiController::class, 'index']);
Route::get('/pegawaii/tambah', [PegawaiiController::class, 'tambah']);
Route::post('/pegawaii/store', [PegawaiiController::class, 'store']);
Route::get('/pegawaii/edit/{id}', [PegawaiiController::class, 'edit']);
Route::post('/pegawaii/update', [PegawaiiController::class, 'update']);
Route::get('/pegawaii/delete/{id}',[PegawaiiController::class, 'delete']);


