<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

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

Route::get('/', [DataPenjualanController::class, 'index']);
Route::get('/penjualan/data', [DataPenjualanController::class, 'getData'])->name('penjualan.data');
Route::post('/penjualan/store', [DataPenjualanController::class, 'store'])->name('penjualan.store');
Route::get('/penjualan/{id}', [DataPenjualanController::class, 'show'])->name('penjualan.show');
Route::get('/penjualan/{id}/edit', [DataPenjualanController::class, 'edit'])->name('penjualan.edit');
Route::put('/penjualan/{id}', [DataPenjualanController::class, 'update'])->name('penjualan.update');
Route::delete('/penjualan/{id}', [DataPenjualanController::class, 'destroy'])->name('penjualan.delete');
