<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Video Juegos</title>


</head>
<body>


    <div class="container col-md-4 p-4">


        
        @if(session()->has('confirmacion'))

            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <strong>{{session('confirmacion')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        @endif



        @if($errors->any())

            @foreach ($errors->all() as $error)

                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                    <strong>{{ $error }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            @endforeach

        @endif




        <div class="card">

            <div class="card-header fs-5  fst-italic text-center text-primary">
                Video Juegos
            </div>

            <div class="card-body">

                <form method='POST' action='/guardarRegistro'>

                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="Nombre" class="form-control" value="{{ old('Nombre') }}">
                        <p class="text-danger fw-bold">{{$errors->first('Nombre')}}</p>
                    
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Fecha Publicación</label>
                        <input type="date" name="Fecha" class="form-control" value="{{ old('Fecha') }}">
                        <p class="text-danger fw-bold">{{$errors->first('Fecha')}}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Videojuegos Vendidos</label>
                        <input type="number" name="VJvendidos" class="form-control" value="{{ old('VJvendidos') }}">
                        <p class="text-danger fw-bold">{{$errors->first('VJvendidos')}}</p>
                    </div>

                

                    
                    <button type="submit" class="btn btn-outline-primary">Guardar</button>

                
                </form>

            </div>

        </div>

    </div>
    

</body>
</html>