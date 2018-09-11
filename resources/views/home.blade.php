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
                      <a href="alumno">
                        <button type="submit" class="btn btn-primary" name="button">Alumno</button>
                      </a>
                      <a href="alumno/list">
                        <button type="submit" class="btn btn-success" name="button">Listado alumnos</button>
                      </a><br><br>
                      <a href="profesor">
                        <button type="submit" class="btn btn-primary" name="button">Profesor</button>
                      </a>
                      <a href="profesor/list">
                        <button type="submit" class="btn btn-success" name="button">Listado Profesor</button>
                      </a><br><br>
                      <a href="grado">
                        <button type="submit" class="btn btn-primary" name="button">Grado</button>
                      </a>
                      <a href="grado/list">
                        <button type="submit" class="btn btn-success" name="button">Listado Grados</button>
                      </a><br><br>
                      <a href="asignacion">
                        <button type="submit" class="btn btn-primary" name="button">Asignacion</button>
                      </a>
                      <a href="asignacion/list">
                        <button type="submit" class="btn btn-success" name="button">Listado Asignaciones</button>
                      </a><br><br>
                    </div>

                  </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
