@extends('layouts.base')

@section('conteudo')
<section class="py-10 text-center container"></section>
<div class="container" style="padding: 30px 0;">
    <div class="card mb-3 shadow">
        <div class="card-top">
            <h3 class="text-center p-2">Cadastrar Imovel</h3>
        </div>
        <div class="card-body">
            <form action="/meus_imoveis/{{$imovel->id}}" class="row g-3" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-6 mb-2">
                    <label for="estado" class="form-label">Estado</label>
                    <select id="estado" name="estado" class="form-select">
                        @foreach($estados as $estado)
                        <option value="{{$estado->sigla}}" selected>{{$estado->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-2">
                    <label for="cidade" class="form-label">Cidade</label>
                    <select id="cidade" name="cidade" class="form-select">
                        @foreach($municipios as $municipio)
                        <option value="{{$municipio->nome}}" selected>{{$municipio->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="bairro" class="form-label">Bairro</label>
                    <input type="text" class="form-control" id="bairro" name="bairro" value="{{$imovel->bairro}}" required>
                </div>
                <div class="col-md-6">
                    <label for="cep" class="form-label">CEP</label>
                    <input type="text" class="form-control" id="cep" name="cep" value="{{$imovel->CEP}}" maxlength="8" onkeypress="return onlynumber();" required>
                </div>
                <div class="col-md-3">
                    <label for="dormitorios" class="form-label">Dormitorios</label>
                    <input type="text" class="form-control" id="dormitorios" name="dormitorios" value="{{$imovel->dormitorios}}" onkeypress="return onlynumber();" required>
                </div>
                <div class="col-md-3">
                    <label for="suites" class="form-label">Suites</label>
                    <input type="text" class="form-control" id="suites" name="suites" value="{{$imovel->suites}}" onkeypress="return onlynumber();" required>
                </div>
                <div class="col-md-3">
                    <label for="vagas" class="form-label">Vagas na garagem</label>
                    <input type="text" class="form-control" id="vagas" name="vagas" value="{{$imovel->vagas_garagem}}" onkeypress="return onlynumber();" required>
                </div>
                <div class="col-md-3">
                    <label for="area" class="form-label">Area Util</label>
                    <input type="text" class="form-control" id="area" name="area" value="{{$imovel->area_util}}" onkeypress="return onlynumber();" required>
                </div>
                <div class="col-md-6 mb-2">
                    <label for="tipo" class="form-label">Tipo</label>
                    <select id="tipo" name="tipo" class="form-select">
                        @foreach($tipos as $tipo)
                        <option value="{{$tipo->id}}" selected>{{$tipo->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-2">
                    <label for="operacao" class="form-label">Operação</label>
                    <select id="operacao" name="operacao" class="form-select">
                        <option value="venda" selected>Venda</option>
                        <option value="locacao" selected>Locação</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="descricao">Descrição</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="3"  required>{{$imovel->descricao}}</textarea>
                </div>
                <div class="col-md-12">
                    <h3 class="text-center ">Custo do imovel</h3>
                </div>
                <div class="col-md-4">
                    <label for="valor" class="form-label">Valor</label>
                    <div class="input-group ">
                        <div class="input-group-prepend">
                            <span class="input-group-text">R$</span>
                        </div>
                        <input type="number" name="valor" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{$imovel->valor}}" required>
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="iptu" class="form-label">IPTU</label>
                    <div class="input-group ">
                        <div class="input-group-prepend">
                            <span class="input-group-text">R$</span>
                        </div>
                        <input type="number" name="iptu" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{$imovel->IPTU}}" required>
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="condominio" class="form-label">Condominio</label>
                    <div class="input-group ">
                        <div class="input-group-prepend">
                            <span class="input-group-text">R$</span>
                        </div>
                        <input type="number" name="condominio" class="form-control" aria-label="Amount (to the nearest dollar)" value="{{$imovel->condominio}}">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="imagem" class="form-label">Imagem</label>
                    <input  class="form-control" type="file" id="imagem" name="imagem" required>
                </div>
                <button type="Submit" class="btn button col-md-6 ">Salvar</button>
                <a href="/" class="btn btn-danger col-md-6">Cancelar</a>
            </form>

        </div>
    </div>
</div>
<script>
    function onlynumber(evt) {
        
        var theEvent = evt || window.event;
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
        //var regex = /^[0-9.,]+$/;
        var regex = /^[0-9.]+$/;
        if (!regex.test(key)) {
            theEvent.returnValue = false;
            if (theEvent.preventDefault) theEvent.preventDefault();
        }
    }
</script>
@endsection