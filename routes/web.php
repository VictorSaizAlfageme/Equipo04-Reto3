
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

Route::view("/index", "index")->name('paginaPrincipal');
Route::view("/register", "register")->name('registro');
Route::view("/perfilSolicitante", "perfilSolicitante")->name('perfilS');
Route::view("/iTecnicos", "iTecnicos")->name("itecnicos");
Route::view("/iCoordinadores", "iCoordinadores")->name("icoordinadores");
Route::view("/iComentariosTecnico", "iComentariosTecnico")->name("icomentariostecnicos");
Route::view("/obrasSolicitante", "obrasSolicitante")->name("obraS");

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
Route::post("/registrarObra", "registroObraController@registrarObra")->name("obraRegistrar");

//PROVISIONALES (SOLO PARA DESARROLLO)
Route::get("/trabajadoresListar", "trabajadoresController@listarTodos");
Route::get("/solicitantesListar", "solicitantesController@listarTodos")->name("listarSolicitantes");
Route::view("/solicitantesEliminar", "eliminar");
Route::delete("/eliminandoSolicitante", "solicitantesController@eliminar") ->name("eliminar");
Route::get("/trabajadoresCrear", "trabajadoresController@formCrear")->name("registrarTrabajador");
Route::post("/trabajadoresStore", "trabajadoresController@store")->name("trabajadores.store");
Route::get("/trabajadores/{id}", "trabajadoresController@listarConcreto");

//PROVISIONALES
Route::get("/trabajadoresListar", "trabajadoresController@listarTodos")->name("listarTrabajadores");
Route::get("/trabajadoresCrear", "trabajadoresController@formCrear")->name("registrarTrabajador");
Route::post("/trabajadoresStore", "trabajadoresController@store")->name("trabajadores.store");
Route::get("/trabajadores/{id}", "trabajadoresController@listarConcreto");

//SUBIR FOTOS O ARCHIVOS
Route::get('media', function (){
   return view('media');
});
Route::post('media', function (){
    //Aquí solo acepta ficheros de tipo imagen
    //request()->validate(['file' =>'image']);
    request()->validate(['file' => '']);
    return request()->file->storeAs('public'. request()->file->getClientOriginalName());
});
Route::get('/public/{file}', function ($file){
    return Storage::response("public/$file");
})->where([
    'file' => '(.*?)\.(jpg|png|jpeg|gif|pdf|doc|docx|odt)$'
]);
