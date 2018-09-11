@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Agregar grado</div>
          @if ($validator[0] == 2)
            <div class="form-group">
              <h4>
                Para crear un grado primero tienes que crear un profesor :)
              </h1>
              <br>
              <br>
              <div class="form-group">
                <a href="/profesor">
                  <button type="button" class=" btn btn-primary"name="button">Crear Profesor</button>
                </a>
                <a href="/home">
                  <button type="button" class=" btn btn-secondary"name="button">Volver al Inicio</button>
                </a>
              </div>
            </div>
          @else
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
                   <input type="text" name="name" class="form-control @if($errors->has('name')) is-invalid @endif" placeholder="Escribe el nombre" required>
                    @if($errors->any())
                      @foreach ($errors->get('message') as $error)
                        <div class="invalid-feedback">
                          {{ $error }}
                        </div>
                      @endforeach
                    @endif
                  </div>

                  <div class="form-group">
                    <label for="sel1">Selecciona el profesor:</label>
                      <select class="form-control" name="id_profesor" required>
                        <option value="">...</option>
                        @foreach($profesores as $profesor)
                          <option value="{{ $profesor->id }}">{{ $profesor->name }}</option>
                        @endforeach
                      </select>
                  </div>

                  <button class="btn btn-primary" type="submit">Agregar Grado</button>
                  <a href="/home">
                    <button type="button" class="btn btn-secondary" name="button">Regresar al Inicio</button>
                  </a>
              </form>

          </div>
        </div>
      @endif

      </div>
    </div>
  </div>
@endsection
