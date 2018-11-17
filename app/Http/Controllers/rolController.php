<?php

namespace SoftVet\Http\Controllers;

use SoftVet\Rol;
use Illuminate\Http\Request;
use SoftVet\Http\Requests\RolRequest;
class rolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $roles = Rol::All();
      return view('rol',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RolRequest $request)
    {
      if($request->ajax()){
        $rol = new Rol();
        $rol->id = $request->id;
        $rol->nombre = $request->nombre;
        $rol->save();
        $respuesta=$rol;
        if($respuesta){
          return response()->json(['success'=>'true']);
        }else{
          return response()->json(['success'=>'false']);
        }
 }
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
      $rol=Rol::find($id);
      return $rol;
      return response()->json($rol);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RolRequest $request, $id)
    {
      if($request->ajax()){
        $id=$request->id;
        $rol = Rol::where('id','=',$id)->firstOrfail();
        $rol->nombre = $request->nombre;
        $rol->save();
        $respuesta=$rol;
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
      $rol=Rol::findOrfail($id);
      $resul=$rol->delete();
      if($resul){
        return response()->json(['success'=>'true']);
      }else{
        return response()->json(['success'=>'false']);
      }

    }
}
