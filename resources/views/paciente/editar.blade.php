@extends('layouts.app-master')
@section('content')
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }

    </style>
    <div class="container">
        <h1>Atualizar Perfil de Paciente</h1>
        <form method="POST" action="{{ route('paciente.atualizar', $paciente->nif) }}">
            @method('patch')
            @csrf

            <div class="form-group">
                <label for="Paciente_NIF" class="form-label">NIF do Paciente</label>
                <input disabled chosen class="form-control" name="paciente_nif" value="{{ $paciente->nif }}">
            </div>

            <div class="form-group">
                <label for="Nome" class="form-label">Nome do Paciente</label>
                <input disabled type="text" name="nome" class="form-control" value="{{ $paciente->nome }}">
                @if ($errors->has('Nome'))
                    <span class="text-danger">{{ $errors->first('Nome') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="Idade" class="form-label">Idade do Paciente</label>
                <input type="text" name="idade" class="form-control" value="{{ $paciente->idade }}">
                @if ($errors->has('Idade'))
                    <span class="text-danger">{{ $errors->first('Idade') }}</span>
                @endif
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="{{ route('paciente.index') }}" class="btn btn-dark">Cancelar</a>
        </form>
    </div>
@endsection
