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
                <input type="text" disabled class="form-control"
                    value="{{ $n_paciente = DB::table('paciente')->where('nif', $marcacao->paciente_nif)->value('nome') }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="Data" class="col-sm-2 col-form-label">Data</label>
            <div class="col-sm-10">
                <input type="text" disabled class="form-control" value="{{ $marcacao->data }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="Responsavel" class="col-sm-2 col-form-label">Responsável</label>
            <div class="col-sm-10">
                <input type="text" disabled class="form-control" value="{{ $n_funcionario = DB::table('funcionario')->where('nif', $marcacao->funcionario_nif)->value('nome') }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="Motivo" class="col-sm-2 col-form-label">Motivo</label>
            <div class="col-sm-10">
                <input type="text" disabled class="form-control" value="{{ $marcacao->motivo }}">
            </div>
        </div>
        <br>
        <div>
            <a href="{{ route('marcacao.index') }}" class="btn btn-dark">Voltar</a>
        </div>
    </div>
@endsection
