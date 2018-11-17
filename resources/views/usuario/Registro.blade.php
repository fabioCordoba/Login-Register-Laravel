@extends('layouts.Admin')

@section('content')


<div class="cotainer">
    <div class="row justify-content-center"> <!--justify-content-center-->
        <div class="col-md-8 col-md-offset-2"style="margin-top:20px">
          @if(count($errors)>0)
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Ups...</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <ul>
              @foreach($errors->all() as $error)
                <li>{!!$error!!}</li>
              @endforeach
            </ul>
          </div>
          @endif
            <div class="card bg-light mb-3">
                <div class="card-header"> <h5>Registrar Nuevo Usuario</h5></div>
                <div class="card-body">
                    <form action="{{ route('Usuario.store') }}" method="POST">
                      {{ csrf_field() }}
                      <div class="form-group row">
                          <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>
                          <div class="col-md-6">
                              <input type="text" id="nombre" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>
                              @if ($errors->has('nombre'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('nombre') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="id_rol" class="col-md-4 col-form-label text-md-right">Id Rol</label>
                          <div class="col-md-6">
                              <input type="text" id="id_rol" class="form-control" name="id_rol" value="{{ old('id_rol') }}"required autofocus>
                          </div>
                      </div>
                      <div class="form-group row">
                              <label for="nick" class="col-md-4 col-form-label text-md-right">Usuario</label>
                              <div class="col-md-6">
                                  <input type="text" id="nick" class="form-control" name="nick" value="{{ old('nick') }}"required autofocus>
                              </div>
                          </div>
                      <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required>
                              </div>
                          </div>
                      <div class="form-group row">
                              <label for="password_confirmation" class="col-md-4 col-form-label text-md-right"> Confirmar Contraseña</label>
                              <div class="col-md-6">
                                  <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" required>
                              </div>
                          </div>
                      <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                                  Registrar</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" id="buscar">Buscar</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/usuario.js')}}"></script>
@endsection
