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
Route::get('/siswa/{nis}', 'SiswaApiController@show');
Route::get('/nilai/{nis}', 'SiswaApiController@shownilai');
Route::get('/siswa/{nis}/{semester}', 'SiswaApiController@nilaiSemester');
Route::post('/tambah_siswa', 'SiswaApiController@store');
Route::put('/editsiswa/{id}', 'SiswaApiController@update');
Route::delete('/deletesiswa/{id}', 'SiswaApiController@destroy');

// Route::get('/editsiswa/{id}', 'SiswaController@edit');
// Route::post('/editsiswa/{id}', 'SiswaController@update');
// Route::get('/shownilai/{id}', 'NilaiController@show');
