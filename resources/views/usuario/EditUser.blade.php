@extends('layouts.Admin')

@section('content')
<div class="cotainer">
      <div class="row justify-content-center">
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
                  <div class="card-header"><h5>Actualizar Datos De Usuario</h5></div>
                  <div class="card-body">
                    {!!Form::model($users,['route'=>['Usuario.update',$users->id],'method'=>'PUT'])!!}
                      @include('usuario/FormUser')
                      {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
                    {!!Form::close()!!}
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
