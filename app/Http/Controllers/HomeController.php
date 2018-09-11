<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesor;
use App\Alumno;
use App\Grado;


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
    public function index()
    {
        return view('home');
    }

    public function alumno()
    {
        return view('alumno');
    }

    public function profesor()
    {
        return view('profesor');
    }

    public function grado()
    {
        $profesores = Profesor::all();
        if ($profesores->count()) {
          $validator = array(1);
        }else {
          $validator = array(2);
        }
        return view('grado',compact('profesores','validator'));
    }

    public function asignacion()
    {
      $alumnos = Alumno::all();
      $grados = Grado::all();
      if ($alumnos->count() && $grados->count()) {
        $validator = array(1);
      }else {
        $validator = array(2);
      }
      return view('asignacion',compact('alumnos','grados','validator'));
    }

}
