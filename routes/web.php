<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerLaporan;

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

Route::get('/', [ControllerLaporan::class, 'index']);
Route::get('/selesai', [ControllerLaporan::class, 'indexSelesai']);
Route::get('/belum', [ControllerLaporan::class, 'indexBelum']);
Route::get('/info/{id}', [ControllerLaporan::class, 'deskripsi']);
Route::get('/addData', function () {
    return view('addLaporan');
});

Route::post('/addData', [ControllerLaporan::class, 'addData'])->name('addDataLaporan');
Route::get('/formlaporan/{id}', [ControllerLaporan::class, 'formEdit']);
Route::match(['put','get'],'/laporan/{id}', [ControllerLaporan::class, 'editLaporan'])->name('editDataLaporan');
Route::match(['delete','get'],'/deleteLaporan/{id}',[ControllerLaporan::class, 'deleteData'])->name('deleteData');
Route::put('/updateStatus/{id}', [ControllerLaporan::class, 'updateStatus'])->name('editStatus');