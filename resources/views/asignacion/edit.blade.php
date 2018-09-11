@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                  <div class="row">
                    <div class="form-group">
                      <form class="" action="/asignacion/create" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <input type="hidden" name="id" value="{{ $seccion[0]->id }}">
                          <input class="form-control" type="text" name="seccion" value="{{ $seccion[0]->seccion }}" placeholder="Ingrese la seccion" required>
                        </div>
                        <div class="form-group">
                          <select class="form-control" name="id_alumno" required>
                            <option value="">Selecciona un alumno </option>

                            @foreach($alumnos as $alumno)
                              <option value="{{ $alumno->id }}" @if ($alumno->id == $seccion[0]->id_alumno) selected @endif>{{ $alumno->name }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <select class="form-control" name="id_grado" required>
                            <option value="">Selecciona un grado</option>
                            @foreach($grados as $grado)
                              <option value="{{ $grado->id }}" @if ($grado->id == $seccion[0]->id_grado) selected @endif>{{ $grado->name }}</option>
                            @endforeach
                          </select>
                        </div>
                        <button type="submit" class="btn btn-success" name="button">Actualizar asignacion</button>
                        <a href="/home">
                          <button type="button" class="btn btn-secondary" name="button">Regresar al inicio</button>
                        </a>
                      </form>
                    </div>

                  </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
