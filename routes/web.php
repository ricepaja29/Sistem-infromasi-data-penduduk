<?php

use App\Http\Controllers\DataPendudukController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', [DataPendudukController::class, 'index'])->name('home')->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DataPendudukController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/edit{id}', [DataPendudukController::class, 'edit'])->name('data-penduduk.edit');
    Route::put('/update/{id}', [DataPendudukController::class, 'update'])->name('data-penduduk.update');

    // Route::get('/', [DataPendudukController::class, 'index'])->name('home');
    Route::delete('/data-penduduk/{id}', [DataPendudukController::class, 'destroy'])->name('data-penduduk.destroy');

    Route::get('/add-data-penduduk', [DataPendudukController::class, 'create'])->name('data-penduduk.create');
    Route::post('/add-data-penduduk', [DataPendudukController::class, 'store'])->name('data-penduduk.store');
});

require __DIR__ . '/auth.php';
