<?php

namespace SoftVet\Http\Controllers;

use Illuminate\Http\Request;
use SoftVet\Usuario;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $users = Usuario::paginate(3);
      if ($request->ajax()) {
        return response()->json(view('usuario.Tusers',compact('users'))->render());
      }
      return view('home',compact('users'));
        //return view('home');
    }
}
