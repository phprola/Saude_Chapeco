@extends('base.app')

@section('conteudo')
    @php
        if (!empty($atendimento->id)) {
            $route = route('atendimento.update', $atendimento->id);
            $data_formatada = DateTime::createFromFormat('d/m/Y', $atendimento->data_atendimento);
        } else {
            $route = route('atendimento.store');
        }
        //$atendimento->data_atendimento = date('d/m/Y', strtotime($atendimento->data_atendimento));

    @endphp
@section('tituloPagina', 'Formulário Atendimento')
<h1>Formulário do Atendimento</h1>

<div class="col">
    <div class="row">
        <form action='{{ $route }}' method="POST" enctype="multipart/form-data">
            @csrf
            @if (!empty($atendimento->id))
                @method('PUT')
            @endif

            <input type="hidden" name="id"
                value="@if (!empty(old('id'))) {{ old('id') }} @elseif(!empty($atendimento->id)) {{ $atendimento->id }} @else {{ '' }} @endif" /><br>
            <div class="col-3">
                <label class="form-label">Data da Atendimento </label><br>
                <input type="date" class="form-control" name="data_atendimento"
                    value=@if (!empty(old('data_atendimento'))) {{old('data_atendimento')}} @elseif(!empty($atendimento->data_atendimento)) {{date_format($data_formatada, 'Y-m-d')}} @else {{ '' }} @endif /><br>
            </div>
            <div class="col-3">
                <label class="form-label">Hora da Atendimento</label><br>
                <input type="time" class="form-control" name="hora_atendimento"
                    value=@if (!empty(old('hora_atendimento'))) {{ old('hora_atendimento') }} @elseif(!empty($atendimento->hora_atendimento)) {{ $atendimento->hora_atendimento }} @else {{ '' }} @endif /><br>
            </div>
            <div class="col-3">
                <label class="form-label">ID do Paciente</label><br>
                <select name="paciente_id" class="form-select">
                    @foreach ($paciente as $item)
                        <option value="{{ $item->id }}">{{ $item->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <label class="form-label">ID do Funcionário</label><br>
                <select name="funcionario_id" class="form-select">
                    @foreach ($funcionario as $item)
                        <option value="{{ $item->id }}">{{ $item->nome }}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-success" type="submit">
                <i class="fa-solid fa-save"></i> Salvar
            </button>
            <a href="{{ route('atendimento.index') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i>
                Voltar</a> <br><br>
        </form>
    </div>
</div>
</div>
@endsection
