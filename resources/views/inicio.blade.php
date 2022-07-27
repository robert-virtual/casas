@extends('layouts.app')

@section('title',"inicio")

@section('content')
<h1>Bienvenido {{session('username' ?? '')}}</h1>
@if(!session('uid'))
<a href="{{url('/registro')}}">Crear Cuenta</a>
<a href="{{url('/login')}}">Iniciar Session </a>
@else
<a href="{{url('/houses/create')}}">Vender o Rentar Casa </a>
@endif

<div class="grid">
  @foreach($houses as $house)
  <div class="house">
    <img  src="{{asset('images/'.$house->image)}}" alt="{{$house->image}}">
    <p>Precio: Lps. {{$house->price}}</p>
    <a href='{{url('/depa/'.$house->city->department_id)}}'>Ubicacion: {{$house->city->city}}, {{$house->city->department->department}}</a>
    <p>Propietario: {{$house->user->name}}</p>
    <p>Tipo: {{$house->housetype->type}}</p>
  </div>
  @endforeach
</div>
@endsection
