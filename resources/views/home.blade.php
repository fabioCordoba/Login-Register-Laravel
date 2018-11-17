@extends(Auth::user()->supersu == 1 ? 'layouts.Admin' : 'layouts.app')

@section('content')

<div class="container">
    <div class="row ">
      @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
      @if (Auth::user()->supersu == 1)
        <div id="contenido" class="row">
          <div class="col-md-12 col-md-offset-2"style="margin-top:20px">
            <div class="panel-heading"><h3>Panel De Administracion </h3></div><br>
            <h4>Hola <strong>{!!Auth::user()->nombre!!} </strong>bienvenido a Huellas y Colas</h4>
            <h5>Estamos Felices De Que Seas Parte de Nuestro Equipo, <strong>{!!Auth::user()->nick!!} </strong>Eres Super Usuario</h5>
          </div>
        </div>
      @else
        <div id="contenido" class="row">
          <div  class="col-md-12 col-md-offset-2"style="margin-top:20px">
            <div class="panel-heading"><h3>Panel De Administracion</h3></div><br>
            <h4>Hola <strong>{!!Auth::user()->nombre!!} </strong>bienvenido a Huellas y Colas</h4>
            <h5>Estamos Felices De Que Seas Parte de Nuestro Equipo, <strong>{!!Auth::user()->nick!!} </strong> Tienes Privilegios basicos en Huellas y Colas</h5>
          </div>
        </div>
      @endif

    </div>
</div>
@endsection
