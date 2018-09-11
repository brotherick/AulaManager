<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Options menu
Route::get('/home', 'HomeController@index');
Route::get('/alumno', 'HomeController@alumno');
Route::get('/profesor', 'HomeController@profesor');
Route::get('/grado', 'HomeController@grado');
Route::get('/asignacion', 'HomeController@asignacion');

//Create
Route::post('/alumno/create', 'AlumnoController@create');
Route::post('/profesor/create', 'ProfesorsController@create');
Route::post('/grado/create', 'GradosController@create');
Route::post('/asignacion/create', 'AsignacionController@create');

//Show
Route::get('/alumno/list', 'AlumnoController@list');
Route::get('/profesor/list', 'ProfesorsController@list');
Route::get('/grado/list', 'GradosController@list');
Route::get('/asignacion/list', 'AsignacionController@list');

//delete
Route::get('/delete/alumnos/{id}', 'AlumnoController@delete');
Route::get('/delete/profesores/{id}', 'ProfesorsController@delete');
Route::get('/delete/grados/{id}', 'GradosController@delete');
Route::get('/delete/asignaciones/{id}', 'AsignacionController@delete');

//edit
Route::get('/edit/alumnos/{id}', 'AlumnoController@edit');
Route::get('/edit/profesor/{id}', 'ProfesorsController@edit');
Route::get('/edit/grado/{id}', 'GradosController@edit');
Route::get('/edit/asignacion/{id}', 'AsignacionController@edit');

//error
Route::get('/error', 'ProfesorsController@delete');
