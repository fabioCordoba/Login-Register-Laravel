<!-- Modal  aquii-->
<div class="modal fade create-modal" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
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
        <form id="forma" class="form-horizontal" role="form">
          <div class="form-group row">
              <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>
              <div class="col-md-6">
                <input type="hidden" id="token" name="_token" value="{{ csrf_token()}}">
                <input type="text" id="nombre" class="form-control" name="nombre" value="" required autofocus>
              </div>
          </div>
          <div class="form-group row">
              <label for="id_rol" class="col-md-4 col-form-label text-md-right">Id Rol</label>
              <div class="col-md-6">
                  <input type="text" id="id_rol" class="form-control" name="id_rol" value=""required autofocus>
              </div>
          </div>
          <div class="form-group row">
                  <label for="nick" class="col-md-4 col-form-label text-md-right">Usuario</label>
                  <div class="col-md-6">
                      <input type="text" id="nick" class="form-control" name="nick" value=""required autofocus>
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
          <!--<div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">Registrar</button>
          </div>
        </form>-->
        </form>
      </div>
      <div class="modal-footer">
        <button id="btn-Registrar" type="submit" class="btn btn-primary">Registrar</button>
        <button id="btn-close" type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!--Fin Modal -->
