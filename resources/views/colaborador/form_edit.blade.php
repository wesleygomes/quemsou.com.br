<form name="frm" id="frm" method="post" action="/colaboradores/edit/{{$c->id}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="hidden" name="id" value="{{$c->id}}">

    <div class="form-group">
        <label for="nome">Nome: *</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{$c->nome}}" >
    </div>
    <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" class="form-control" id="email" name="email" value="{{$c->email}}" >
    </div>
    <div class="form-group">
        <label for="funcao_id">Função: *</label>
        <select id="funcao_id" name="funcao_id" class="form-control">
            @foreach($funcoes as $c)
                <option value="{{$c->id}}">{{$c->nome}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="descricao">Descrição: *</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="7"></textarea>
    </div>

    <button type="submit" class="btn btn-default">Salvar</button>
</form>