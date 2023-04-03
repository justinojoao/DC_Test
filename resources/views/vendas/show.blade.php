@extends('layouts.main')

@section('title', $venda->title)

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="info-container" class="col-md-6">
        <h1>Vendedido por : {{ $vendaOwner['name'] }}</h1>
        <p class="venda"> Para o Cliente : {{ $venda->cliente}}</p>
        <p class="venda"> No Valor de : {{ $venda->valor }}</p>
        <p class="venda"> {{$venda->pagamento}}</p>
        <p class="venda"> Em : {{$venda->created_at}}</p>
      </div>
      <div class="col-md-12" id="description-container">
        <h3>Produtos:</h3>
        <p class="venda">{{ $venda->description }}</p>
        <a href="/" class="btn btn-primary" id="event-submit">Voltar</a>
        <a href="#" class="btn btn-primary" id="event-submit">Baixar Nota Em Pdf</a>
      </div>
    </div>
  </div>

@endsection
