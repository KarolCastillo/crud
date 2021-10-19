<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 7143f45 (commit listar)

Route::get('/', function () {
    return view('usuarios.userform');
});

route::get("/form",[\App\Http\Controllers\UserController::class,'userform'])->name("usuarios.userform");
<<<<<<< HEAD
=======
=======
use \App\Http\Controllers\UserController;

//Listado de Usuarios
//route::get('/','UserController@list');
route::get("/",[\App\Http\Controllers\UserController::class,'list']);

//Formulario Usuarios
route::get("/form",[\App\Http\Controllers\UserController::class,'userform'])->name("usuarios.userform");

//Guardar Usuarios
>>>>>>> 19168f4 (primer commit listar)
>>>>>>> 7143f45 (commit listar)
route::post("/save",[\App\Http\Controllers\UserController::class,'save']);
