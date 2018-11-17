$(document).on('click','.create-modal',function(){
  $('#create').modal('show');
  $('.form-horizontal').show();
  $('.modal-title').text('Registrar Nuevo Usuario');
});

$('#btn-Registrar').click(function(){
  $.ajax({
    type:'POST',
    url:'createUs',
    data:{
      '_token':$('input[name=_token]').val(),
      'nombre':$('input[name=nombre]').val(),
      'id_rol':$('input[name=id_rol]').val(),
      'nick':$('input[name=nick]').val(),
      'password':$('input[name=password]').val(),
      'password_confirmation':$('input[name=password_confirmation]').val(),
    },
    success:function(data) {
      if ((data.errors)) {
        $('.error').removeClass('hidden');
        $('.error').text(data.errors.nombre);
        $('.error').text(data.errors.id_rol);
        $('.error').text(data.errors.nick);
        $('.error').text(data.errors.password);
      }else {
        //$('#table').append("<tr><td>"+data.id+"</td><td>"+data.nombre+"</td><td>"+data.nick+"</td><td></td><td>"+data.supersu+"</td><td>"+data.id_rol+"</td><td>"+data.create_at+"</td><td>"+data.updated_at+"</td><td><div class='row justify-content-center'>{!!link_to_route('Usuario.edit',$ttle ='Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary btn-sm'])!!}{!!Form::open(['route'=>['destroyUser',$user->id],'method'=>'DELETE'])!!}<a class='btnD btn btn-danger btn-sm' href='#'>Eliminar</a>{!!Form::close()!!}</div></td></tr>");
        $("#cont").load(" #cont");
        $("#table").load(" #table");
      }
    },
  });
  $('#forma').trigger("reset"); 
});
$("#create").on('hidden.bs.modal', function () {
  alert("Esta accion se ejecuta al cerrar el modal");
  $("#d-info").load(" #d-info");
});
