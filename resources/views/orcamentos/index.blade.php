@extends('layouts.app')

@section('title','Oficina')

@section('content')
    <div class="container mt-5">
    <div class="row">
        <div class="col-sm-10">
            <h1>Orçamentos</h1>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('orcamentos-create')}}" class="btn btn-success">Novo orcamento</a>
        </div>
        <div class="row">
        <div class="col-md-12" style="margin-top: 2em;">
            <form action="{{ route('orcamentos-search') }}" method="GET" class="form-inline">
                <div class="form-group" style="display: inline-block">
                    <label for="data_inicio" class="mr-2">Data:</label>
                    <input type="date" name="data_inicio" id="data_inicio" class="form-control mr-2">
                </div>
                <div class="form-group" style="display: inline-block">
                    <label for="cliente" class="mr-2">Cliente:</label>
                    <input type="text" name="cliente" id="cliente" class="form-control mr-2">
                </div>
                <div class="form-group" style="display: inline-block">
                    <label for="vendedor" class="mr-2">Vendedor:</label>
                    <input type="text" name="vendedor" id="vendedor" class="form-control mr-2">
                </div>
                <button type="submit" class="btn btn-primary" style="margin-left: 17em;">Pesquisar</button>
                <a href="{{ route('orcamentos-index') }}" class="btn btn-secondary">Resetar Filtros</a>
            </form>
        </div>
    </div>
    </div>    
        <table class="table mt-4">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Cliente</th>
            <th scope="col">Data</th>
            <th scope="col">Vendedor</th>
            <th scope="col">Descrição</th>
            <th scope="col">Valor</th>
            <th scope="col">...</th>
            </tr>
        </thead>
        <tbody>
        @foreach($orcamentos as $orcamento) 
            <tr>
                <th>{{ $orcamento->id }}</th>
                <th>{{ $orcamento->cliente }}</th>
                <th>{{ $orcamento->data }}</th>
                <th>{{ $orcamento->vendedor }}</th>
                <th>{{ $orcamento->descricao }}</th>
                <th>{{ $orcamento->valor }}</th>
                <th class="d-flex">
                   <a href="{{ route('orcamentos-edit', ['id'=>$orcamento->id]) }}"class="btn btn-primary">Editar</a>
                    <form action="{{ route('orcamentos-destroy', ['id'=>$orcamento->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </th>
            </tr>
        @endforeach    
        </tbody>
        </table>
    </div>
@endsection