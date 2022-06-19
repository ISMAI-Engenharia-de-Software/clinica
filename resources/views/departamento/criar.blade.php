@extends('layouts.app-master')
@section('content')
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }

    </style>
    <div class="container">
        <h1>Criar departamento</h1>
        <form method="POST" action="">
            @csrf
            <div class="form-group">
                <label for="nome" class="form-label">Nome</label>
                <input required type="text" name="nome_departamento" class="form-control" placeholder="Nome do Departamento">
                @if ($errors->has('nome'))
                    <span class="text-danger">{{ $errors->first('nome') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="areadepartamento" class="form-label">AreaDepartamento</label>
                <input required type="text" name="areadepartamento" class="form-control" placeholder="Area Departamento">
                @if ($errors->has('areadepartamento'))
                    <span class="text-danger">{{ $errors->first('areadepartamento') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="numtrabalhadores" class="form-label">NumTrabalhadores</label>
                <input required type="number" name="numtrabalhadores" class="form-control" placeholder="NumTrabalhadores">
                @if ($errors->has('numtrabalhadores'))
                    <span class="text-danger">{{ $errors->first('numtrabalhadores') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="responsavel" class="form-label">Responsavel</label>
                <input required type="text" name="responsavel" class="form-control" placeholder="responsavel">
                @if ($errors->has('responsavel'))
                    <span class="text-danger">{{ $errors->first('responsavel') }}</span>
                @endif
            </div>


            <br>
            <button type="submit" class="btn btn-primary">Criar</button>
            <a href="{{ route('departamento.index') }}" class="btn btn-dark">Cancelar</a>
        </form>
    </div>
@endsection
