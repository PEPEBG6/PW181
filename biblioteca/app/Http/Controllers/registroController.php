<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormRegistros;

class registroController extends Controller
{
    public function metodoinicio(){
        return view('welcome');
    }

    public function metodoRegistro(){
        return view('registros');
    }

    public function metodoGuardarLibro(validadorFormRegistros $req){

        return redirect('/registro')->with('confirmacion','Todo correcto:'.$req->input('txtTitulo'));
        
    
    }
}
