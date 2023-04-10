@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Minhas Vendas</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-vendas-container">
    @if(count($vendas) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col"> Vendedor</th>
                    <th scope="col"> Cliente</th>
                    <th scope="col"> Description</th>
                    <th scope="col"> Valor</th>
                    <th scope="col"> Pagamento</th>
                    <th scope="col"> Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vendas as $venda)
                    <tr>
                        <td scropt="row"><a href="vendas/{{ $venda->id}}">{{ $loop->index + 1}}</td>
                        <td>{{ $venda->vendedor}}</a></td>
                        <td>{{$venda->cliente}}</td>
                        <td>{{$venda->description}}</td>
                        <td>{{$venda->valor}}</td>
                        <td>{{$venda->pagamento}}</td>
                        <td>
                            <a href="#" class="btn"> Editar</a>
                            <form action="/vendas/{{$venda->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn"> Deletar</button>
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    @else
    <p>Você ainda não tem Vendas, <a href="/vendas/create">criar Vendas</a></p>
    @endif
</div>

@endsection
