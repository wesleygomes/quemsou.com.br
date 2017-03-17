<?php

namespace App\Http\Controllers;

use App\Colaborador;
use App\Funcao;
use App\Http\Controllers\Controller;
use App\Http\Requests\ColaboradorRequest;
use Illuminate\Support\Facades\DB;
use Request;
use Validator;

class ColaboradorController extends Controller
{
    public function listar(){
        return view('colaborador.list')->withColaboradores(Colaborador::all());
    }

    public function view($id){
        return view('colaborador.view')->with('c', Colaborador::find($id));
    }

    public function novo(){
        return view('colaborador.add')->with('funcoes', Funcao::all());
    }

    public function add(ColaboradorRequest $request){
        Colaborador::create($request->all());



        return redirect()->action('ColaboradorController@listar')->withInput(Request::only('nome'));
    }

    public function buscar($id){
        $colaborador = Colaborador::find($id);

        if(empty($colaborador)) {
            return "Colaborador não cadastrado!";
        }

        return view('colaborador.edit')->with(['c' => $colaborador, 'funcoes' => Funcao::all()]);
    }

    public function edit(ColaboradorRequest $request, $id){
        $params = $request->all();
        $c = Colaborador::find($id);
        $c->update($params);

        return redirect()->action('ColaboradorController@listar')->withInput(Request::only('nome'));
    }

    public function remover($id){
        $colaborador = Colaborador::find($id);
        $colaborador->delete();
        return redirect()->action('ColaboradorController@listar');
    }

}
