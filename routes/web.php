<?php

use App\Http\Controllers\BerandaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'index'])->name('beranda.index');
Route::get('/profil/{profil:NIM}', [BerandaController::class, 'show'])->name('profil.show');
