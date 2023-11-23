
@extends('layout.plantilla')

@section('titulo','Recuerdos')



@section('name')

@section('contenido')

   

   <h1 class="display-1 text-center text-danger"> Recuerdos </h1>

   @if(session()->has('confirmacion'))

      <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
         <strong>{{session('confirmacion')}}</strong>
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

   @endif
   

   @foreach ($consR as $item)
       

  

      <div class="card w-25 mb-3 mt-5">
         <div class="card-body">
            <h5 class="card-title fw-bold ">{{$item->titulo}}</h5>
            <h5 class="card-tittle fw-medium">{{$item->fecha}}</h5>
            <p class="card-text fw-lighter">{{$item->recuerdo}}</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar{{$item->id}}">
               Editar
            </button>
            
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar{{$item->id}}">
               Eliminar
            </button>
         </div>
      </div>
      
      @include('partials.modal')

   @endforeach

   

@endsection
