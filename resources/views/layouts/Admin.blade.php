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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/estilos-layout-Admin.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


</head>

</head>
<body>
  <div id="wrapper" class="active">
    <div id="sidebar-wrapper">
      <ul id="sidebar_menu" class="sidebar-nav">
        <li class="sidebar-brand"><a id="menu-toggle" href="#"> <strong>Menú</strong><i class="fas fa-paw"></i></a></li>
      </ul>
      <ul class="sidebar-nav" id="sidebar">
        <li>
          <div class="sidebar-nav" >
              <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> <strong>Ajustes</strong><i class="fas fa-cogs"></i></a>
            <div id="collapseExample" class="panel-collapse collapse">
              <div>
                <a data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapseExample"> <strong>Usuarios</strong><i class="fas fa-address-card"></i></a>
                <div id="collapse2" class="panel-collapse collapse">
                  <div class="panel-body"><a type="button" class="create-modal" href="#" id="Reg">Create-M</a></div>
                  <div class="panel-body"><a type="button" href="{{ route('Usuario.create') }}">Create</a></div>
                  <div class="panel-body"><a type="button" href="{{ route('Usuario.index') }}">Read</a></div>
                  <div class="panel-body"><a type="button" href="{{ route('Usuario.index') }}">Update</a></div>
                  <div class="panel-body"><a type="button" href="{{ route('Usuario.index') }}">Delete</a></div>
                  <div class="panel-body"><a type="button" id="user">user</a></div>
                </div>
              </div>
              <div>
                <a data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapseExample"> <strong>Roles</strong><i class="fas fa-bone"></i></a>
                <div id="collapse3" class="panel-collapse collapse">
                  <div class="panel-body"><a type="button" data-toggle="modal" data-target="#exampleModal" href="#" id="Reg">Create</a></div>
                  <div class="panel-body"><a type="button" href="{{ route('Usuario.index') }}">Read</a></div>
                  <div class="panel-body"><a type="button" href="{{ route('Usuario.index') }}">Update</a></div>
                  <div class="panel-body"><a type="button" href="{{ route('Usuario.index') }}">Delete</a></div>
                </div>
              </div>
              <div>
                <a data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false" aria-controls="collapseExample"> <strong>Menús</strong></a>
                <div id="collapse4" class="panel-collapse collapse">
                  <div class="panel-body"><a type="button" data-toggle="modal" data-target="#exampleModal" href="#" id="Reg">Create</a></div>
                  <div class="panel-body"><a type="button" href="{{ route('Usuario.index') }}">Read</a></div>
                  <div class="panel-body"><a type="button" href="{{ route('Usuario.index') }}">Update</a></div>
                  <div class="panel-body"><a type="button" href="{{ route('Usuario.index') }}">Delete</a></div>
                </div>
              </div>
              <div>
                <a data-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapseExample"> <strong>Sub Menús</strong><i class="fas fa-ellipsis-h"></i></a>
                <div id="collapse5" class="panel-collapse collapse">
                  <div class="panel-body"><a type="button" data-toggle="modal" data-target="#exampleModal" href="#" id="Reg">Create</a></div>
                  <div class="panel-body"><a type="button" href="{{ route('Usuario.index') }}">Read</a></div>
                  <div class="panel-body"><a type="button" href="{{ route('Usuario.index') }}">Update</a></div>
                  <div class="panel-body"><a type="button" href="{{ route('Usuario.index') }}">Delete</a></div>
                </div>
              </div>
              <div>
                <a data-toggle="collapse" href="#collapse6" role="button" aria-expanded="false" aria-controls="collapseExample"> <strong>Rol Menús</strong><i class="fas fa-user-minus"></i></a>
                <div id="collapse6" class="panel-collapse collapse">
                  <div class="panel-body"><a type="button" data-toggle="modal" data-target="#exampleModal" href="#" id="Reg">Create</a></div>
                  <div class="panel-body"><a type="button" href="{{ route('Usuario.index') }}">Read</a></div>
                  <div class="panel-body"><a type="button" href="{{ route('Usuario.index') }}">Update</a></div>
                  <div class="panel-body"><a type="button" href="{{ route('Usuario.index') }}">Delete</a></div>
                </div>
              </div>

            </div>
          </div>
        </li>
        <!-- mamama -->
        <li >
          <li><a  href="{{url('/home') }}">Home</a></li>
          <li><a  href="{{ route('login.index') }}">Login</a></li>
          <li><a  href="{{ url('/logout') }}">Salir</a></li>
        </li>
      </ul>
    </div>
    @yield('content')

  </div>

    <!-- Scripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/usuario.js')}}"></script>
    @yield('script')

    <script type="text/javascript">
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("active");
    });
    </script>
</body>
</html>
