
@extends('layouts.app') 

@section('title',"Iniciar session") 

@section('content')
 <h1>Iniciar Session</h1> 
<form action="/login" method="POST">
  @csrf
  <input type="email" name="email" placeholder="Correo">
  <input type="password" name="password" placeholder="Clave">
  <button>Iniciar Session</button>
</form>
@endsection
