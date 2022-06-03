@extends('layouts.app-master')
@section('content')
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }

    </style>
    <div class="container">
        <h1>Criar Funcionário</h1>
        <form method="POST" action="">
            @csrf
            <div class="form-group">
                <label for="nif" class="form-label">NIF</label>
                <input required type="number" name="nif_funcionario" class="form-control" placeholder="NIF do Funcionário">
                @if ($errors->has('nif'))
                    <span class="text-danger">{{ $errors->first('nif') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="nome" class="form-label">Nome</label>
                <input required type="text" name="nome_funcionario" class="form-control" placeholder="Nome do Funcionário">
                @if ($errors->has('nome'))
                    <span class="text-danger">{{ $errors->first('nome') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="idade" class="form-label">Idade</label>
                <input required type="number" name="idade_funcionario" class="form-control" placeholder="Idade do Funcionário">
                @if ($errors->has('idade'))
                    <span class="text-danger">{{ $errors->first('idade') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input required type="email" name="email_funcionario" class="form-control" placeholder="Email do Funcionário">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="telemovel" class="form-label">Telemóvel</label>
                <input required type="tel" name="telemovel_funcionario" class="form-control" placeholder="Telemóvel do Funcionário">
                @if ($errors->has('telemovel'))
                    <span class="text-danger">{{ $errors->first('telemovel') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="especializacao" class="form-label">Especialização</label>
                <input required type="text" name="especializacao_funcionario" class="form-control" placeholder="Especialização do Funcionário">
                @if ($errors->has('especializacao'))
                    <span class="text-danger">{{ $errors->first('especializacao') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="departamento_id" class="form-label">Departamento</label>
                <input required type="number" name="departamento_funcionario" class="form-control" placeholder="Departamento do Funcionário">
                @if ($errors->has('departamento_id'))
                    <span class="text-danger">{{ $errors->first('departamento_id') }}</span>
                @endif
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Criar</button>
            <a href="{{ route('funcionario.index') }}" class="btn btn-dark">Cancelar</a>
        </form>
    </div>
@endsection
