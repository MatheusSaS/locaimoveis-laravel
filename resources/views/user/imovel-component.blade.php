@extends('layouts.base')

@section('conteudo')
<style>
    .table-fill {
  background: white;
  border-radius: 3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 2100px;
  padding: 5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
</style>

<section class="py-10 text-center container">
    <div class="py-5 text-center">
        <h2>Meus Imóveis</h2>
    </div>
    <div class="col-lg-6 mx-auto">
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <a href="{{route('meus_imoveis.create')}}" class="btn button btn-lg px-4 gap-3">Criar Imovel para locação</a>
        </div>
    </div>
</section>

<div class="container">
    <div class="row mb-5">
        <div class="col-md-12 text-center table-responsive ">
            <table class="table-fill responsive">
                <thead>
                    <tr>
                        <th class="text-left">#</th>
                        <th class="text-left">Imagem</th>
                        <th class="text-left">Cidade</th>
                        <th class="text-left">Bairro</th>
                        <th class="text-left">Dormitorios</th>
                        <th class="text-left">Vagas Garagem</th>
                        <th class="text-left">Valor</th>
                        <th class="text-left">Ações</th>
                    </tr>
                </thead>
                <tbody class="table-hover">
                    @foreach($imoveis as $imovel)
                    <tr>
                        <td class="text-center">{{$imovel->id}}</td>
                        <td class="text-center"><img class="rounded " style="height: 100px; width: 100px;" src="{{ asset("assets/img/imoveis/{$imovel->image}") }}"/></td>
                        <td class="text-center">{{$imovel->cidade}}</td>
                        <td class="text-center">{{$imovel->bairro}}</td>
                        <td class="text-center">{{$imovel->dormitorios}}</td>
                        <td class="text-center">{{$imovel->vagas_garagem}}</td>
                        <td class="text-center">{{$imovel->valor}}</td>
                        <td class="text-center">
                            <form action="{{route('meus_imoveis.destroy',$imovel->id)}}" method="POST">
                                <a href="/meus_imoveis/{{$imovel->id}}/edit" class="btn btn-info mt-1">Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mt-1">Excluir</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection