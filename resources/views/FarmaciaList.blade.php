@extends('base.app')

@section('conteudo')
@section('tituloPagina', 'Listagem de Usuários')
<h1>Listagem de Medicamentos da Farmácia</h1>
<form action="{{ route('farmacia.search') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-2">
            <select name="campo" class="form-select">
                <option value="codigo">Código</option>
                <option value="medicamento">Nome do Medicamento</option>
                <option value="quantidade">Quantidade</option>
                <option value="valor">Valor(R$)</option>
            </select>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" placeholder="Pesquisar" name="valor" />
        </div>
        <div class="col-6">
            <button class="btn btn-primary" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i> Buscar
            </button>
            <a class="btn btn-success" href="{{ action('App\Http\Controllers\FarmaciaController@create') }}"><i
                    class="fa-solid fa-plus"></i> Cadastrar</a>
                <a class="btn btn-info" href="{{ action('App\Http\Controllers\PDFController@gerarFarmaciaPDF') }}"><i
                    class="fa-solid fa-print"></i> Baixar PDF</a>
        </div>
    </div>
</form>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Código</th>
            <th scope="col">Medicamento</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Valor(R$)</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($farmacias as $item)
            <tr>
                <td scope='row'>{{ $item->id }}</td>
                <td>{{ $item->codigo }}</td>
                <td>{{ $item->medicamento }}</td>
                <td>{{ $item->quantidade }}</td>
                <td>{{ $item->valor }}</td>
                <td><a href="{{ action('App\Http\Controllers\FarmaciaController@edit', $item->id) }}"><i
                            class='fa-solid fa-pen-to-square' style='color:orange;'></i></a></td>
                <td>
                    <form method="POST" action="{{ action('App\Http\Controllers\FarmaciaController@destroy', $item->id) }}">
                        <input type="hidden" name="_method" value="DELETE">
                        @csrf
                        <button type="submit" onclick='return confirm("Deseja Excluir?")' style='all: unset; cursor:pointer;'><i
                                class='fa-solid fa-trash' style='color:red;'></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
