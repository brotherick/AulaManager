@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Dashboard</div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
            <div class="card-body">
              @if (session('status'))
                <div class="alert alert-success" role="alert">
                  {{ session('status') }}
                </div>
              @endif
              <div class="row">
                <form class="" action="/grado/create" method="post">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <input type="hidden" name="id" value="{{ $grado->id }}">
                     <input type="text" name="name" class="form-control" placeholder="Escribe el nombre" value="{{ $grado->name }}"required>
                    </div>

                    <div class="form-group">
                      <label for="sel1">Selecciona el profesor:</label>
                        <select class="form-control" name="id_profesor" required>
                          <option value="">...</option>
                          @foreach($profesores as $profesor)
                            <option value="{{ $profesor->id }}"@if ($profesor->id == $grado->id_profesor) selected @endif>{{ $profesor->name }}</option>
                          @endforeach
                        </select>
                    </div>

                    <button class="btn btn-primary" type="submit">Actualizar Grado</button>
                    <a href="/home">
                      <button type="button" class="btn btn-secondary" name="button">Regresar al Inicio</button>
                    </a>
                </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
