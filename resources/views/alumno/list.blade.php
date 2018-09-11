@extends('layouts.app');
@section('content')
  <div class="container">
    <h1>Listado de Alumnos</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Apellido</th>
          <th>Genero</th>
          <th>Fecha de nacimiento</th>
          <th>acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($alumnos as $alumno)
        <tr>
          <td>{{ $alumno->name }}</td>
          <td>{{ $alumno->lastname }}</td>
          <td>@if ($alumno->gender == 1)
            Masculino
          @else Femenino @endif</td>
          <td>{{ $alumno->borndate }}</td>
          <td>
              <button type="button" class="btn btn-danger" name="button" data-toggle="modal" data-target="#myModal"> x </button>
            <a href="/edit/alumnos/{{ $alumno->id }}">
              <button type="button" class="btn btn-success" name="button">Editar</button>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <a href="/alumno">
      <button type="button" class="btn btn-primary" name="button">Agregar otro Alumno</button>
    </a>
    <a href="/home">
      <button type="button" class="btn btn-secondary" name="button">Regresar al Inicio</button>
    </a>

    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Confirmation</h4>
        </div>
        <div class="modal-body">
          <p>Estas seguro de eliminar a este alumno?</p>
        </div>
        <div class="modal-footer">
          <a href="/delete/alumnos/{{ $alumno->id }}">
            <button type="button" class="btn btn-primary">Si, estoy seguro</button>
          </a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
      </div>

    </div>
  </div>
@endsection
