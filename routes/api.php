<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/siswa', 'SiswaApiController@all');
Route::get('/siswa/{id}', 'SiswaApiController@show');
Route::get('/siswa/{id}/{semester}', 'SiswaController@nilaiSemester');
Route::post('/tambah_siswa', 'SiswaApiController@store');
Route::put('/editsiswa/{id}', 'SiswaApiController@store');

// Route::get('/editsiswa/{id}', 'SiswaController@edit');
// Route::post('/editsiswa/{id}', 'SiswaController@update');
// Route::get('/deletesiswa/{id}', 'SiswaController@destroy');
// Route::get('/shownilai/{id}', 'NilaiController@show');
