@extends('layouts.app-master')
@section('content')
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }
    </style>
    <div class="container">

      <div class="form-group row">
            <label for="nome_paciente" class="col-sm-2 col-form-label">Nome do Paciente</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $relVInternamento->nome_paciente }}">
            </div>
        </div>

        <br>

        <div class="form-group row">
            <label for="motivo" class="col-sm-2 col-form-label">Motivo</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $relVInternamento->motivo }}">
            </div>
        </div>

        <br>

        <div class="form-group row">
            <label for="idade_paciente" class="col-sm-2 col-form-label">Idade</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $relVInternamento->idade_paciente }}">
            </div>
        </div>

        <br>

        <div class="form-group row">
            <label for="hora" class="col-sm-2 col-form-label">Hora</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $relVInternamento->hora }}">
            </div>
        </div>

        <br>

        <div>
            <a href="{{ route('RelVInternamento.index') }}" class="btn btn-dark">Voltar</a>
        </div>
    </div>
@endsection
