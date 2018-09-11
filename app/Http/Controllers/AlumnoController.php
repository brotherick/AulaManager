<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;

class AlumnoController extends Controller
{
  public function create(Request $request)
  {
    $alumno = Alumno::updateOrCreate([
      'id' => $request->input('id')],[
      'name' => $request->input('name'),
      'lastname' => $request->input('lastname'),
      'gender' => $request->input('gender'),
      'borndate' => $request->input('borndate')
    ]);
    return redirect('/alumno/list');
  }

  public function list(Request $request)
  {
    $alumnos = Alumno::all();
    return view('/alumno/list',compact('alumnos'));
  }

  public function delete($id)
  {
    try {
      $alumnos = Alumno::find($id);
      $alumnos->delete();
      return redirect('/alumno/list');
    } catch (\Illuminate\Database\QueryException $ex) {
      return view('/errors/error3');
    }


  }

  public function edit($id)
  {
    $alumno = Alumno::find($id);
    return view('/alumno/edit',compact('alumno'));
  }

}
