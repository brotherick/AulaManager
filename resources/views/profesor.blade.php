@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agregar Profesor</div>
                <div class="card-body">

                  <div class="row">

                    <div class="form-group">
                      <form class="" action="/profesor/create" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <input class="form-control" type="text" name="name" value="" placeholder="Ingrese el nombre del profesor" required>
                        </div>
                        <div class="form-group">
                          <input class="form-control" type="text" name="lastname" value="" placeholder="Ingrese el apellido del profesor" required>
                        </div>
                        <div class="form-group">
                          <select class="form-control" name="gender" required>
                            <option value="">Escoge el genero</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                          </select>
                        </div>
                        <button type="submit" class="btn btn-success" name="button">Agregar Profesor</button>
                        <a href="/home">
                          <button type="button" class="btn btn-secondary" name="button">Regresar al inicio</button>
                        </a>
                      </form>
                    </div>

                  </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
