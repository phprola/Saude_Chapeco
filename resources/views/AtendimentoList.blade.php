@extends('base.app')

@section('conteudo')
@section('tituloPagina', 'Listagem de Atendimento')
<h1>Listagem de Atendimento</h1>
<form action="{{ route('atendimento.search') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-2">
            <select name="campo" class="form-select">
                <option value="data">data da atendimento</option>
                <option value="hora">hora da atendimento</option>
                <option value="paciente_nome">Nome do Paciente</option>
                <option value="paciente_email">Email do Paciente</option>
            </select>
        </div>
        <div class="col-4">
            <input type="text" class="form-control" placeholder="Pesquisar" name="valor" />
        </div>
        <div class="col-6">
            <button class="btn btn-primary" type="submit">
                <i class="fa-solid fa-magnifying-glass"></i> Buscar
            </button>
            <a class="btn btn-success" href="{{ action('App\Http\Controllers\AtendimentoController@create') }}"><i
                    class="fa-solid fa-plus"></i> Cadastrar</a>
        </div>
    </div>
</form>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Data da atendimento</th>
            <th scope="col">Hora da atendimento</th>
            <th scope="col">Nome do Paciente</th>
            <th scope="col">Email do Paciente</th>
            <th scope="col">ID do Funcionario</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Atendimento as $item)
            <tr>
                <td scope='row'>{{ $item->id }}</td>
                <td>{{ $item->data }}</td>
                <td>{{ $item->hora }}</td>
                <td>{{ $item->paciente_nome }}</td>
                <td>{{ $item->paciente_email }}</td>
                <td>{{ $item->funcionario->nome }}</td>
                <td><a href="{{ action('App\Http\Controllers\AtendimentoController@edit', $item->id) }}"><i
                            class='fa-solid fa-pen-to-square' style='color:orange;'></i></a></td>
                <td>
                    <form method="POST" action="{{ action('App\Http\Controllers\AtendimentoController@destroy', $item->id) }}">
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
