<?php namespace App\Http\Controllers\Api;

use App\Colaborador;
use App\Http\Controllers\Controller;

class ColaboradorController extends Controller {

    public function index()
    {
        $colaborador = Colaborador::all();
        return response()->json($colaborador);
    }

    public function create()
    {
        //
    }


    public function store()
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update($id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

}
