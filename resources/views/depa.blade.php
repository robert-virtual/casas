@extends('layouts.app')

@section('title',$depa)

@section('content')
<h1>{{$depa->department}}</h1>
<h2>Ciudades</h2>
@foreach($depa->cities as $city)
<a href='{{url("/city/$city->id")}}'>{{$city->city}}</a>
<div class="grid">
  @foreach($city->houses as $house)
  <div class="house">
    <img src="{{asset('images/'.$house->image)}}" alt="{{$house->image}}">
    <p>Precio: Lps. {{$house->price}}</p>
    <a href='{{url('/depa/'.$house->city->department_id)}}'>Ubicacion: {{$house->city->city}}, {{$house->city->department->department}}</a>
    <p>Propietario: {{$house->user->name}}</p>
    <p>Tipo: {{$house->housetype->type}}</p>
  </div>
  @endforeach
</div>
@endforeach
@endsection
