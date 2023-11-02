@extends('layouts.plantilla')

@section('titulo','Registros')


@section('name')

@section('contenido')

    <link rel="stylesheet" href="css/styles2.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <div class="container col-md-4 p-4">



        @if(session()->has('confirmacion'))

            <script>

                Swal.fire({
                position: 'top-center',
                icon: 'success',
                title: 'Your work has been saved',
                text: '{{session('confirmacion')}}',
                showConfirmButton: false,
                timer: 1500
                })


            </script>

        @endif




       
     

       <div class="card">
         <div class="card-header fs-4  fw-medium text-center">
             Registros de Libros
         </div>
     
       
            <div class="card-body">
                <form method='POST' action='/guardarLibro'>
                    @csrf 
                    <div class="mb-3">
                        <label class="form-label">ISBN</label>
                        <input type="text" name="txtIsbn" class="form-control" value="{{ old('txtIsbn') }}">
                        <p class="text-danger fw-bold">{{$errors->first('txtIsbn')}}</p>
                    </div>
                
                    <div class="mb-3">
                        <label class="form-label">Titulo</label>
                        <input type="text" name="txtTitulo" class="form-control" value="{{ old('txtTitulo') }}">
                        <p class="text-danger fw-bold">{{$errors->first('txtTitulo')}}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Autor</label>
                        <input type="text" name="txtAutor" class="form-control" value="{{ old('txtAutor') }}">
                        <p class="text-danger fw-bold">{{$errors->first('txtAutor')}}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Paginas</label>
                        <input type="text" name="txtPagina" class="form-control" value="{{ old('txtPagina') }}">
                        <p class="text-danger fw-bold">{{$errors->first('txtPagina')}}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Editorial</label>
                        <input type="text" name="txtEditorial" class="form-control" value="{{old('txtEditorial')}}">
                        <p class="text-danger fw-bold">{{$errors->first('txtEditorial')}}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email de Editorial</label>
                        <input type="text" name="txtEmail" class="form-control" value="{{old('txtEmail') }}">
                        <p class="text-danger fw-bold">{{$errors->first('txtEmail')}}</p>
                    </div>
        
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Registrar Libro</button>
                    </div>

                </form>
            </div>
       </div> <!-- Div de la tarjeta -->
    </div> <!-- Div del contenedor -->
    <footer class="footer">
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