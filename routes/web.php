<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\FichaController;

Route::resource('/', InicioController::class);


Route::post('/ficha', [FichaController::class, 'store']);

Route::get('/ficha', [FichaController::class, 'index'])->name('ficha');;
