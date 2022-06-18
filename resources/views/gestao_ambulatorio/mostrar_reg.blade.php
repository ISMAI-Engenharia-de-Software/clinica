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
                    value="{{ $n_paciente = DB::table('paciente')->where('nif', $gestao_ambulatorio->paciente_nif)->value('nome') }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="data" class="col-sm-2 col-form-label">Data</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $gestao_ambulatorio->data }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="procedimento" class="col-sm-2 col-form-label">Procedimento</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $gestao_ambulatorio->procedimento }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="estado" class="col-sm-2 col-form-label">Estado</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $gestao_ambulatorio->estado }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="gastos" class="col-sm-2 col-form-label">Gastos</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $gestao_ambulatorio->gastos }}">
            </div>
        </div>
        <div>
            <a href="{{ route('gestao_ambulatorio.index') }}" class="btn btn-dark">Voltar</a>
        </div>
    </div>
@endsection
