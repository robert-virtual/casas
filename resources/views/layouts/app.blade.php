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
    @if(session('uid'))
    <form action="/logout" method="POST">
      @csrf
      @method('DELETE')
      <button>Cerrar Session</button>
    </form>
    @endif
    @if(session('depas'))
    @foreach(session('depas') as $depa)
    <a href='{{url("/depa/$depa->id")}}'>{{$depa->department}}</a>
    @endforeach
    @endif
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
