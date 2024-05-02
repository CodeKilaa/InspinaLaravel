<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/areas', function () {
    return view('areas.index');
});

Route::get('/maquinas', function () {
    return view('maquinas.index');
});

Route::get('/horarioGeneral', function () {
    return view('horarioGeneral.index');
});

Route::get('/horarioPresencial', function () {
    return view('horarioPresencial.index');
});

Route::get('/horarioSalon', function () {
    return view('horarioSalon.index');
});

Route::get('/horarioArea', function () {
    return view('horarioArea.index');
});

Route::get('/horarioMaquina', function () {
    return view('horarioMaquina.index');
});

Route::get('/horarioVirtual', function () {
    return view('horarioVirtual.index');
});

Route::get('/configuracion', function () {
    return view('configuracion.index');
});

Route::get('/configuracion-institucion', function () {
    return view('configuracion-institucion.index');
});

Route::get('/configuracion-carrera', function () {
    return view('configuracion-carrera.index');
});

Route::get('/configuracion-curso', function () {
    return view('configuracion-curso.index');
});

Route::get('/configuracion-programa', function () {
    return view('configuracion-programa.index');
});

Route::get('/configuracion-herramienta', function () {
    return view('configuracion-herramienta.index');
});
