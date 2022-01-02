<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\JenisController;
use App\Http\Controllers\Backend\ProdukController;
use App\Http\Controllers\Backend\SatuanProdukController;
use App\Http\Controllers\Backend\TransaksiController;
use App\Http\Controllers\Login\AuthController;

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
    return redirect('login');
});
Route::get('tes', function () {
    $title = 'Jajal';
    return view('layouts.master', compact('title'));
});
Route::get('login', [AuthController::class, 'login']);
Route::post('post-login', [AuthController::class, 'postlogin'])->name('post.login');
Route::get('login/cek-username/json', [AuthController::class, 'cekusername']);
Route::get('login/cek-password/json', [AuthController::class, 'cekpassword']);

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::resource('jenis', JenisController::class);

Route::resource('satuan-produk', SatuanProdukController::class);

Route::resource('produk', ProdukController::class);

Route::resource('transaksi', TransaksiController::class);
Route::get('produk/cari/{id}', [TransaksiController::class, 'cari'])->name('produk.cari');
