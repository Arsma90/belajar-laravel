<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;
use App\Models\Pengaduan;

Route::get('/login', function () {
    return view('login');
});

Route::get('/halutama', function () {
    return view('halutama');
});

Route::post('/halutama', function () {
    return view('halutama');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/about', function () {
    return view('about');
});



Route::get('/dashboard', [PengaduanController::class, 'index']);
Route::get('/isi-pengaduan', [PengaduanController::class, 'tampil_isi_pengaduan']);
Route::post('/laporan', [PengaduanController::class, 'proses_tambah_pengaduan']);
Route::get('pengaduan/hapus{id}', [PengaduanController::class, "hapus"]);

Route::get('/detail/{id}', [PengaduanController::class, "detail"]);

Route::post('/update/{id}', [PengaduanController::class, "update"]);
Route::get('/update/{id}', [PengaduanController::class, "tampil_update"]);

Route::get('/register', [AuthController::class, "register"]);
Route::post('/register', [AuthController::class, "store"]); 
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);



