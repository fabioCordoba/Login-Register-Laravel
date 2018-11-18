
<!-- Modal -->
<div class="modal fade" id="M-Editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
        <form id="formE" class="form-horizontal" role="form">
          <div class="form-group row">
              <label for="id" class="col-md-4 col-form-label text-md-right">Id</label>
              <div class="col-md-6">
                  <input type="text" id="id" class="form-control" disabled name="id" value=""required autofocus>
              </div>
          </div>
          <div class="form-group row">
              <label for="ENombre" class="col-md-4 col-form-label text-md-right">Nombre</label>
              <div class="col-md-6">
                <input type="hidden" id="token" name="_token" value="{{ csrf_token()}}">
                <input type="text" id="Nombre" class="form-control" name="Nombre" value="" required autofocus>
              </div>
          </div>
          <div class="form-group row">
              <label for="Id_rol" class="col-md-4 col-form-label text-md-right">Id Rol</label>
              <div class="col-md-6">
                  <input type="text" id="Id_rol" class="form-control" name="Id_rol" value=""required autofocus>
              </div>
          </div>
          <div class="form-group row">
                  <label for="Nick" class="col-md-4 col-form-label text-md-right">Usuario</label>
                  <div class="col-md-6">
                      <input type="text" id="Nick" class="form-control" name="Nick" value=""required autofocus>
                  </div>
              </div>
          <div class="form-group row">
                  <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>
                  <div class="col-md-6">
                      <input type="password" id="Password" class="form-control" name="Password" required>
                  </div>
              </div>
          <div class="form-group row">
                  <label for="password_confirmation" class="col-md-4 col-form-label text-md-right"> Confirmar Contraseña</label>
                  <div class="col-md-6">
                      <input type="password" id="Password_confirmation" class="form-control" name="Password_confirmation" required>
                  </div>
              </div>
          <!--<div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">Registrar</button>
          </div>
        </form>-->
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="EditarUs" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>
