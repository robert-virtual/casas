@extends('layouts.app')

@section('title',"Crear Cuenta")

@section('content')
<h1>Crear Cuenta</h1>
<form action="/registro" method="POST">
  @csrf
  <input type="text" name="name" placeholder="Nombre">
  <input type="email" name="email" placeholder="Correo">
  <input type="password" name="password" placeholder="Clave">
  <input type="password" name="confirm" placeholder="Confirmar clave">
  <button>Crear Cuenta</button>
</form>
@endsection
