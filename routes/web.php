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

Route::get('/generate/models', '\\Jimbolino\\Laravel\\ModelBuilder\\ModelGenerator5@start');

Route::group(['middleware' => ['web']], function(){
    Route::resource('matricula/', 'MatriculaController');
    Route::resource('disciplina', 'DisciplinaController');
    Route::resource('nota', 'NotaController');
    Route::resource('media', 'MediaController');
});


Route::get('livros/{titulo?}', function ($name = 'primeiros-passos-docker') {
    return $name;
});

/*
Route::get('/matricula', function(){
    return view('matricula');
});

Route::get('/disciplina', function(){
    return view('disciplina');
});

Route::get('/nota', function(){
    return view('nota');
});

Route::get('/media', function(){
    return view('media');
});
*/
