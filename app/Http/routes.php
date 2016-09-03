<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/novo', 'BicicletaController@novo');

Route::get('/', 'BicicletaController@listar');

Route::post('/salvar', [
       'as'   => 'bicicletas.salvar',
       'uses' => 'BicicletaController@salvar']);

Route::get('/{bicicleta}', [
      'as'   => 'bicicleta.editar',
      'uses' => 'BicicletaController@editar']);

Route::delete('/{bicicleta}', 'BicicletaController@excluir');
