@extends('layouts.app-master')
@section('content')
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }

    </style>
    <div class="container">
        <h1>Atualizar Funcionario</h1>
        <form method="POST" action="{{ route('funcionario.atualizar', $funcionario->nif) }}">
            @method('patch')
            @csrf

            <div class="form-group">
                <label for="nif" class="form-label">NIF</label>
                <input disabled chosen class="form-control" name="nif" value="{{ $funcionario->nif }}">
            </div>
            <div class="form-group">
                <label for="nome" class="form-label">Nome</label>
                <input required type="text" name="nome" class="form-control" value="{{ $funcionario->nome }}">
                @if ($errors->has('nome'))
                    <span class="text-danger">{{ $errors->first('nome') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="idade" class="form-label">Idade</label>
                <input disabled chosen class="form-control" name="idade" value="{{ $funcionario->idade }}">
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input required type="email" name="email" class="form-control" value="{{ $funcionario->email }}">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="telemovel" class="form-label">Telemóvel</label>
                <input required type="tel" name="telemovel" class="form-control" value="{{ $funcionario->telemovel }}">
                @if ($errors->has('telemovel'))
                    <span class="text-danger">{{ $errors->first('telemovel') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="especializacao" class="form-label">Especialização</label>
                <input required type="text" name="especializacao" class="form-control" value="{{ $funcionario->especializacao }}">
                @if ($errors->has('especializacao'))
                    <span class="text-danger">{{ $errors->first('especializacao') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="Departamento_id" class="form-label">Numero do Departamento</label>
                <input disabled chosen class="form-control" name="departamento_id" value="{{ $funcionario->departamento_id }}">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="{{ route('funcionario.index') }}" class="btn btn-dark">Cancelar</a>
        </form>
    </div>
@endsection
