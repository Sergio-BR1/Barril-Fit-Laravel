<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\LoginController;

Route::resource('/', InicioController::class);

Route::get('/home', [FichaController::class, 'index'])->name('home');

Route::post('/ficha', [FichaController::class, 'store'])->name('ficha.store');

Route::get('/ficha', [FichaController::class, 'index'])->name('ficha');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
