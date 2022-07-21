<?php

use App\Http\Controllers\DaftarProdukController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Kursus;
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
Route::get('/detailproduk', [HomeController::class, 'ayobisa'])->middleware('auth');


Route::get('/login', [LoginController::class, 'ayobisa'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/detailproduk/{id}', [HomeController::class, 'produkdetail'])->middleware('auth');
// Route::get('/pelanggan', [HomeController::class, 'data_Mahasiswa'])->middleware('admin');

Route::resource('/dashboard', DaftarProdukController::class)->middleware('admin');
