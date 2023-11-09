<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registroController;



Route::get('/', [registroController::class, 'metodoInicio'])->name('inicio');
Route::post('/guardarRegistro', [registroController::class, 'guardarRegistro'])->name('guardar');
