<form name="frm" id="frm" method="post" action="/colaboradores/add">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="form-group">
        <label for="nome">Nome: *</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}" placeholder="Primeiro Nome">
    </div>
    <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="E-mail">
    </div>
    <div class="form-group">
        <label for="funcao_id">Função: *</label>
        <select name="funcao_id" id="funcao_id" class="form-control">
            <option value="">Selecione</option>
            @foreach($funcoes as $c)
                <option value="{{$c->id}}">{{$c->nome}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="descricao">Descrição: *</label>
        <textarea class="form-control" id="descricao" name="descricao" placeholder="Descrição sobre o colaborador" rows="7"></textarea>
    </div>

    <button type="submit" class="btn btn-default">Cadastrar</button>
</form>