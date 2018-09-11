@extends('../layouts.app');
@section('content')
  <div class="container">
    <h1>Listado de Asignaciones</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Alumno</th>
          <th>Grado</th>
          <th>Seccion</th>
          <th>acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($asignaciones as $asignacion)
        <tr>
          <td>{{ $asignacion->alumno_name }}</td>
          <td>{{ $asignacion->grado_name }}</td>
          <td>{{ $asignacion->seccion }}</td>
          <td>
            <a href="/delete/asignaciones/{{ $asignacion->id}}">
              <button type="button" class="btn btn-danger" name="button">x</button>
            </a>
            <a href="/edit/asignacion/{{ $asignacion->id}}">
              <button type="button" class="btn btn-success" name="button">Editar</button>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <a href="/asignacion">
      <button type="button" class="btn btn-primary" name="button">Agregar otra Asignacion</button>
    </a>
    <a href="/home">
      <button type="button" class="btn btn-secondary" name="button">Regresar al Inicio</button>
    </a>
@endsection
