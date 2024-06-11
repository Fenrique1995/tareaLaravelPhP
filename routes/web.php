<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');//aca puedo definir que se va a mostrar
});

/*Route::get('/saludo', function () {//el /saludo es otra ruta
    return view('app');//aca puedo definir que se va a mostrar
});*/

Route::get('/todos', function () {//el /saludo es otra ruta
    return view('tareas.index');//aca puedo definir que se va a mostrar
});