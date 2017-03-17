<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('colaboradores', 'Api\ColaboradorController@index');
Route::get('funcoes', 'Api\FuncaoController@index');

