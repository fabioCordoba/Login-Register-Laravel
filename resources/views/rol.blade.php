@extends('layouts.Admin')
@section('content')
<div class="container" id="divinicio">
    <div  class="row">
        <div class="col-md-12 col-md-offset-2"style="margin-top:20px">
        <div class="card bg-light mb-3 " >
          <div class="card-header"><h5 class="card-title">Roles Activos  <a href="#" id="agregarModal" class="'btn btn-primary btn-sm" role="button" aria-pressed="true" data-toggle="modal" data-target="#modalagregar">NUEVO ROL</a></h5></div>
          <div id="message-eliminar" class="alert alert-danger alert-dismissible" role="alert" style="display:none" >
            <strong id="msj-eliminar">El Rol Se Elimino Correctamente.</strong>
          </div>
          <div id="message-update" class="alert alert-success alert-dismissible" role="alert" style="display:none" >
            <strong >El Rol Se Actualizo Correctamente.</strong>
          </div>
          <div id="message-update-crear" class="alert alert-success alert-dismissible" role="alert" style="display:none" >
            <strong >El Rol Se Creo Correctamente.</strong>
          </div>
          <div class="card-body">
            <table class="table">
              <thead>
                <th>id</th>
                <th>Nombre</th>
                <th>Acciones</th>
              </thead>
              @foreach ($roles as $rol)
              <tbody data-id="{{$rol->id}}" data-nombre="{{$rol->nombre}}" >
                <td>{{$rol->id}}</td>
                <td>{{$rol->nombre}}</td>
                <td>
                    <a href="#" id="ModalEditar" class="editar-btn btn btn-primary btn-sm" role="button" aria-pressed="true" data-toggle="modal" data-target="#modalEditar" value="{{$rol->id}}" onclick="mostrar({{$rol->id}});">Editar</a>
                    <a href="#" id="eliminar-Btn" class="'btn btn-danger btn-sm" role="button" aria-pressed="true" value="{{$rol->id}}" onclick="eliminar({{$rol->id}});">Eliminar</a>
                </td>
              </tbody>
                @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
<!-- Modal -->
@include('modalRol.modalAgregar')
@include('modalRol.modalEditar')
<!-- Scripts-->
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="js/rol.js">
</script>
@endsection
