<?php

/*DEFAULT*/
Route::get('/', function () {
    $rs = DB::table('tb_colaborador')->where('email', '=', 'falecomweslley@gmail.com')->get();
    //return $rs;
    return view('index')->with(['c' => $rs]);
});

/*GET*/
//Route::get('/', 'ColaboradorController@pesquisa');
Route::get('/colaboradores', 'ColaboradorController@listar');
Route::get('/colaboradores/visualizar/{id}', 'ColaboradorController@view')->where('id', '[0-9]+');
Route::get('/colaboradores/buscar/{id}', 'ColaboradorController@buscar')->where('id', '[0-9]+');
Route::get('/colaboradores/remover/{id}', 'ColaboradorController@remover');
Route::get('/colaboradores/novo', 'ColaboradorController@novo');


/*POST*/
Route::post('/colaboradores/add', 'ColaboradorController@add');
Route::post('/colaboradores/edit/{id}', 'ColaboradorController@edit');