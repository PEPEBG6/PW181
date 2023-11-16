<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\diarioController;
use App\Http\Controllers\ControllerCrudD;




//Rutas Individuales para controlador 
//  Route::get('/', [diarioController::class,'metodoInicio'])->name('apodoinicio');
//  Route::get('/form', [diarioController::class,'metodoFormulario'])->name('apodoFormulario');
//  Route::get('/loquequieroolvidar', [diarioController::class,'metodoRecuerdos'])->name('apodoRecuerdos');


 //Rutas para el request post de recuerdo
 //Route::post('/guardarRecuerdo', [diarioController::class,'guardarRecuerdo'])->name('guardar');


//Rutas agrupadas por controlador 
Route::controller(diarioController::class)->group(function (){
     Route::get('/','metodoinicio')->name('apodoinicio');
});
 
  

//vistas para el controllerCrudD
Route::get('/recuerdo/create', [ControllerCrudD::class,'create'])->name('recuerdo.create');
Route::post('/recuerdo',[ControllerCrudD::class,'store'])->name('recuerdo.store');
Route::get('/recuerdo', [ControllerCrudD::class,'index'])->name('recuerdo.index');





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
