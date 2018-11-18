    <div  id="d-info"  class="row">
      <div class="col-md-12 col-md-offset-2"style="margin-top:20px">
        @if(Session::has('message'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Congratulation</strong><h5>{{Session::get('message')}}</h5>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <div class="card bg-light mb-3 " >
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title"><strong id="cont"> {{$users->total()}}</strong> Usuarios Activos</h5>
            <a type="button" class="btn btn-warning create-modal" href="#">Nuevo</a>
          </div>
          <div class="users card-body">

            <table id="table" class="table table-hover table-striped">
              <thead>
                <th>id</th>
                <th>Nombre</th>
                <th>NickName</th>
                <th>Password</th>
                <th>SuperSu</th>
                <th>IdRol</th>
                <th>created_at</th>
                <th>update_at</th>
                <th WIDTH="148">Acciones</th>
              </thead>
              <tbody>
                @foreach($users as $user)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->nombre}}</td>
                    <td>{{$user->nick}}</td>
                    <td></td>
                    <td>{{$user->supersu}}</td>
                    <td>{{$user->id_rol}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td>
                      <div class="row justify-content-center">
                        <a href="#" id="ModalEditar" class="editar-btn btn btn-primary btn-sm" role="button" aria-pressed="true" data-toggle="modal" data-target="#M-Editar" value="{{$user->id}}" onclick="mostrar({{$user->id}});">Editar</a>
                        {!!Form::open(['route'=>['destroyUser',$user->id],'method'=>'DELETE'])!!}
                          <a class="btnD btn btn-danger btn-sm" href="#">Eliminar</a>
                        {!!Form::close()!!}
                      </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!--
          <div class="card-body">
            <p>
               <strong> $users->total()}} Registros </strong>
            </p>
            <table class="table table-hover table-striped">
              <thead>
                <th>id</th>
                <th>Nombre</th>
                <th>NickName</th>
                <th>Password</th>
                <th>SuperSu</th>
                <th>IdRol</th>
                <th>created_at</th>
                <th>update_at</th>
                <th>Acciones</th>
              </thead>
              <tbody id="datos">

              </tbody>
            </table>
          </div>
        -->
        </div>
      </div>
    </div>
    @section('script')
      <script src="{{asset('js/Script.js')}}"></script>
      <script src="{{asset('js/EditarUs.js')}}"></script>
      <script src="{{asset('js/eliminarUser.js')}}"></script>
    @endsection
