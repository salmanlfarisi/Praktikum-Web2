<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Bikin routing ke dashboard pake controller
Route :: get ('/dashboard', [DashboardController::class,'index']);
// Bikin routing ke produk pake controller
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/kategori_produk', [ProdukController::class, 'index2'])->name('produk');