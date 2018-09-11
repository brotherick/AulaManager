<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grado;
use App\Profesor;
use Illuminate\Support\Facades\DB;

class GradosController extends Controller
{
  public function create(Request $request)
  {

    $alumno = Grado::updateOrCreate([
      'id' => $request->input('id')],[
      'name' => $request->input('name'),
      'id_profesor' => $request->input('id_profesor')
    ]);

    return redirect('/grado/list');

  }

  public function list(Request $request)
  {
    $grados = DB::table('grado')
            ->join('profesor', 'grado.id_profesor', '=', 'profesor.id')
            ->select('grado.*', 'profesor.name as profesor_name')
            ->get();
    return view('/grado/list',compact('grados'));
  }

  public function delete($id)
  {
    try {
          $alumnos = Grado::find($id);
          $alumnos->delete();
          return redirect('/grado/list');
    } catch (\Illuminate\Database\QueryException $ex) {
      return view('/errors/error2');
    }

  }

  public function edit($id)
  {
    $profesores = Profesor::all();
    $grado = Grado::find($id);
    return view('/grado/edit',compact('grado','profesores'));
  }

}
