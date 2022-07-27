@extends('layouts.app')

@section('title',"Crear Casa")

@section('content')
<h1>Crear Casa</h1>
<form action="/houses" method="POST" class="col" enctype="multipart/form-data">
  @csrf
  <label class="m-05">
    seleccionar Imagen
    <input type="file" name="image" hidden>
  </label>
  <label class="m-05">
    <span>Precio</span>
    <input class="m-05" type="number" name="price" placeholder="Precio">
  </label>
  <label class="m-05">
    <span>Que quieres hacer con esta casa?</span>
    <select name="house_type_id">
      <option value="1">Vender</option>
      <option value="2">Rentar</option>
    </select>
  </label>
  <label class="m-05">
    <span> Direccion</span>
    <br>
    <textarea class="m-05" type="text" name="address" placeholder="Direccion"></textarea>
  </label>

  <label class="m-05">
    <span>Ciudad</span>
    <select name="city_id">
      @foreach($cities as $city)
      <option value="{{$city->id}}">{{$city->city}}</option>
      @endforeach
    </select>
  </label>
  <button>Crear Cuenta</button>
</form>
@endsection
