<?php

// use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BukuController;
use App\Http\Controllers\Api\RekapController;

// Route::apiResource('buku', BukuController::class);
// Route::name('api.')->group(function () {
//     Route::apiResource('buku', BukuController::class);
// });


Route::middleware('auth:sanctum')->group(function () {

    // API Buku: melihat daftar dan detail
    Route::get('/buku', [BukuController::class, 'index'])
        ->middleware('permission:lihat daftar buku');

    Route::get('/buku/{id}', [BukuController::class, 'show'])
        ->middleware('permission:lihat daftar buku');

    // API Buku: mengelola data buku
    Route::middleware('can:kelola-buku')->group(function () {

        Route::post('/buku', [BukuController::class, 'store']);

        Route::put('/buku/{id}', [BukuController::class, 'update']);

        Route::patch('/buku/{id}', [BukuController::class, 'update']);

        Route::delete('/buku/{id}', [BukuController::class, 'destroy']);
    });

    // API Rekap
    Route::get('/rekap/buku-per-kategori', [RekapController::class, 'bukuPerKategori'])
        ->middleware('permission:lihat laporan perpustakaan');

    Route::get('/rekap/pemminjaman-per-buku', [RekapController::class, 'peminjamanPerBuku'])
        ->middleware('permission:lihat laporan perpustakaan');
});

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
