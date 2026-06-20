<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\CostumerController;
use App\Http\Controllers\TambahKController;
use App\Http\Controllers\TambahCController;
use App\Http\Controllers\AdministrasiController;

Route::get('/', function () {
    return view('layouts.template');
});

Route::resource('karyawan', KaryawanController::class);
Route::resource('costumer', CostumerController::class);
Route::resource('tambahk', TambahKController::class);
Route::resource('tambahc', TambahCController::class);
Route::resource('administrasi', AdministrasiController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get(
    'karyawan/laporan/cetak',
    [KaryawanController::class, 'laporan']
);
Route::get(
    'costumer/laporan/cetak',
    [CostumerController::class, 'laporan']
);
Route::get(
    'administrasi/laporan/cetak',
    [AdministrasiController::class, 'laporan']
);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
