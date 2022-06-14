<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\KasMasjidController;
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




Route::get('/', function(){
    return view('layouts.event');
});

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');

//get data kas masjid
Route::get('/kas-masjid-rekap', [KasMasjidController::class, 'rekap']);
Route::get('/kas-masjid-pengeluaran', [KasMasjidController::class, 'keluar']);
Route::get('/kas-masjid-pemasukan', [KasMasjidController::class, 'masuk']);
Route::get('/kas-masjid-pemasukan/delete/{id}', [KasMasjidController::class, 'destroy']);

//post data kas masjid
Route::post('kas-masjid/pemasukan/tambah', [KasMasjidController::class, 'storePemasukan'])->name('kasmasjid.masuk');

// Route::get('/pemasukan-masjid', [PemasukanMasjidController, s])
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
