@extends('layouts.main')

@section('title', 'Venda')

@section('content')

    <div id="venda-create-container" class="col-md-6 offset-md-4">
        <h1>Finalização de pedidos</h1>
        <form action="/vendas" method="post">
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
                <label for="title">description:</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Produtos">
            </div>
            <div class="form-group">
                <label for="title">Valor :</label>
                <input type="text" class="form-control" id="valor" name="valor" placeholder="Vendedor">
            </div>
            <div class="form-group">
            <label for="title">Forma de Pagamento </label>
            <select name="parcelas" id="parcelas"class="form-control">
                <option value="1">A Vista</option>
                <option value="2">2 Vezes</option>
                <option value="3">3 Vezes</option>
                <option value="4">4 Vezes</option>
                <option value="5">5 Vezes</option>
                <option value="6">6 Vezes</option>
                <option value="7">7 Vezes</option>
                <option value="8">8 Vezes</option>
                <option value="9">9 Vezes</option>
                <option value="10">10 Vezes</option>
                <option value="11">11 Vezes</option>
                <option value="12">12 Vezes</option>
            </select>
            </div>
            <a href="/" class="btn btn-primary" id="event-submit">Cancelar</a>
            <input type="submit" class="btn btn-primary" name="enviar" value="Gerar Parcelas">
        </form>
        </div>
    </div>

@endsection
