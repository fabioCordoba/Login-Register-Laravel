@extends('layouts.Admin')
@section('content')
<div class="container" id="divinicio">
    <div  class="row">
      <div class="col-md-12 col-md-offset-2"style="margin-top:20px">
        <div class="card bg-light mb-3 " >
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title">Roles Activos</h5>
            <a type="button"  href="#" id="agregarModal" class="btn btn-warning" aria-pressed="true" data-toggle="modal" data-target="#modalagregar">Nuevo</a>
          </div>
          <div id="message-eliminar" class="alert alert-danger alert-dismissible fade show" role="alert" style="display:none" >
            <strong id="msj-eliminar">El Rol Se Elimino Correctamente.</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div id="message-update" class="alert alert-success alert-dismissible fade show" role="alert" style="display:none" >
            <strong >El Rol Se Actualizo Correctamente.</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div id="message-update-crear" class="alert alert-success alert-dismissible fade show" style="display:none" role="alert">
            <strong>El Rol Se Creo Correctamente...</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="card-body">
            <table class="table table-hover ">
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
                    <a href="#" id="eliminar-Btn" class="btn btn-danger btn-sm" role="button" aria-pressed="true" value="{{$rol->id}}" onclick="eliminar({{$rol->id}});">Eliminar</a>
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

<script src="js/rol.js">
</script>
@endsection
