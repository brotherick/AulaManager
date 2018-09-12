<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asignacion;
use App\Alumno;
use App\Grado;
use Illuminate\Support\Facades\DB;

class AsignacionController extends Controller
{
  public function create(Request $request)
  {
    $alumno = Asignacion::updateOrCreate(
      [
        'id' => $request->input('id')],
      [
      'id_alumno' => $request->input('id_alumno'),
      'id_grado' => $request->input('id_grado'),
      'seccion' => $request->input('seccion')
    ]);

    return redirect('asignacion/list');
  }

  public function list(Request $request)
  {
    $asignaciones = DB::table('asignacion')
            ->join('alumno', 'asignacion.id_alumno', '=', 'alumno.id')
            ->join('grado', 'asignacion.id_grado', '=', 'grado.id')
            ->select('asignacion.*', 'alumno.name as alumno_name', 'grado.name as grado_name')
            ->get();
    return view('/asignacion/list',compact('asignaciones'));
  }

  public function delete($id)
  {
    DB::table('asignacion')->where('id', '=', $id)->delete();
    return redirect('/asignacion/list');
  }

  public function edit($id)
  {
    $alumnos = Alumno::all();
    $grados = Grado::all();

    $seccion = DB::table('asignacion')
                     ->select(DB::raw('*'))
                     ->where('id', '=', $id)->get();
    return view('/asignacion/edit',compact('alumnos','grados','seccion'));
  }

}
