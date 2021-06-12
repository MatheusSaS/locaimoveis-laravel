@extends('layouts.base')

@section('conteudo')
<style>
   .table-fill {
  background: white;
  border-radius: 3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 1100px;
  padding: 5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
</style>
<section class="py-10 text-center container"></section>

<div class="row">
    <div class="col-md-12 text-center">
        <div class="table-title ">
            <h3>Tipos de Imoveis</h3>
            <a href="{{route('tipo.create')}}" class="btn button "> Criar</a>
        </div>
        <table class="table-fill">
            <thead>
                <tr>
                    <th class="text-left">#</th>
                    <th class="text-left">Nome</th>
                    <th class="text-left">Ações</th>
                </tr>
            </thead>
            <tbody class="table-hover">
                @foreach ($tipos as $tipo)
                <tr>
                    <td class="text-center">{{$tipo->id}}</td>
                    <td class="text-left">{{$tipo->name}}</td>
                    <td class="text-center">
                        <form action="{{route('tipo.destroy',$tipo->id)}}" method="POST">
                            <a href="/admin/tipo/{{$tipo->id}}/edit" class="btn btn-info">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection