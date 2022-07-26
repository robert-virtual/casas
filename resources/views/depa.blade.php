@extends('layouts.app')

@section('title',$depa)

@section('content')
<h1>{{$depa->department}}</h1>
<h2>Ciudades</h2>
@foreach($depa->cities as $city)
<a href='{{url("/city/$city->id")}}'>{{$city->city}}</a>
@foreach($city->houses as $house)
<div class="house">
  <img style="width:50vw" src="{{asset('images/'.$house->image)}}" alt="{{$house->image}}">
  <p>Precio: Lps. {{$house->price}}</p>
  <p>Ubicacion: {{$house->city->city}}, {{$house->city->department->department}}</p>
  <p>Vendedor: {{$house->user->name}}</p>
</div>
@endforeach
@endforeach
@endsection
