@extends('base.app')

@section('conteudo')
    @php
        if (!empty($paciente->id)) {
            $route = route('paciente.update', $paciente->id);
        } else {
            $route = route('paciente.store');
        }
    @endphp
@section('tituloPagina', 'Formulário Paciente')
<h1>Formulário para Paciente</h1>

<div class="col">
    <div class="row">
        <form action='{{ $route }}' method="POST" enctype="multipart/form-data">
            @csrf
            @if (!empty($paciente->id))
                @method('PUT')
            @endif

            <input type="hidden" name="id"
                value="@if (!empty(old('id'))) {{ old('id') }} @elseif(!empty($paciente->id)) {{ $paciente->id }} @else {{ '' }} @endif" /><br>
            <div class="col-3">
                <label class="form-label">Nome</label><br>
                <input type="text" class="form-control" name="nome"
                    value="@if (!empty(old('nome'))) {{ old('nome') }} @elseif(!empty($paciente->nome)) {{ $paciente->nome }} @else {{ '' }} @endif" /><br>
            </div>
            <div class="col-3">
                <label class="form-label">Telefone</label><br>
                <input type="tel" class="form-control" name="telefone"
                    value="@if (!empty(old('telefone'))) {{ old('telefone') }} @elseif(!empty($paciente->telefone)) {{ $paciente->telefone }} @else {{ '' }} @endif" /><br>
            </div>
            <div class="col-3">
                <label class="form-label">Email</label><br>
                <input type="tel" class="form-control" name="email"
                    value="@if (!empty(old('email'))) {{ old('email') }} @elseif(!empty($paciente->email)) {{ $paciente->email }} @else {{ '' }} @endif" /><br>
            </div>
            <div class="col-3">
                <label class="form-label">UBS</label><br>
                <input type="UBS" class="form-control" name="UBS"
                    value="@if (!empty(old('UBS'))) {{ old('UBS') }} @elseif(!empty($paciente->UBS)) {{ $paciente->UBS }} @else {{ '' }} @endif" /><br>
            </div>
            <button class="btn btn-success" type="submit">
                <i class="fa-solid fa-save"></i> Salvar
            </button>
            <a href="{{ route('paciente.index') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>
                Voltar</a> <br><br>
        </form>
    </div>
</div>
</div>
@endsection
