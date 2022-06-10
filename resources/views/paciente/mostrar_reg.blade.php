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
                    value="{{ $paciente->nif }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="Nome" class="col-sm-2 col-form-label">Nome do Paciente</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $paciente->nome }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="Idade" class="col-sm-2 col-form-label">Idade</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $paciente->idade }}">
            </div>
        </div>
        <br>
        <div>
            <a href="{{ route('paciente.index') }}" class="btn btn-dark">Voltar</a>
        </div>
    </div>
@endsection
