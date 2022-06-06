@extends('layouts.app-master')
@section('content')
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }

    </style>
    <div class="container">
        <h1>Atualizar Marcação</h1>
        <form method="POST" action="{{ route('marcacao.atualizar', $marcacao->id) }}">
            @method('patch')
            @csrf

            <div class="form-group">
                <label for="Paciente_NIF" class="form-label">NIF do Paciente</label>
                <input disabled chosen class="form-control" name="paciente_nif" value="{{DB::table('paciente')->where('nif', $marcacao->paciente_nif)->value('nome')}}">
            </div>

            <div class="form-group">
                <label for="Data" class="form-label">Data</label>
                <input required type="date" name="data" class="form-control" value="{{ $marcacao->data }}">
                @if ($errors->has('data'))
                    <span class="text-danger">{{ $errors->first('data') }}</span>
                @endif
            </div>


            <div class="form-group">
                <label for="Funcionario_NIF" class="form-label">NIF do Funcionário</label>
                <input disabled chosen class="form-control" name="funcionario_nif" value="{{DB::table('funcionario')
                ->where('nif', $marcacao->funcionario_nif)
                ->value('nome')}}">
            </div>

            <div class="form-group">
                <label for="Motivo" class="form-label">Motivo</label>
                <input disabled type="text" name="motivo" class="form-control" value="{{ $marcacao->motivo }}">
                @if ($errors->has('Motivo'))
                    <span class="text-danger">{{ $errors->first('Motivo') }}</span>
                @endif
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="{{ route('marcacao.index') }}" class="btn btn-dark">Cancelar</a>
        </form>
    </div>
@endsection
