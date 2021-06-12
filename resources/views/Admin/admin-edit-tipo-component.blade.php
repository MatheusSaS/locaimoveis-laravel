@extends('layouts.base')

@section('conteudo')
<section class="py-10 text-center container"></section>
<div class="container" style="padding: 30px 0; width: 750px;">
    <div class="card mb-3 shadow">
        <div class="card-top">
        <h3 class="text-center p-2">Cadastrar Tipo</h3>
        </div>        
        <div class="card-body">
            <form action="/admin/tipo/{{$tipo->id}}" method="POST">
            @csrf
            @method('PUT')
                <div class="form-group mb-2">
                     <input type="text"  class="form-control" name="id" value="{{$tipo->id}}" hidden>
                    <label for="name" class="form-label">Nome</label>
                    <input type="text"  class="form-control" name="name" value="{{$tipo->name}}">
                </div>
                <button type="Submit"  class="btn button">Salvar</button>   
            </form>
            
           
        </div>
    </div>
</div>
@endsection