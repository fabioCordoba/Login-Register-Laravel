<?php

namespace SoftVet\Http\Controllers;

use Illuminate\Http\Request;
use SoftVet\Usuario;
use Session;
use Redirect;
use SoftVet\Http\Requests\UserCreateRequest;
use SoftVet\Http\Requests\UserUpdateRequest;

class UsuarioController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      //$users = Usuario::All();
      $users = Usuario::paginate(50);
      return view('usuario/usuarioIndex',compact('users'));
    }
    public function createUs(UserCreateRequest $request)
    {
      $user = new Usuario;
      $user->nombre = $request->nombre;
      $user->nick = $request->nick;
      $user->password = $request->password;
      $user->supersu = 0;
      $user->id_rol = $request->id_rol;
      $user->save();

      return response()->json($user);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario/Registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
      Usuario::create([
        'nombre'=>$request['nombre'],
        'id_rol'=>$request['id_rol'],
        'supersu'=>0,
        'nick'=>$request['nick'],
        'password'=>$request['password']
      ]);
      Session::flash('message','Nuevo Usuario Creado Correctamente...');
      return redirect::to('/Usuario');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $users = Usuario::find($id);
      //return view('usuario/EditUser',['users'=>$users]);
      //$rol=Rol::find($id);
      return $users;
      return response()->json($users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        //$users = Usuario::find($id);
        //$users->fill($request->all());
        //$users->save();
        //Session::flash('message','Datos De Usuario Editados Correctamente....');
        //return redirect::to('/Usuario');

        if($request->ajax()){
          $id=$request->id;
          $users = Usuario::where('id','=',$id)->firstOrfail();
          $users->nombre = $request->nombre;
          $users->id_rol = $request->id_rol;
          $users->nick = $request->nick;
          //$user->supersu = 0;
          $users->password = $request->password;
          $users->save();
          $respuesta=$users;
          if($respuesta){
            return response()->json(['success'=>'true']);
          }else{
            return response()->json(['success'=>'false']);
          }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::destroy($id);
        Session::flash('message','Datos De Usuario Eliminado Correctamente....');
        return redirect::to('/Usuario');
    }
    public function destroyUser(Request $request, $id)
    {
      if ($request->ajax()) {
        $users = Usuario::find($id);
        $users->delete();
        $users_total = Usuario::all()->count();
        return response()->json([
          'total' => $users_total,
        ]);
      }
    }
}
