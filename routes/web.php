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


Route::get("/trabajadores", "trabajadoresController@index");

Route::get("/trabajadoresCrear", "trabajadoresController@create");
Route::post("/trabajadoresStore", "trabajadoresController@store")->name("trabajadores.store");

Route::view("/", "index");
