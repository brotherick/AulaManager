@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Dashboard</div>
            <div class="form-group">
              <h4>
                El Usuario no se puede eliminar ya que pertenece a una asignacion
              </h1>
              <br>
              <br>
              <div class="form-group">
                <a href="/alumno/list">
                  <button type="button" class=" btn btn-primary"name="button">Lista de Alumnos</button>
                </a>
                <a href="/home">
                  <button type="button" class=" btn btn-secondary"name="button">Volver al Inicio</button>
                </a>
              </div>
            </div>

      </div>
    </div>
  </div>
@endsection
