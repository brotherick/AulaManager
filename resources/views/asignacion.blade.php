@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agregar Asignacion</div>
                @if ($validator[0] == 2)
                  <div class="form-group">
                    <h4>
                      Para crear una asignacion primero tienes que crear alumnos y grados :)
                    </h4>
                    <br>
                    <br>
                    <div class="form-group">
                      <a href="/home">
                        <button type="button" class=" btn btn-secondary"name="button">Volver al Inicio</button>
                      </a>
                    </div>
                  </div>
                @else
                <div class="card-body">
                  <div class="row">
                    <div class="form-group">
                      <form class="" action="/asignacion/create" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <input class="form-control" type="text" name="seccion" value="" placeholder="Ingrese la seccion" required>
                        </div>
                        <div class="form-group">
                          <select class="form-control" name="id_alumno" required>
                            <option value="">Selecciona un alumno</option>
                            @foreach($alumnos as $alumno)
                              <option value="{{ $alumno->id }}">{{ $alumno->name }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <select class="form-control" name="id_grado" required>
                            <option value="">Selecciona un grado</option>
                            @foreach($grados as $grado)
                              <option value="{{ $grado->id }}">{{ $grado->name }}</option>
                            @endforeach
                          </select>
                        </div>
                        <button type="submit" class="btn btn-success" name="button">Agregar Asignacion</button>
                        <a href="/home">
                          <button type="button" class="btn btn-secondary" name="button">Regresar al inicio</button>
                        </a>
                      </form>
                    </div>

                  </div>
                </div>
              @endif

            </div>
        </div>
    </div>
</div>
@endsection
