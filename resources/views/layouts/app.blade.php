<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Huellas') }}</title>

    <!-- Styles-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="{{ url('/') }}">Huellas y Colas</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end"  id="navbarNavAltMarkup">
        <div class="navbar-nav "  >
          <ul class="nav navbar-nav " >
            <li><a class="nav-item nav-link active " href="#" id="user">user</a></li>
            <li><a class="nav-item nav-link active " href="{{ route('login.index') }}">Login</a></li>
            <li><a class="nav-item nav-link active " href="{{ route('Usuario.create') }}">Registro</a></li>
            <li><a class="nav-item nav-link active " href="{{ route('Usuario.index') }}">Usuarios</a></li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')
    

  </div>

    <!-- Scripts-->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/usuario.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
