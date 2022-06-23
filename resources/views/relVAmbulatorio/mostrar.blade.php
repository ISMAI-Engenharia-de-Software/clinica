@extends('layouts.app-master')
@section('content')
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }
    </style>
    <div class="container">
        <div class="form-group row">
            <label for="Paciente" class="col-sm-2 col-form-label">Paciente</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control"
                    value="{{ $n_paciente = DB::table('paciente')->where('nif', $RelVenAmbulatorio->paciente_nif)->value('nome') }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="tipo_servico" class="col-sm-2 col-form-label">Tipo de serviço</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $RelVenAmbulatorio->tipo_servico }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="preco" class="col-sm-2 col-form-label">Preço</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $RelVenAmbulatorio->preco }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="anotacoes" class="col-sm-2 col-form-label">Anotações</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $RelVenAmbulatorio->anotacoes }}">
            </div>
        </div>
        <br>
        <div>
            <a href="{{ route('RelVAmbulatorio.index') }}" class="btn btn-dark">Voltar</a>
        </div>
    </div>
@endsection
