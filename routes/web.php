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





Route::view("/", "index")->name('paginaPrincipal');
Route::view("/login", "login")->name('inicioSesion');
Route::view("/register", "register")->name('registro');
Route::view("/perfilSolicitante", "perfilSolicitante")->name('perfilS');
//CONTROLADORES (Porfavor no tocar de aquí pa abajo; trabajo en progreso.)

//TRABAJADORES
Route::view("/trabajadores", "loginTrabajadores")->name("loginTrabajadores");
Route::post("/trabajadorLogin", "trabajadoresController@iniciarSesion")->name("trabajadorIniciarSesion");
Route::view("/iTecnicos", "iTecnicos")->name("itecnicos");
Route::view("/iCoordinadores", "iCoordinadores")->name("icoordinadores");
Route::view("/iComentariosTecnico", "iComentariosTecnico")->name("icomentariostecnicos");
//Solicitantes (Usuarios normales)
Route::view("/obrasSolicitante", "obrasSolicitante")->name("obraS");


//PROVISIONALES
Route::get("/trabajadoresListar", "trabajadoresController@listarTodos")->name("listarTrabajadores");
Route::get("/trabajadoresCrear", "trabajadoresController@formCrear")->name("registrarTrabajador");
Route::post("/trabajadoresStore", "trabajadoresController@store")->name("trabajadores.store");
Route::get("/trabajadores/{id}", "trabajadoresController@listarConcreto");


