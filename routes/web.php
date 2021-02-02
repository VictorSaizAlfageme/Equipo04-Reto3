
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::view("/register", "register")->name('registro');
Route::view("/perfil", "perfil")->name('perfil');

Route::view("/iTecnicos", "iTecnicos")->name("itecnicos");
Route::view("/iCoordinadores", "iCoordinadores")->name("icoordinadores");
Route::view("/iComentariosTecnico", "iComentariosTecnico")->name("icomentariostecnicos");
Route::view("/obrasSolicitante", "obrasSolicitante")->name("obras");
Route::view("/registroTrabajadores", "registroTrabajadores")->name("registroTrabajadores");
Route::view("/inicio", "bienvenido")->name("inicio");

/*
 * |================================================================|
 * |====Porfavor no tocar de aquí pa abajo; trabajo en progreso.====|
 * |================================================================|
 * */


//EXTRAS
Route::get("/estadisticas", "estadisticasController@cargarEstadisticas")->name('cargarEstadisticas');
Route::post("/usuarioEditar", "perfilUsuarioController@usuarioEditar")->name("usuarioEditar");
Route::get("/perfil", "perfilUsuarioController@usuarioSelect")->name('perfilUsuario');
Route::post("/editarContrasena", "perfilUsuarioController@editarContrasena")->name("editarContrasena");
Route::post("/recuperarContrasena", "perfilUsuarioController@recuperarContrasena")->name("recuperarContrasena");

//TRABAJADORES
Route::view("/trabajadores", "loginTrabajadores")->name("loginTrabajadores");
Route::post("/trabajadorLogin", "trabajadoresController@iniciarSesion")->name("trabajadorIniciarSesion");
Route::post("/registrarTrabajador", "registroTrabajadoresController@registrarTrabajador")->name("trabajadorRegistrar");
Route::get("/listadoTrabajadores", "trabajadoresController@listarTodos")->name('listadoTrabajadores');
Route::post("/datosTrabajador", "trabajadoresController@listarConcreto")->name("datosTrabajador");
Route::post("/borrarTrabajador", "trabajadoresController@eliminar")->name("borrarTrabajador");


//Solicitantes (Usuarios normales)
Route::view("/", "login")->name('inicioSesion');
Route::post("/login", "solicitantesController@iniciarSesion")->name("solicitanteIniciarSesion");
Route::view("/registro", "register")->name("solicitanteRegistro");
Route::post("/registrando", "solicitantesController@insertar")->name("solicitanteRegistrar");
Route::view("/solicitarContrasena", "iCambiarContrasena")->name("solicitarContrasena");
Route::get("/listadoSolicitantes", "solicitantesController@listarTodos")->name('listadoSolicitantes');
Route::post("/datosSolicitante", "solicitantesController@datosSolicitante")->name("datosSolicitante");
Route::post("/borrarSolicitante", "solicitantesController@eliminar")->name("borrarSolicitante");

//Obras
Route::view("/obra", "obra")->name('obra');
Route::post("/registrarObra", "registroObraController@registrarObra")->name("obraRegistrar");
Route::get("/listadoObras", "obraController@listarTodos")->name('listadoObras');
Route::get("/listadoObrasTecnico", "obraController@listarObrasTecnico")->name('listadoObrasTecnico');
Route::get("/listadoObrasSolicitante", "obraController@listarObrasSolicitante")->name('listadoObrasSolicitante');

Route::post("/datosObra", "obraController@listarConcreto")->name("datosObra");
Route::post("/cambiarFecha", "obraController@cambiarFecha")->name("cambiarFecha");
Route::get("/cambiarFechaFin", "obraController@cambiarFechaFin")->name("cambiarFechaFin");
Route::post("/agregarComentario", "obraController@agregarComentario")->name("agregarComentario");
Route::post("/cambiarEstado", "obraController@cambiarEstado")->name("cambiarEstado");
Route::post("/asignarTecnico", "obraController@asignarTecnico")->name("asignarTecnico");
Route::post("/eliminarTecnico", "obraController@eliminarTecnico")->name("eliminarTecnico");


//PROVISIONALES (SOLO PARA DESARROLLO)
Route::view("/solicitantesEliminar", "eliminar");
Route::delete("/eliminandoSolicitante", "solicitantesController@eliminar") ->name("eliminar");
Route::get("/trabajadoresCrear", "trabajadoresController@formCrear")->name("registrarTrabajador");
Route::post("/trabajadoresStore", "trabajadoresController@store")->name("trabajadores.store");
Route::get("/trabajadores/{id}", "trabajadoresController@listarConcreto");
Route::view("/rt", "registroTrabajadores")->name("rt");


//SUBIR FOTOS O ARCHIVOS

Route::get('/emailtestform', function (){
    return view('emailtest');
});
Route::post('/contactar', 'App\Http\Controllers\emailTestController@contact')->name('contact');
Route::get('/ver','App\Http\Controllers\UploadsController@verArchivo')->name('ver');
