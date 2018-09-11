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
            <div class="row">
              <form class="" action="/alumno/create" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                  <input type="hidden" name="id" value="{{ $alumno->id }}">
                   <input type="text" name="name" value="{{ $alumno->name }}"class="form-control @if($errors->has('name')) is-invalid @endif" placeholder="Escribe el nombre">
                    @if($errors->any())
                      @foreach ($errors->get('message') as $error)
                        <div class="invalid-feedback">
                          {{ $error }}
                        </div>
                      @endforeach
                    @endif
                  </div>

                  <div class="form-group">
                   <input type="text" name="lastname" value="{{ $alumno->lastname }}"class="form-control @if($errors->has('lastname')) is-invalid @endif" placeholder="Escribe el apellido">
                    @if($errors->any())
                      @foreach ($errors->get('message') as $error)
                        <div class="invalid-feedback">
                          {{ $error }}
                        </div>
                      @endforeach
                    @endif
                  </div>

                  <div class="form-group">
                    <label for="sel1">Selecciona el genero:</label>
                      <select class="form-control" name="gender">
                        @if ($alumno->gender ==1)
                          <option value="1" selected>Masculino</option>
                          <option value="2">Femenino</option>
                        @else
                          <option value="1">Masculino</option>
                          <option value="2" selected>Femenino</option>
                        @endif
                      </select>
                  </div>

                  <div class="form-group">
                    <label for="sel1">Selecciona la fecha de nacimiento:</label>
                   <input type="date" name="borndate" value="{{ $alumno->borndate }}" class="form-control @if($errors->has('borndate')) is-invalid @endif" placeholder="Escribe la fecha">
                  </div>

                  <button class="btn btn-primary" type="submit">Actualizar Alumno</button>
                  <a href="/home">
                    <button type="button" class="btn btn-secondary" name="button">Regresar al Inicio</button>
                  </a>
              </form>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
