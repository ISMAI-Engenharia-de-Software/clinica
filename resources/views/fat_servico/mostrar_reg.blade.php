@extends('layouts.app-master')
@section('content')
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }
    </style>
    <div class="container">
        <div class="form-group row">
            <label for="paciente" class="col-sm-2 col-form-label">Paciente</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control"
                    value="{{ $n_paciente = DB::table('paciente')->where('nif', $fat_servico->paciente_nif)->value('nome') }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="data" class="col-sm-2 col-form-label">Data</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $fat_servico->data }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="valor" class="col-sm-2 col-form-label">Valor</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $fat_servico->valor }}">
            </div>
        </div>
        <br>
        <div>
            <a href="{{ route('fat_servico.index') }}" class="btn btn-dark">Voltar</a>
        </div>
    </div>
@endsection
