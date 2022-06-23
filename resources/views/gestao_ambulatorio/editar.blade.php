@extends('layouts.app-master')
@section('content')
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }

    </style>
    <div class="container">
        <h1>Atualizar Paciente Ambulatorio</h1>
        <form method="POST" action="{{ route('gestao_ambulatorio.atualizar', $gestao_ambulatorio->id) }}">
            @method('patch')
            @csrf

            <div class="form-group">
                <label for="Ambulatorio_id" class="form-label">Numero Ambulatorio</label>
                <input disabled chosen class="form-control" name="ambulatorio_id" value="{{ $gestao_ambulatorio->id }}">
            </div>
            <div class="form-group">
                <label for="Paciente_nif" class="form-label">Paciente NIF</label>
                <input disabled chosen class="form-control" name="paciente_nif" value="{{ $gestao_ambulatorio->paciente_nif }}">
            </div>
            <div class="form-group">
                <label for="Data" class="form-label">Data</label>
                <input disabled chosen class="form-control" name="data" value="{{ $gestao_ambulatorio->data }}">
            </div>
            <div class="form-group">
                <label for="Procedimento" class="form-label">Procedimento</label>
                <input disabled chosen class="form-control" name="procedimento" value="{{ $gestao_ambulatorio->procedimento }}">
            </div>
            <div class="form-group">
                <label for="Estado" class="form-label">Estado</label>
                <input required list="estado" name="estado" class="form-control" value="{{ $gestao_ambulatorio->estado }}">
                <datalist id="estado">
                    <option value="Por efetuar">
                    <option value="Efetuado">
                    <option value="Cancelado">
                </datalist>
                @if ($errors->has('Estado'))
                    <span class="text-danger">{{ $errors->first('Estado') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="Gastos" class="form-label">Gastos</label>
                <input required type="number" name="gastos" class="form-control" value="{{ $gestao_ambulatorio->gastos }}">
                @if ($errors->has('Gastos'))
                    <span class="text-danger">{{ $errors->first('Gastos') }}</span>
                @endif
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="{{ route('gestao_ambulatorio.index') }}" class="btn btn-dark">Cancelar</a>
        </form>
    </div>
@endsection
