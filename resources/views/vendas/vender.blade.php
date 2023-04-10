@extends('layouts.main')

@section('title', 'Venda')

@section('content')

    <div id="venda-create-container" class="col-md-6 offset-md-4" >
        <h1>Finalização de pedidos</h1>
        <form action="/vendas" method="POST" >
            @csrf
            <div class="form-group">
                <label for="date">Data da Venda:</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="form-group">
                <label for="title">Vendedor:</label>
                <input type="text" class="form-control" id="vendedor" name="vendedor" placeholder="Vendedor">
            </div>
            <div class="form-group">
            <label for="title">Cliente:</label>
            <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Cliente">
            </div>
            <div class="form-group">
                <label for="title">Produtos:</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Produtos">
            </div>
            <div class="form-group">
                <label for="title">Valor :</label>
                <input type="number" class="form-control" id="valor" name="valor" placeholder="Valor">
            </div>
            <div class="form-group">
            <label for="title">Forma de Pagamento </label>
            <select  name="pagamento" id="parcelas"class="form-control" onchange="myFunction()" >
                <option value="avista">A Vista</option>
                <option value="cartao">Cartão de crédito</option>
            </select>
            <div id="parcDados" style="display: none">
                <label for="title">Quantidade de Parcelas</label>
                <select name="parcelas[]" type="number" onchange="funcionar(this.value)" class="form-control">
                <option value="1">Uma Vez</option>
                <option value="1,2">2 Vezes</option>
                <option value="1,2,3">3 Vezes</option>
                <option value="1,2,3,4">4 Vezes</option>
                <option value="1,2,3,4,5">5 Vezes</option>
            </select>
            <div id="parcelasList"></div>
            </div>

            </div>

            <a href="/"class="btn btn-primary" id="event-submit">Cancelar</a>

            <input type="submit" class="btn btn-primary" name="enviar" value="Finalizar venda">
        </form>


        </div>
    </div>

@endsection
