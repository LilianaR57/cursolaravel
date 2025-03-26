<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Así deben quedar limpias la rutas, las rutas de abajo son ejemplos
Route::get('/', [CursoController::class, 'getName'])->name('home');
Route::get('/curso', [CursoController::class, 'practica1'])->name('practica1');

// //Ejemplo de rutas clase 2
Route::get('/', function () {
    return view('welcome',['name' => 'Liliana']);
})->name('home'); // con el metodo name le pones un nombre a la ruta

// Route::get ('/hola', function () {
//     return route('hola'); //La funcion route te regresa la ruta que le pongas
// })->name('hola');





