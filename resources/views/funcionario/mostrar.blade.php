@extends('layouts.app-master')
@section('content')
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }
    </style>
    <div class="container">
        <div class="form-group row">
            <label for="Nif" class="col-sm-2 col-form-label">NIF</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $funcionario->nif }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="Nome" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $funcionario->nome }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="Idade" class="col-sm-2 col-form-label">Idade</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $funcionario->idade }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="Email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $funcionario->email }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="Telemovel" class="col-sm-2 col-form-label">Telemóvel</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $funcionario->telemovel }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="Especializacao" class="col-sm-2 col-form-label">Especialização</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $funcionario->especializacao }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="Departamento" class="col-sm-2 col-form-label">Departamento</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control"
                    value="{{ $n_departamento_id = DB::table('departamento')->where('id', $funcionario->departamento_id)->value('area_departamento') }}">
            </div>
        </div>
        <br>
        <div>
            <a href="{{ route('funcionario.index') }}" class="btn btn-dark">Voltar</a>
        </div>
    </div>
@endsection
