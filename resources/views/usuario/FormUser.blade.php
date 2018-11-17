<div class="form-group">
  {!!Form::label('nombre','Nombre:')!!}
  {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
</div>
<div class="form-group">
  {!!Form::label('id_rol','Id Rol:')!!}
  {!!Form::text('id_rol',null,['class'=>'form-control','placeholder'=>'id rol'])!!}
</div>
<div class="form-group">
  {!!Form::label('supersu','SuperSu:')!!}
  {!!Form::text('supersu',null,['class'=>'form-control','disabled','placeholder'=>'SuperSu'])!!}
</div>
<div class="form-group">
  {!!Form::label('nick','Usuario:')!!}
  {!!Form::text('nick',null,['class'=>'form-control','placeholder'=>'Usuario'])!!}
</div>
<div class="form-group">
  {!!Form::label('password','Contraseña:')!!}
  {!!Form::password('password',['class'=>'form-control'])!!}
</div>
<div class="form-group">
  {!!Form::label('password_confirmation','Confirmar Contraseña:')!!}
  {!!Form::password('password_confirmation',['class'=>'form-control'])!!}
</div>
