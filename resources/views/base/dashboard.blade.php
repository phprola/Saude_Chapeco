@extends('base.app')
@section('conteudo')
@section('tituloPagina', 'Princípal')
<div class="col" style="padding: 5%">
    <div class="row">
        <div class="col-sm-12 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body" style="text-align: center;">
                    <h5 class="card-title">Consultar Farmácia</h5>
                    <p class="card-text">Verifique os medicamentos que estão disponíveis.</p>
                    <a href="{{ url('/farmacia') }}" class="btn btn-primary">Entrar</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
