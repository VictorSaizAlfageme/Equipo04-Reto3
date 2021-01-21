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


Route::view("/", "login")->name('inicioSesion');
Route::view("/index", "index")->name('paginaPrincipal');
Route::view("/register", "register")->name('registro');

//CONTROLADORES (Porfavor no tocar de aquí pa abajo; trabajo en progreso.)

//TRABAJADORES
Route::view("/trabajadores", "loginTrabajadores")->name("loginTrabajadores");
Route::post("/trabajadorLogin", "trabajadoresController@iniciarSesion")->name("trabajadorIniciarSesion");

//Solicitantes (Usuarios normales)



//PROVISIONALES
Route::get("/trabajadoresListar", "trabajadoresController@listarTodos")->name("listarTrabajadores");
Route::get("/trabajadoresCrear", "trabajadoresController@formCrear")->name("registrarTrabajador");
Route::post("/trabajadoresStore", "trabajadoresController@store")->name("trabajadores.store");
Route::get("/trabajadores/{id}", "trabajadoresController@listarConcreto");


