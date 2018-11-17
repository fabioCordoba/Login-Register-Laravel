//boton crar nuevo rol
$(document).ready( function() {
    var route ="Rol";
    var token = $('#token').val();
  $('#agregar').click(function(){
    //var id_dato = $('#id_rol_agregar').val();
    var nom_dato = $('#nombre_rol_agregar').val();
    $.ajax({
  url: route,
  headers: {'X-CSRF-TOKEN':token},
  type: 'POST',
  dataType: 'json',
  data:{
    //id: id_dato,
    nombre: nom_dato
       },
 success: function(data){
    if (data.success == 'true') {
      $(".table").load(" .table");//recargar solamete el elemeto tabla  , el espacio de el selesctor en en load deve ir
      $('#modalagregar').modal('toggle');//ocultar modal
      $("#modalagregar .close").click();//por si no se cierra correctamente lansamos el evento .close
      $('#message-update-crear').fadeIn(400);//muestra el mensaje oculto mensaje que indiga que se guardo corectamente
      //$('#id_rol_agregar').val('');
      $('#nombre_rol_agregar').val('');
    }
  },
error: function(msj){
  console.log(msj.responseJSON.errors.id+" "+msj.responseJSON.errors.nombre);
  $('#msj').html(msj.responseJSON.errors.id+" "+msj.responseJSON.errors.nombre);
  $('#message-error').fadeIn(400);
  $("#modalagregar .close").click(function(){//para despintar el mensaje de rerror
    $('#message-error').fadeOut();
  });
}
});
});
});
//boton editar rol
function mostrar(datos){
    ruta ="Rol/"+datos+"/edit";
  $.get(ruta, function(res){//extraigo todos los datos de mi bd
    id=res.id;
    nombre=res.nombre;
    $('#id_rol_Editar').val(id);
    $('#nombre_rol_Editar').val(nombre);
    //$('#EditarModalLabel').text('Editar Rol: '+id);
    console.log(nombre+id);
  });
}

$(document).ready(function(){
   $('#editar_rol').click(function(){
      var id_dato=$('#id_rol_Editar').val();;
       var nom_dato=$('#nombre_rol_Editar').val();
        var ruta="Rol/"+id_dato+"";
          var token = $('#token').val();
              $.ajax({
                 url: ruta,
                 headers: {'X-CSRF-TOKEN':token},
                 type: 'PUT',
                 dataType: 'json',
                 data:{id: id_dato,
                 nombre: nom_dato
               },
                  success: function(data){
                    if (data.success == 'true') {
                      $(".table").load(" .table");//recargar solamete el elemeto tabla  , el espacio de el selesctor en en load deve ir
                    //  $(".bedit").load(" .bedit");
                      $('#modalEditar').modal('toggle');//ocultar modal
                      $("#modalEditar .close").click()
                      $('#message-update').fadeIn(400);//muestra el mensaje oculto
                    }
                  },
                  error: function(msj){
                    console.log(msj.responseJSON.errors.nombre);
                    $('#msj-editar').html(msj.responseJSON.errors.nombre);
                    $('#message-error-editar').fadeIn(400);
                    $("#modalEditar .close").click(function(){//para despintar el mensaje de rerror
                    $('#message-error-editar').fadeOut();
                    });
                  }
     });
     });
});
  //eliminar un registro ................
  function eliminar(datos){
      var ruta="Rol/"+datos+"";
        var token = $('#token').val();
            $.ajax({
               url: ruta,
               headers: {'X-CSRF-TOKEN':token},
               type: 'DELETE',
               dataType: 'json',
               success: function(){
                   $(".table").load(" .table");//recargar solamete el elemeto tabla  , el espacio de el selesctor en en load deve ir
                 //  $(".bedit").load(" .bedit");
                   $('#message-eliminar').fadeIn(400);//muestra el mensaje oculto
                   $('#message-eliminar').fadeOut();
               }
      });
  }
