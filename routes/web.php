<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\FichaController;

Route::resource('/', InicioController::class);

Route::resource('/ficha', FichaController::class);
