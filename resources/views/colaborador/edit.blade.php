@extends('layout')

@section('footer')
    <script type="application/javascript">
        $(function(){
            $("#descricao").val( "{{$c->descricao}}");
            $("#funcao_id").val( "{{$c->funcao_id}}").trigger("change");
        });
    </script>
@stop

@section('conteudo')
    <h1>Editar Colaborador {{$c->nome}}</h1>

    @include('colaborador.form_alert')
    @include('colaborador.form_edit')
@stop