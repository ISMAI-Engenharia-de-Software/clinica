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
                    value="{{ $n_paciente = DB::table('paciente')->where('nif', $teste->paciente_nif)->value('nome') }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="Data" class="col-sm-2 col-form-label">Data</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $teste->data }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="TipoTeste" class="col-sm-2 col-form-label">Tipo de Teste</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $teste->tipo_teste }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="Observacoes" class="col-sm-2 col-form-label">Observações</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $teste->observacoes }}">
            </div>
        </div>
        <br>
        <div>
            <a href="{{ route('teste.index') }}" class="btn btn-dark">Voltar</a>
        </div>
    </div>
@endsection
