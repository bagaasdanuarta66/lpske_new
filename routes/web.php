<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LogbookController;

// Landing Page
Route::get('/', [LandingController::class, 'index'])
    ->name('home'); // Nama route diubah menjadi 'home' untuk kompatibilitas

// Asisten Laboratorium Routes
Route::prefix('asisten-laboratorium')->group(function () {
    Route::get('/', [LandingController::class, 'asistenLaboratorium'])->name('asisten-laboratorium');
    Route::get('/angkatan/{angkatan}', [LandingController::class, 'asistenByAngkatan'])->name('asisten.angkatan');
});

// Kepala Laboratorium
Route::get('/kepala-laboratorium', [LandingController::class, 'kepalaLaboratorium'])->name('kepala-laboratorium');

// Dosen Laboratorium
Route::get('/dosen-laboratorium', [LandingController::class, 'dosenLaboratorium'])->name('dosen-laboratorium');

// Prestasi & Kegiatan
Route::controller(\App\Http\Controllers\PrestasiKegiatanController::class)
    ->prefix('prestasi-kegiatan')
    ->name('prestasi-kegiatan.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{prestasiKegiatan}', 'show')->name('show');
    });

// Logbook
Route::get('/recent-logbook', [LogbookController::class, 'getRecentLogbook'])->name('logbook.recent');

// Public route for alumni
Route::get('/alumni', [\App\Http\Controllers\AlumniStoryController::class, 'index'])
    ->name('public.alumni.index');
