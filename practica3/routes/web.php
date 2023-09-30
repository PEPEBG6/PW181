<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Rutas de tipo peticion
Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
   return view('formulario');
});

Route::get('/loquequieroolvidar', function () {
   return view('recuerdos');
});



//rutas de tipo view
// route::view('/','welcome');
// route::view('/form','formulario');
// route::view('/loquequieroolvidar','recuerdos');
