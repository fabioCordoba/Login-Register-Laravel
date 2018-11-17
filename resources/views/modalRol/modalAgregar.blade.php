<!-- Modal -->
<div class="modal fade" id="modalagregar" tabindex="-1" role="dialog" aria-labelledby="agregarModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titulo-modal">Añadir Nuevo Rol</h5>
        <div id="message-error" class="alert alert-danger alert-dismissible" role="alert" style="display:none" >
          <strong id="msj"></strong>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="fedit" action='Rol.update' method="PUT">
          <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
          <!-- <div class="form-group row">
              <label for="id_rol" class="col-md-4 col-form-label text-md-right">ID Rol</label>
              <div class="col-md-6">
                  <input type="text" id="id_rol_agregar" class="form-control" value="">
              </div>
          </div>-->
          <div class="form-group row">
              <label for="nombre_rol" class="col-md-4 col-form-label text-md-right">Nombre Rol</label>
              <div class="col-md-6">
                  <input type="text" id="nombre_rol_agregar" class="form-control" value="">
              </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <a href="#" id="agregar" class="btn btn-primary" role="button" aria-pressed="true">AGREGAR</a>
      </div>
    </div>
  </div>
</div>
