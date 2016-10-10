<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::post('/aluno/create','AlunoController@create');
Route::post('/aluno/show/{id}','AlunoController@show');
Route::post('/aluno/update/{id}','AlunoController@update');
Route::post('/aluno/delete/{id}','AlunoController@delete');

Route::post('aluno/matricular','AlunoController@matricDisciplina');
Route::post('aluno/matricula/{id}','AlunoController@showDisciplina');

Route::post('/disciplina/','DisciplinaController@listAll');
Route::post('/disciplina/create','DisciplinaController@create');
Route::post('/disciplina/show/{id}','DisciplinaController@show');
Route::post('/disciplina/update/{id}','DisciplinaController@update');
Route::post('/disciplina/delete/{id}','DisciplinaController@delete');

Route::get('/atividade/{id}','AtividadeController@listAll');
Route::post('/atividade/create','AtividadeController@create');
Route::post('/atividade/show/{id}','AtividadeController@show');
Route::post('/atividade/update/{id}','AtividadeController@update');
Route::post('/atividade/delete/{id}','AtividadeController@delete');

Route::get('/usuario/','UserController@listAll');
Route::post('/usuario/create','UserController@create');
Route::post('/usuario/show/{id}','UserController@show');
Route::post('/usuario/update/{id}','UserController@update');
Route::post('/usuario/delete/{id}','UserController@delete');
Route::post('/usuario/logar','UserController@logar');
