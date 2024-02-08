@extends('layouts.app')

@section('title','Listagem')

@section('content')
  <div class="container">
    <h1>Crie um novo orçamento</h1>
    <hr>

    <form action="{{ route('orcamentos-store') }}" method="POST">
      @csrf
      <div class="form-group">

        <div class="form-group">
          <label for="nome">Cliente: </label>
          <input type="text" class="form-control" name="cliente"  placeholder="Digite um cliente...">
        </div>

        <div class="form-group">
          <label for="nome">Data: </label>
          <input type="datetime-local" class="form-control" name="data"  placeholder="Digite uma data...">
        </div>

        <div class="form-group">
          <label for="nome">Vendedor: </label>
          <input type="text" class="form-control" name="vendedor"  placeholder="Digite o vendedor...">
        </div>

        <div class="form-group">
          <label for="nome">Descrição: </label>
          <input type="text" class="form-control" name="descricao"  placeholder="Digite o a descrição...">
        </div>

        <div class="form-group">
          <label for="nome">Valor: </label>
          <input type="number" class="form-control" name="valor"  placeholder="Digite o valor...">
        </div>

        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary mt-3">
        </div>

      </div>
    </form>

  
  </div>
@endsection