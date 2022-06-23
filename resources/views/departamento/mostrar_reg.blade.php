@extends('layouts.app-master')
@section('content')
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }
    </style>
    <div class="container">
        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $departamento->nome }}">
            </div>
        </div>

    <br>

    <div class="form-group row">
        <label for="areadepartamento" class="col-sm-2 col-form-label">areadepartamento</label>
        <div class="col-sm-10">
            <input required type="text" disabled class="form-control" value="{{ $departamento->areadepartamento }}">
        </div>
    </div>

    <br>

    <div class="form-group row">
        <label for="numtrabalhadores" class="col-sm-2 col-form-label">Numero de Trabalhadores</label>
        <div class="col-sm-10">
            <input required type="text" disabled class="form-control" value="{{ $departamento->numtrabalhadores }}">
        </div>
    </div>

    <br>

    <div class="form-group row">
        <label for="reponsavel" class="col-sm-2 col-form-label">Reponsavel</label>
        <div class="col-sm-10">
            <input required type="text" disabled class="form-control" value="{{ $departamento->reponsavel }}">
        </div>
    </div>

    <br>

    <div>
        <a href="{{ route('departamento.index') }}" class="btn btn-dark">Voltar</a>
    </div>
    </div>
@endsection
