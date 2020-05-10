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

// Route::get('/', function () {
//     return view('welcome');
// });

//CRUD Data siswa

// Route::get('/siswa', 'SiswaController@all');

// Route::get('/tambah_siswa', 'SiswaController@tambahView');
// Route::post('/tambah_siswa', 'SiswaController@store');
// Route::get('/editsiswa/{id}', 'SiswaController@edit');
// Route::post('/editsiswa/{id}', 'SiswaController@update');
// Route::get('/deletesiswa/{id}', 'SiswaController@destroy');
// Route::get('/shownilai/{id}', 'NilaiController@show');
Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');
