@extends('layout')
@section('title', 'Quem Sou - Colaboradores')
@section('conteudo')
    <h1>Detalhes do Colaborador {{$c->nome}}</h1>

    <ul>
        <li>Nome: {{$c->nome}}</li>
        <li>Função: {{$c->funcao->nome}}</li>
        <li>E-mail: {{$c->email ?: 'não cadastrado'}}</li>
        <li>Descrição: {{$c->descricao}}</li>
    </ul>
@stop