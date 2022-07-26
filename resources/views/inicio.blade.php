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
@foreach($houses as $house)
<div class="house">
  <img style="width:50vw" src="{{asset('images/'.$house->image)}}" alt="{{$house->image}}">
  <p>Precio: Lps. {{$house->price}}</p>
  <p>Ubicacion: {{$house->city->city}}, {{$house->city->department->department}}</p>
  <p>Vendedor: {{$house->user->name}}</p>
</div>
@endforeach
@endsection
