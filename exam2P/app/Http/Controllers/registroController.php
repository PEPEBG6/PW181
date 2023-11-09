<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registroController extends Controller
{
    public function metodoInicio(){

        return view('welcome');

    }

    public function guardarRegistro(request $req){

        $validated = $req->validate([
            'Nombre' => 'required|min:5',
            'Fecha' => 'required',
            'VJvendidos'=>'required|max:7|numeric'
        ]);

        return redirect('/');


    } 
}
