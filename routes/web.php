<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\KasMasjidController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/login', function(){
    return view('auth.login');
});
Route::get('/home', function(){
    return view('home');
});

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');

//get data kas masjid
Route::get('/kas-masjid-rekap', [KasMasjidController::class, 'rekap']);
Route::get('/kas-masjid-pengeluaran', [KasMasjidController::class, 'keluar']);
Route::get('/kas-masjid-pemasukan', [KasMasjidController::class, 'masuk']);

//post data kas masjid
Route::post('kas-masjid/pemasukan/tambah', [KasMasjidController::class, 'storePemasukan'])->name('kasmasjid.masuk');
Route::post('kas-masjid/pengeluaran/tambah', [KasMasjidController::class, 'storePengeluaran'])->name('kasmasjid.masuk');

//edit data kas masjid
Route::put('kas-masjid-pemasukan/edit/{id}', [KasMasjidController::class, 'editPemasukan'])->name('kasmasjid.editMasuk');
Route::put('kas-masjid-pengeluaran/edit/{id}', [KasMasjidController::class, 'editPengeluaran'])->name('kasmasjid.editKeluar');

//delete kas masjid
Route::get('/kas-masjid/delete/{id}', [KasMasjidController::class, 'destroy']);



//get data kas masjid
Route::get('/kas-sosial-rekap', [KasSosialController::class, 'rekap']);
Route::get('/kas-sosial-pengeluaran', [KasSosialController::class, 'keluar']);
Route::get('/kas-sosial-pemasukan', [KasSosialController::class, 'masuk']);

//post data kas sosial
Route::post('kas-sosial/pemasukan/tambah', [KasSosialController::class, 'storePemasukan'])->name('kassosial.masuk');
Route::post('kas-sosial/pengeluaran/tambah', [KasSosialController::class, 'storePengeluaran'])->name('kassosial.masuk');

//edit data kas sosial
Route::put('kas-sosial-pemasukan/edit/{id}', [KasSosialController::class, 'editPemasukan'])->name('kassosial.editMasuk');
Route::put('kas-sosial-pengeluaran/edit/{id}', [KasSosialController::class, 'editPemasukan'])->name('kassosial.editMasuk');

//delete kas sosial
Route::get('/kas-sosial/delete/{id}', [KasSosialController::class, 'destroy']);

Auth::routes();

