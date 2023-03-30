@extends('layouts.main')

@section('title', 'Home')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque suas vendas</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="vendas-container" class="col-md-12">
    @if ($search)
        <h2>Buscando pelas vendas do vendedor : {{$search}}  </h2>
    @else
        <h2>Ultimas Vendas</h2>
        <p class="subtitle">Veja todos as ultimas vendas ou pesquise uma especifica</p>
    @endif
    <div id="cards-container" class="row">
        @foreach($vendas as $venda)
        <div class="card col-md-3">
            <div id="card-body">
                <h5 class="card-vendedor">Vendedor: {{ $venda->vendedor}}</h5>
                <p class="card-clientes">Cliente: {{$venda->cliente}}</p>
                <p class="card-date">Data:{{ date('d/m/y', strtotime($venda->date)) }}</p>
                <a href="/vendas/{{$venda->id}}" class="btn btn-primary">Detalhes da venda</a>
            </div>
        </div>
        @endforeach
       @auth
            @if(count($vendas) == 0 && $search)
            <p>Não foi possivel encontrar nenhuma venda deste vendendor {{$search}}! <a href="/">voltar a home</p>
        @elseif (count($vendas) == 0)
            <p>Não há vendas disponiveis</p>
        @endif
       @endauth
    </div>
</div>
@endsection
