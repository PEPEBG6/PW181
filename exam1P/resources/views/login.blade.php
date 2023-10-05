
@extends('layout.plantilla')

@section('titulo','Login')


@section('name')

@section('contenido')

   <h1 class="display-1 text-center text-danger"> Login </h1>
   <form>
    <label for="usuario">Usuario:</label>
    <input type="text" name="usuario" required><br><br>

    <label for="contrasena">Contraseña:</label>
    <input type="password" name="contrasena" required><br><br>

    <input type="submit" value="Iniciar Sesión">
</form>

@endsection