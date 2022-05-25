<?php

use Illuminate\Support\Facades\Route;

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
    return view('candidatos.cadastrar');
});


Route::post('/cadastrar', 'CandidatoController@create')->name('cadastrar.candidato');

Route::get('/visualiza', 'CandidatoController@index')->name('visualiza.candidato');
Route::get('/editar/{id}', 'CandidatoController@edit')->name('edit.candidato');
Route::post('/editado/{id}', 'CandidatoController@update')->name('editado.candidato');
Route::delete('/excluir/{id}', 'CandidatoController@destroy');
