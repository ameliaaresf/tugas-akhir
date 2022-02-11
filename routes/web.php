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

Route::get('/index', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/datapenduduk', function () {
    return view('datapenduduk');
});

Route::get('/datakelahiran', function () {
    return view('datakelahiran');
});

Route::get('/datakematian', function () {
    return view('datakematian');
});

Route::get('/dataperkawinan', function () {
    return view('dataperkawinan');
});

Route::get('/dataperceraian', function () {
    return view('dataperceraian');
});

Route::get('/datapendatang', function () {
    return view('datapendatang');
});

Route::get('/dataperpindahan', function () {
    return view('dataperpindahan');
});

Route::get('/laporandata', function () {
    return view('laporandata');
});

Route::get('/home', function () {
    return view('sidesa.index');
});
