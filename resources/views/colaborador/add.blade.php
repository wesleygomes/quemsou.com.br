@extends('layout')

@section('footer')
    <script type="application/javascript">
        $(function(){
            $("#descricao").val( "{{ old('descricao') }}");
            $("#funcao_id").val( "{{ old('funcao_id') }}");
        });
    </script>
@stop

@section('conteudo')
    <h1>Novo Colaborador</h1>

    @include('colaborador.form_alert')
    @include('colaborador.form_add')

@stop