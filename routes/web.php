<?php
//use App\Http\Middleware\Suscribed;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::controller(PostController::class)->group(function (){
    Route::get('/posts', 'index')->name('posts.index');
    Route::get('/posts/create', 'create')->name('posts.create');
    Route::post('posts', 'store')->name('posts.store');
    Route::get('/posts/show', 'show')->name('posts.show');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/ejemplo2', [CursoController::class, 'index'])->name('curso.index');
    
Route::view('mostrar', 'display', ['message' => '<p>Esto es un parráfo</p>'])->name('display');
Route::get('directivas', [UserController::class, 'index']);

Route::view('ejemplo', 'example', ['name' => 'Liliana'])->name('ejemplo');

Route::get('ejemplo', function () {
    return view('example', ['name' => 'hola']);
})->name('ejemplo');



//Así deben quedar limpias la rutas, las rutas de abajo son ejemplos
Route::get('/', [CursoController::class, 'getName'])->name('home');
Route::get('/curso', [CursoController::class, 'practica1'])->name('practica1');

// //Ejemplo de rutas clase 2
Route::get('/', function () {
    return view('welcome',['name' => 'Liliana']);
})->name('home'); // con el metodo name le pones un nombre a la ruta

Route::get ('/hola', function () {
    return route('hola'); //La funcion route te regresa la ruta que le pongas
})->name('hola');

Route::resource('users', AdminUserController::class)
    ->parameters(['users' => 'admin_user'
]); //Con el metodo parameters le cambias el nombre a la ruta

Route::get('/suscribed', function () {
    return 'Bienvenido al curso';
})->middleware('suscribed'); //Con el metodo middleware le pones un middleware a la ruta

