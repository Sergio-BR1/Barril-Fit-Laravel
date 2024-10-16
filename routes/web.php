<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\LoginController;

Route::resource('/', InicioController::class);



Route::post('/ficha', [FichaController::class, 'store']);

Route::get('/ficha', [FichaController::class, 'index'])->name('ficha');

Route::view('/login', 'login.login')->name('login');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
