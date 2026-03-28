<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bienvenida', function () {
    return view('bienvenida');
});

// Esta línea registra las 7 rutas RESTful del CRUD:
Route::resource('estudiantes', EstudianteController::class);
