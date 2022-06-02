@extends('layouts.app-master')
@section('content')
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }
    </style>
    <div class="container">
        <div class="form-group row">
            <label for="nif" class="col-sm-2 col-form-label">NIF</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $funcionario->nif }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="idade" class="col-sm-2 col-form-label">Idade</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $funcionario->idade }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $funcionario->email }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="telemovel" class="col-sm-2 col-form-label">Telemóvel</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $funcionario->telemovel }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="especializacao" class="col-sm-2 col-form-label">Especialização</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $funcionario->especializacao }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="departamento_id" class="col-sm-2 col-form-label">Departamento</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $funcionario->departamento_id }}">
            </div>
        </div>
        <br>
        <div>
            <a href="{{ route('funcionario.index') }}" class="btn btn-dark">Voltar</a>
        </div>
    </div>
@endsection
