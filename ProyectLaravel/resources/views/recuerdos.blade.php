
@extends('layout.plantilla')

@section('titulo','Recuerdos')



@section('name')

@section('contenido')

   @include('partials.modal')

   <h1 class="display-1 text-center text-danger"> Recuerdos </h1>

   

   @foreach ($consR as $item)
       

  

      <div class="card w-25 mb-3 mt-5">
         <div class="card-body">
            <h5 class="card-title fw-bold ">{{$item->titulo}}</h5>
            <h5 class="card-tittle fw-medium">{{$item->fecha}}</h5>
            <p class="card-text fw-lighter">{{$item->recuerdo}}</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar">
               Editar
            </button>
            <a href="#" class="btn btn-danger">Eliminar</a>
         </div>
      </div>
      

   @endforeach

   

@endsection
