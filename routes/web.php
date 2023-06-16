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
Route::get('/info/{id}', [ControllerLaporan::class, 'deskripsi']);
Route::get('/addData', function () {
    return view('addLaporan');
});

Route::post('/addData', [ControllerLaporan::class, 'addData'])->name('addDataLaporan');
Route::put('/laporan/{id}', [ControllerLaporan::class, 'updateData'])->name('editDataLaporan');
Route::delete('/deleteLaporan/{id}',[ControllerLaporan::class, 'deleteData'])->name('deleteData');
