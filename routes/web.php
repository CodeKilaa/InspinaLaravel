<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/candidatos', function () {
    return view('candidatos.index');
});
Route::get('/HorarioCapacitacion', function () {
    return view('HorarioCapacitacion.index');
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

Route::get('/salones', function () {
    return view('salones.index');
});

Route::get('/colaboradores', function () {
    return view('colaboradores.index');
});
Route::get('/horario-clases', function () {
    return view('colaboradores.horario-clases');
});

