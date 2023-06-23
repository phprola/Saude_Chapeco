@extends('base.app')

@section('conteudo')
    @php
        if (!empty($farmacia->id)) {
            $route = route('farmacia.update', $farmacia->id);
        } else {
            $route = route('farmacia.store');
        }
    @endphp
@section('tituloPagina', 'Formulário Usuário')
<h1>Formulário para Cadastro de Medicamentos da Farmácia</h1>

<div class="col">
    <div class="row">
        <form action='{{ $route }}' method="POST" enctype="multipart/form-data">
            @csrf
            @if (!empty($farmacia->id))
                @method('PUT')
            @endif

            <input type="hidden" name="id"
                value="@if (!empty(old('id'))) {{ old('id') }} @elseif(!empty($farmacia->id)) {{ $farmacia->id }} @else {{ '' }} @endif" /><br>
            <div class="col-3">
                <label class="form-label">Código</label><br>
                <input type="number" class="form-control" name="codigo"
                    value=@if (!empty(old('codigo'))) {{ old('codigo') }} @elseif(!empty($farmacia->codigo)) {{ $farmacia->codigo }} @else {{ '' }} @endif /><br>
            </div>
            <div class="col-3">
                <label class="form-label">Medicamento</label><br>
                <input type="text" class="form-control" name="medicamento"
                    value="@if (!empty(old('medicamento'))) {{ old('medicamento') }} @elseif(!empty($farmacia->medicamento)) {{ $farmacia->medicamento }} @else {{ '' }} @endif" /><br>
            </div>
            <div class="col-3">
                <label class="form-label">Quantidade</label><br>
                <input type="number" class="form-control" name="quantidade"
                    value=@if (!empty(old('quantidade'))) {{ old('quantidade') }} @elseif(!empty($farmacia->quantidade)) {{ $farmacia->quantidade }} @else {{ '' }} @endif /><br>
            </div>
            <div class="col-3">
                <label class="form-label">Valor(R$)</label><br>
                <input type="text" class="form-control" name="valor"
                    value="@if (!empty(old('valor'))) {{ old('valor') }} @elseif(!empty($farmacia->valor)) {{ $farmacia->valor }} @else {{ '' }} @endif" /><br>
            </div>
            <button class="btn btn-success" type="submit">
                <i class="fa-solid fa-save"></i> Salvar
            </button>
            <a href="{{ route('farmacia.index') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>
                Voltar</a> <br><br>
        </form>
    </div>
</div>
</div>
@endsection
