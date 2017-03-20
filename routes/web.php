<?php

/*GET*/
Route::get('/', 'ColaboradorController@index');
Route::get('/pesquisar', 'ColaboradorController@pesquisar');

Route::get('/colaboradores', 'ColaboradorController@listar');
Route::get('/colaboradores/visualizar/{id}', 'ColaboradorController@view')->where('id', '[0-9]+');
Route::get('/colaboradores/buscar/{id}', 'ColaboradorController@buscar')->where('id', '[0-9]+');
Route::get('/colaboradores/remover/{id}', 'ColaboradorController@remover');
Route::get('/colaboradores/novo', 'ColaboradorController@novo');


/*POST*/
Route::post('/colaboradores/add', 'ColaboradorController@add');
Route::post('/colaboradores/edit/{id}', 'ColaboradorController@edit');