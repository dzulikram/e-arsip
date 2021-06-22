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
    return view('dashboard');
});

Route::get('/input', function () {
    return view('tagihan.create');
});

Route::get('/edit', function () {
    return view('tagihan.edit');
});

Route::get('/input-bayar', function () {
    return view('pembayaran.create');
});

Route::get('/show', function () {
    return view('tagihan.show');
});

Route::get('/show2', function () {
    return view('tagihan.show2');
});

Route::get('/approve', function () {
    return view('approval.list');
});

Route::get('map', 'MapController@index');
Route::get('api', 'MapController@api');
Route::get('cekping/{id}', 'MapController@cekping');
