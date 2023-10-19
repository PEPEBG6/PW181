
@extends('layout.plantilla')

@section('titulo','Formulario')



@section('name')

@section('contenido')

   <h1 class="display-1 text-center text-danger"> Formulario </h1>

<div class="container mt-5 col-md-6">
  <div class="card">
    <div class="card-header fs-5  fst-italic text-center text-primary">
     Introduce aqui tus memorias....
    </div>

  
  <div class="card-body">
   <form method='POST' action='/guardarRecuerdo'>
      @csrf 

    <div class="mb-3">
       <label class="form-label">Titulo</label>
       <input type="text" name="txtTitulo" class="form-control">
    </div>

    <div class="mb-3">
       <label class="form-label">Recuerdo</label>
       <input type="text" name="txtRecuerdo" class="form-control">
    </div>

    

 
 </div>


  <div class="card-footer text-body-secondary">
    <button type="submit" class="btn btn-outline-primary">Guardar Recuerdo</button>
   </form>
  </div>
  </div> <!-- Div de la tarjeta -->
  </div> <!-- Div del contenedor -->

@endsection
