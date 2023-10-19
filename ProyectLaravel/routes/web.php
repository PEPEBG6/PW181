<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\diarioController;




//Rutas Individuales para controlador 
//  Route::get('/', [diarioController::class,'metodoInicio'])->name('apodoinicio');
//  Route::get('/form', [diarioController::class,'metodoFormulario'])->name('apodoFormulario');
//  Route::get('/loquequieroolvidar', [diarioController::class,'metodoRecuerdos'])->name('apodoRecuerdos');


 //Rutas para el request post de recuerdo
 Route::post('/guardarRecuerdo', [diarioController::class,'guardarRecuerdo'])->name('guardar');


//Rutas agrupadas por controlador 
Route::controller(diarioController::class)->group(function (){
     Route::get('/','metodoinicio')->name('apodoinicio');
     Route::get('/form','metodoFormulario')->name('apodoFormulario');
     Route::get('/loquequieroolvidar','metodoRecuerdos')->name('apodoRecuerdos');
  });
  



//Rutas de tipo peticion
//  Route::get('/', function () {
//      return view('welcome');
// });

// Route::get('/form', function () {
//     return view('formulario');
// });

// Route::get('/loquequieroolvidar', function () {
//     return view('recuerdos');
// });



//rutas de tipo view
//route::view('/','welcome')->name('apodoinicio');
//route::view('/form','formulario')->name('apodoformulario');
//route::view('/loquequieroolvidar','recuerdos')->name('apodorecuerdo');
