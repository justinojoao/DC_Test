@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Minhas Vendas</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-vendas-container">
    @if($vendas)
    <table class="table">
        <thead>
            <tr>
                <th scope="col"> Vendedor</th>
                <th scope="col"> Cliente</th>
                <th scope="col"> Description</th>
                <th scope="col"> Valor</th>
                <th scope="col"> parcelas</th>
            </tr>
        </thead>
    </table>
    <tbody>
        @foreach ($vendas as $venda)
            <tr>
                <td scropt="row">{{ $loop->index + 1}}</td>
                <td><a href="vendas/{{ $venda->id}}">{{ $vendas->vendedor}}</a></td>
                <td>0</td>
                <td><a href="#">Editar</a><a href="#">Deletar</a></td>
            </tr>

        @endforeach
    </tbody>
    @else
    <p>Você ainda não tem Vendas, <a href="/vendas/create">criar Vendas</a></p>
    @endif
</div>

@endsection
