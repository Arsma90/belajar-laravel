<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\LoginPetugasController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\MasyarakatController;
use App\Models\Pengaduan;


Route::get('/register', [AuthController::class, "register"]);
Route::post('/register', [AuthController::class, "store"]); 
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/loginpetugas', [LoginPetugasController::class, 'index']);
Route::post('/loginpetugas', [LoginPetugasController::class, 'login']);



    Route::middleware(['auth'])->group(function () {
        Route::get('/halutama', function () {return view('halutama');});
        Route::get('/dashboard', [PengaduanController::class, 'index']);
        Route::get('/isi-pengaduan', [PengaduanController::class, 'tampil_isi_pengaduan']);
        Route::post('/laporan', [PengaduanController::class, 'proses_tambah_pengaduan']);
        Route::get('pengaduan/hapus{id}', [PengaduanController::class, "hapus"]);
        Route::get('/detail/{id}', [PengaduanController::class, "detail"]);
        Route::post('/update/{id}', [PengaduanController::class, "update"]);
        Route::get('/update/{id}', [PengaduanController::class, "tampil_update"]);

        Route::get('/logout', [LoginController::class, 'logout']);
    });

    //Route::middleware(['cek_petugas'])->group(function () {
        Route::get('/petugas/home', [PetugasController::class, "index"]);
    
        Route::get('petugas/logout', [LoginPetugasController::class, "logout"]);
    //});



