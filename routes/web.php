<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/maquinas', function () {
    return view('maquinas.index');
});
Route::get('/candidatos', function () {
    return view('candidatos.index');
});
Route::get('/HorarioCapacitacion', function () {
    return view('HorarioCapacitacion.index');
});

