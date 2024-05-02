<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salones', function () {
    return view('salones.index');
});

Route::get('/colaboradores', function () {
    return view('colaboradores.index');
});
Route::get('/horario-clases', function () {
    return view('colaboradores.horario-clases');
});