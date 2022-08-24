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



Route::get('test', function () {
    return view('admin.dashboard.test');
});
Route::group([
    'prefix' => 'admin',
    // 'namespace' => 'Admin',
    'as' => 'admin.'
], function () {
    Route::group(['middleware' => ['role:admin', 'auth']], function () {
        Route::get('/', 'Admin\DashboardController@index')->name('index');
        Route::resource('logout', 'Auth\LoginController');
        Route::resource('data-penduduk', 'Admin\DataPendudukController');
        Route::resource('data-kelahiran', 'Admin\DataKelahiranController');
        Route::resource('data-kematian', 'Admin\DataKematianController');
        Route::resource('data-perkawinan', 'Admin\DataPerkawinanController');
        Route::resource('data-perceraian', 'Admin\DataPerceraianController');
        Route::resource('data-pendatang', 'Admin\DataPendatangController');
        Route::resource('data-perpindahan', 'Admin\DataPerpindahanController');
        Route::resource('data-pekerja-migran', 'Admin\DataPekerjaController');
        Route::resource('data-vaksin', 'Admin\DataVaksinController');
        Route::resource('data-bansos', 'Admin\DataBansosController');
        Route::resource('surat-menyurat', 'Admin\SuratMenyuratController');
        Route::post('penduduk', 'Admin\DataPendudukController@import_excel')->name('penduduk.import_excel');
        Route::resource('sku', 'Admin\SKUController');
        Route::resource('skd', 'Admin\SKDController');
        Route::resource('sks', 'Admin\SKSController');
        Route::resource('skt', 'Admin\SKTController');
    });
});

Route::get('/admin', [\App\Http\Controllers\HomeController::class, 'index'])->name('admin');

Auth::routes();

// Route yang di pake ketika kepala desa sudah login
Route::get('index', 'KepalaDesa\BerandaController@index')->name('desa.index');
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
Route::get('surat', 'KepalaDesa\BerandaController@surat')->name('surat');
Route::get('skdomisili', 'KepalaDesa\BerandaController@skdomisili')->name('skdomisili');
Route::get('skstatus', 'KepalaDesa\BerandaController@skstatus')->name('skstatus');
Route::get('sktanah', 'KepalaDesa\BerandaController@sktanah')->name('sktanah');
Route::get('skusaha', 'KepalaDesa\BerandaController@skusaha')->name('skusaha');

// Route::get('admin/sku/cetak/{$id}',[SKUController::class,'cetak'])->name('admin.sku.cetak');


Route::get('test', function () {
    return view('admin.dashboard.test');
})->name('test');
