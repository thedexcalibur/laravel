<?php

use App\Http\Controllers\DaftarProdukController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Produk;
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

Route::get('/', [HomeController::class, 'pastibisa']);


Route::get('/login', [LoginController::class, 'ayobisa'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::resource('/dashboard', DaftarProdukController::class)->middleware('admin');
route::get('/keranjang', function () {
    return view('keranjang');
})->middleware('auth');
route::get('/detailproduk', function () {
    return view('detailproduk', [
        'produk' => Produk::all(),
    ]);
});
Route::get('/pelanggan', function () {
    return view('pelanggan', [
        'active' => 'Daftar Pelanggan'
    ]);
})->middleware('auth');
Route::get('/detailpelanggan', function () {
    return view('detailpelanggan', [
        'active' => 'Daftar Pelanggan'
    ]);
})->middleware('auth');
Route::get('/ubahproduk', function () {
    return view('ubahproduk', [
        'active' => 'Daftar Produk'
    ]);
})->middleware('auth');
