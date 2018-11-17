<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  </head>
  <body>
    <main class="login-form"style="margin-top:20px">
      @if(Session::has('message'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Ups...</strong><h5>{{Session::get('message')}}</h5>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Iniciar Sesión</div>
                        <div class="card-body">
                            <form action="{{ route('login.store') }}" method="POST">
                              {{ csrf_field() }}
                                <div class="form-group row {{$errors->has('usuario')?'has-$error':''}}">
                                    <label for="nick" class="col-md-4 col-form-label text-md-right">Usuario</label>
                                    <div class="col-md-6">
                                        <input type="text" id="nick" class="form-control " name="nick" required autofocus>
                                        @if ($errors->has('nick'))
                                            <span class="help-block alert-danger ">
                                                <strong>{{ $errors->first('nick') }}</strong>
                                            </span>
                                        @endif

                                    </div>
                                </div>

                                <div class="form-group row {{$errors->has('password')?'has-$error':''}}">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" required>
                                        {!!$errors->first('password',':message')!!}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Recordar Contraseña
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-outline-success">
                                        Entrar
                                    </button>
                                    <a href="#" class="btn btn-link">
                                        Olvidaste Tu Contraseña?
                                    </a>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </main>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
