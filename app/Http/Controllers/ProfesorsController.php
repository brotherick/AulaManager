<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryExceptio;
use App\Profesor;

class ProfesorsController extends Controller
{
  public function create(Request $request)
  {
    $alumno = Profesor::updateOrCreate([
      'id' => $request->input('id')],[
      'name' => $request->input('name'),
      'lastname' => $request->input('lastname'),
      'gender' => $request->input('gender'),
    ]);

    return redirect('/profesor/list');
  }

  public function list(Request $request)
  {
    $profesores = Profesor::all();
    return view('/profesor/list',compact('profesores'));
  }

  public function delete($id)
  {
    try {
      $profesores = Profesor::find($id);
      $profesores->delete();
      return redirect('/profesor/list');
    } catch (\Illuminate\Database\QueryException $ex) {
        return view('/errors/error');
    }
  }

  public function edit($id)
  {
    $profesor = Profesor::find($id);
    return view('/profesor/edit',compact('profesor'));
  }

}
