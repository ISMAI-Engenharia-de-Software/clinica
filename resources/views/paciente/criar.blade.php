@extends('layouts.app-master')
@section('content')
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }

    </style>
    <div class="container">
        <h1>Criar Paciente</h1>
        <form method="POST" action="">
            @csrf
            <div class="form-group">
                <label for="nif" class="form-label">NIF do Paciente</label>
                <input required type="text" name="nif" class="form-control" placeholder="NIF">
                @if ($errors->has('nif'))
                    <span class="text-danger">{{ $errors->first('nif') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="nome" class="form-label">Nome do Paciente</label>
                <input required type="text" name="nome" class="form-control" placeholder="Nome do Paciente">
                @if ($errors->has('nome'))
                    <span class="text-danger">{{ $errors->first('nome') }}</span>
                @endif
            </div>
            
            <div class="form-group">
                <label for="idade" class="form-label">Idade</label>
                <input required type="text" name="idade" class="form-control" placeholder="Idade">
                @if ($errors->has('idade'))
                    <span class="text-danger">{{ $errors->first('idade') }}</span>
                @endif
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Criar</button>
            <a href="{{ route('paciente.index') }}" class="btn btn-dark">Cancelar</a>
        </form>
    </div>
@endsection
