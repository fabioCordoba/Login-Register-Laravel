@extends('layouts.Admin')

@section('content')

<div class="container">
    <div  id="d-info"  class="row">
      @include('usuario/Read-User')
    </div>
</div>
@include('usuario/ModalReg')
@include('usuario/ModalEditarUs')
@endsection
