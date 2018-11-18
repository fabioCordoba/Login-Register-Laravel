function mostrar(datos){
    ruta ="Usuario/"+datos+"/edit";
  $.get(ruta, function(res){//extraigo todos los datos de mi bd
    id=res.id;
    nombre=res.nombre;
    nick = res.nick;
    id_rol=res.id_rol;

    $('#id').val(id);
    $('#Nombre').val(nombre);
    $('#Id_rol').val(id_rol);
    $('#Nick').val(nick);
    //$('#EditarModalLabel').text('Editar Rol: '+id);
    console.log(id+nombre+id_rol+nick);
  });
}

$(document).ready(function(){
   $('#EditarUs').click(function(){
      var id_dato=$('#id').val();
      var nom_dato=$('#Nombre').val();
      var idrol_datos=$('#Id_rol').val();
      var nick_dato=$('#Nick').val();
      var pass_dato=$('#Password').val();
      var cpass_dato=$('#Password_confirmation').val();
      console.log(pass_dato+cpass_dato);
      var ruta="Usuario/"+id_dato+"";
          var token = $('#token').val();
              $.ajax({
                 url: ruta,
                 headers: {'X-CSRF-TOKEN':token},
                 type: 'PUT',
                 dataType: 'json',
                 data:{
                   id: id_dato,
                   nombre: nom_dato,
                   id_rol:idrol_datos,
                   nick:nick_dato,
                   password:pass_dato,
                   password_confirmation:cpass_dato,
               },
                  success: function(data){
                    if (data.success == 'true') {
                      $("#cont").load(" #cont");
                      $("#table").load(" #table");//recargar solamete el elemeto tabla  , el espacio de el selesctor en en load deve ir
                      $('#formE').trigger("reset");
                      $('#M-Editar').modal('toggle');
                    }
                  },
            });
     });
});
