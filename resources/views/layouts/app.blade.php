<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> @yield("title") </title>
  <link rel="stylesheet" href="{{asset('index.css')}}">
</head>
<body>
    <nav>
      @section('nav') 
        <a href="{{url('/')}}">Inicio</a>
        <a href="{{url('/welcome')}}">Welcome</a>
        @foreach($depas as $i => $depa)
          <a href='{{url("/depa/$i")}}'>{{$depa}}</a>
        @endforeach 
      @show
    </nav>  

    <main>
     @yield('content') 
    </main>

 @section('footer') 
    <footer>
    <h3>Footer</h3>
    </footer>
 @show
</body>
</html>
