<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\KepalaDesa\BerandaController;

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



Route::get('test', function (){
    return view ('admin.dashboard.test');
});
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.'
], function () {
    Route::group(['middleware' => ['role:admin', 'auth']], function () {
            Route::get('/', [DashboardController::class, 'index'])->name('index');
            Route::resource('data-penduduk', DataPendudukController::class);
            Route::resource('data-kelahiran', DataKelahiranController::class);
            Route::resource('data-kematian', DataKematianController::class);
            Route::resource('data-perkawinan', DataPerkawinanController::class);
            Route::resource('data-perceraian', DataPerceraianController::class);
            Route::resource('data-pendatang', DataPendatangController::class);
            Route::resource('data-perpindahan', DataPerpindahanController::class);
            Route::resource('data-pekerja-migran', DataPekerjaController::class);
            Route::resource('data-vaksin', DataVaksinController::class);
            Route::resource('data-bansos', DataBansosController::class);
            Route::resource('laporan-data', LaporanDataController::class);
            Route::resource('surat-menyurat', SuratMenyuratController::class);
            Route::resource('sku', SKUController::class);
            Route::resource('skd', SKDController::class);
            Route::resource('sks', SKSController::class);
            Route::resource('skt', SKTController::class);

    });
});

Route::get('/admin', [\App\Http\Controllers\HomeController::class, 'index'])->name('admin');

Auth::routes();

Route::get('index', 'KepalaDesa\BerandaController@index')->name('index');
Route::get('bansos', 'KepalaDesa\BerandaController@bansos')->name('bansos');
Route::get('penduduk', 'KepalaDesa\BerandaController@penduduk')->name('penduduk');
Route::get('kelahiran', 'KepalaDesa\BerandaController@kelahiran')->name('kelahiran');
Route::get('kematian', 'KepalaDesa\BerandaController@kematian')->name('kematian');
Route::get('perkawinan', 'KepalaDesa\BerandaController@perkawinan')->name('perkawinan');
Route::get('perceraian', 'KepalaDesa\BerandaController@perceraian')->name('perceraian');
Route::get('pendatang', 'KepalaDesa\BerandaController@pendatang')->name('pendatang');
Route::get('perpindahan', 'KepalaDesa\BerandaController@perpindahan')->name('perpindahan');
Route::get('pekerja', 'KepalaDesa\BerandaController@pekerja')->name('pekerja');
Route::get('vaksin', 'KepalaDesa\BerandaController@vaksin')->name('vaksin');
// Route::get('admin/sku/cetak/{$id}',[SKUController::class,'cetak'])->name('admin.sku.cetak');




