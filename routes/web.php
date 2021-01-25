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



Route::view("/index", "index")->name('paginaPrincipal');
Route::view("/register", "register")->name('registro');
/*
 * |================================================================|
 * |====Porfavor no tocar de aquí pa abajo; trabajo en progreso.====|
 * |================================================================|
 * */

//CONTROLADORES

//TRABAJADORES
Route::view("/trabajadores", "loginTrabajadores")->name("loginTrabajadores");
Route::post("/trabajadorLogin", "trabajadoresController@iniciarSesion")->name("trabajadorIniciarSesion");

//Solicitantes (Usuarios normales)
Route::view("/", "login")->name('inicioSesion');
Route::post("/login", "solicitantesController@iniciarSesion")->name("solicitanteIniciarSesion");
Route::view("/registro", "register")->name("solicitanteRegistro");
Route::post("/registrando", "solicitantesController@insertar")->name("solicitanteRegistrar");

//Obras
Route::view("/obra", "obra")->name('obra');
Route::post("/registrarObra", "obraController@insertar")->name("obraRegistrar");



//PROVISIONALES (SOLO PARA DESARROLLO)
Route::get("/trabajadoresListar", "trabajadoresController@listarTodos");
Route::get("/solicitantesListar", "solicitantesController@listarTodos")->name("listarSolicitantes");

Route::view("/solicitantesEliminar", "eliminar");
Route::delete("/eliminandoSolicitante", "solicitantesController@eliminar") ->name("eliminar");

Route::get("/trabajadoresCrear", "trabajadoresController@formCrear")->name("registrarTrabajador");
Route::post("/trabajadoresStore", "trabajadoresController@store")->name("trabajadores.store");
Route::get("/trabajadores/{id}", "trabajadoresController@listarConcreto");


