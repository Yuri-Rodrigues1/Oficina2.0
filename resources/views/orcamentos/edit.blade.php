@extends('layouts.app')

@section('title','Listagem')

@section('content')
  <div class="container">
    <h1>Editar orçamentos</h1>
    <hr>

    <form action="{{ route('orcamentos-update',['id'=>$orcamentos->id]) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">

        <div class="form-group">
          <label for="nome">cliente: </label>
          <input type="text" class="form-control" name="cliente" value="{{ $orcamentos->cliente }}" placeholder="Digite um cliente...">
        </div>


        <div class="form-group">
          <label for="nome">Vendedor: </label>
          <input type="text" class="form-control" name="vendedor" value="{{ $orcamentos->vendedor }}"  placeholder="Digite o vendedor...">
        </div>

        <div class="form-group">
          <label for="nome">Descrição: </label>
          <input type="text" class="form-control" name="descricao" value="{{ $orcamentos->descricao }}"  placeholder="Digite a descrição...">
        </div>

        <div class="form-group">
          <label for="nome">Valor: </label>
          <input type="number" class="form-control" name="valor" value="{{ $orcamentos->valor }}"  placeholder="Digite o valor...">
        </div>

        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary mt-3" value="Atualizar">
        </div>

      </div>
    </form>

  
  </div>
@endsection