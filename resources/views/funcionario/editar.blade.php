@extends('layouts.app-master')
@section('content')
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }

    </style>
    <div class="container">
        <h1>Atualizar Funcionario</h1>
        <form method="POST" action="{{ route('funcionario.atualizar', $funcionario->id) }}">
            @method('patch')
            @csrf

            <div class="form-group">
                <label for="Nif" class="form-label">NIF</label>
                <input disabled chosen class="form-control" name="funcionario_nif" value="{{ $funcionario->nif }}">
            </div>
            <div class="form-group">
                <label for="Nome" class="form-label">Nome</label>
                <input required type="text" name="nome_funcionario" class="form-control" value="{{ $funcionario->nome }}">
                @if ($errors->has('Nome'))
                    <span class="text-danger">{{ $errors->first('Nome') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="Idade" class="form-label">Idade</label>
                <input disabled chosen class="form-control" name="funcionario_idade" value="{{ $funcionario->idade }}">
            </div>
            <div class="form-group">
                <label for="Email" class="form-label">Email</label>
                <input required type="email" name="email_funcionario" class="form-control" value="{{ $funcionario->email }}">
                @if ($errors->has('Email'))
                    <span class="text-danger">{{ $errors->first('Email') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="Telemovel" class="form-label">Telemóvel</label>
                <input required type="tel" name="telemovel_funcionario" class="form-control" value="{{ $funcionario->telemovel }}">
                @if ($errors->has('Telemovel'))
                    <span class="text-danger">{{ $errors->first('Telemovel') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="Especializacao" class="form-label">Especialização</label>
                <input required type="text" name="especializacao_funcionario" class="form-control" value="{{ $funcionario->especializacao }}">
                @if ($errors->has('Especializacao'))
                    <span class="text-danger">{{ $errors->first('Especializacao') }}</span>
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
