@extends('layouts.app');
@section('content')
  <div class="container">
    <h1>Listado de Profesores</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Apellido</th>
          <th>Genero</th>
          <th>acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($profesores as $profesor)
        <tr>
          <td>{{ $profesor->name }}</td>
          <td>{{ $profesor->lastname }}</td>
          <td>@if ($profesor->gender == 1)
            Masculino
          @else Femenino @endif</td>
          <td>
            <a href="/delete/profesores/{{ $profesor->id }}">
              <button type="button" class="btn btn-danger" name="button">x</button>
            </a>
            <a href="/edit/profesor/{{ $profesor->id }}">
              <button type="button" class="btn btn-success" name="button">Editar</button>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <a href="/profesor">
      <button type="button" class="btn btn-primary" name="button">Agregar otro Profesor</button>
    </a>
    <a href="/home">
      <button type="button" class="btn btn-secondary" name="button">Regresar al Inicio</button>
    </a>
@endsection
