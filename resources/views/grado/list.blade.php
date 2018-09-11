@extends('layouts.app');
@section('content')
  <div class="container">
    <h1>Listado de Grados</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Profesor</th>
          <th>acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($grados as $grado)
        <tr>
          <td>{{ $grado->name }}</td>
          <td>{{ $grado->profesor_name }}</td>
          <td>
            <a href="/delete/grados/{{ $grado->id }}">
              <button type="button" class="btn btn-danger" name="button">x</button>
            </a>
            <a href="/edit/grado/{{ $grado->id }}">
              <button type="button" class="btn btn-success" name="button">Editar</button>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <a href="/grado">
      <button type="button" class="btn btn-primary" name="button">Agregar otro Grado</button>
    </a>
    <a href="/home">
      <button type="button" class="btn btn-secondary" name="button">Regresar al Inicio</button>
    </a>
@endsection
