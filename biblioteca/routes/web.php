<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registroController;

Route::get('/', [registroController::class, 'metodoinicio'])->name('apodoinicio');
Route::get('/registro', [registroController::class, 'metodoRegistro'])->name('apodoRegistro');
Route::post('/guardarLibro', [registroController::class, 'metodoGuardarLibro'])->name('apodoGuardarLib');
