
@extends('layouts.plantilla')

@section('titulo','Inicio')


@section('name')

@section('contenido')

    

    <link rel="stylesheet" href="css/styles.css">


    <div class="card custom-card" style="width: 18rem;">
        <img src="css/noticia.avif" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Los extremos del hilo</h5>
        <p class="card-text">El escritor Emiliano Monge analiza las coincidencias o conexiones que uno se encuentra cuando está leyendo, por ejemplo, entre la literatura y el cine</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

    <div class="card custom2-card" style="width: 18rem;">
        <img src="css/noticia2.avif" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">El juego de la ampliación</h5>
        <p class="card-text">Desde hace días descubro en calles, novelas y películas, todas ya vistas o leídas, detalles que en su momento no percibí</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

    <div class="card custom3-card" style="width: 18rem;">
        <img src="css/noticia3.avif" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">Cacofonías periodísticas</h5>
        <p class="card-text">Quizás pocos lectores percibieron esa desafinación, pero hemos de escribir para ellos; porque son un grupo influyente</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>


    <footer class="footer text-center">
        <div class="nombre p-1">
          <p >Biblioteca PEPE´S </p>
        </div>

        <div class="copyright p-1">
            <p >&copy;2023 JoséLuis Bernardo Gutiérrez</p>
        </div>
        
        <div class="fecha p-1">
            <p >{{date('d F Y')}}</p>
        </div>
    </footer>



@endsection