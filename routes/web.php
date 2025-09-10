<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});

use App\Http\Controllers\SaludoController;
Route::get('/saludo', [SaludoController::class, 'index']);

use App\Http\Controllers\SaludoCristhianController;
Route::get('/saludoCristhian', [SaludoCristhianController::class, 'index']);