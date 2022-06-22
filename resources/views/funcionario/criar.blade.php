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
                <label for="Nif" class="form-label">NIF</label>
                <input required type="number" name="nif_funcionario" class="form-control" placeholder="NIF do Funcionário">
                @if ($errors->has('Nif'))
                    <span class="text-danger">{{ $errors->first('Nif') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="Nome" class="form-label">Nome</label>
                <input required type="text" name="nome_funcionario" class="form-control" placeholder="Nome do Funcionário">
                @if ($errors->has('Nome'))
                    <span class="text-danger">{{ $errors->first('Nome') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="Idade" class="form-label">Idade</label>
                <input required type="number" name="idade_funcionario" class="form-control" placeholder="Idade do Funcionário">
                @if ($errors->has('Idade'))
                    <span class="text-danger">{{ $errors->first('Idade') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="Email" class="form-label">Email</label>
                <input required type="email" name="email_funcionario" class="form-control" placeholder="Email do Funcionário">
                @if ($errors->has('Email'))
                    <span class="text-danger">{{ $errors->first('Email') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="Telemovel" class="form-label">Telemóvel</label>
                <input required type="tel" name="telemovel_funcionario" class="form-control" placeholder="Telemóvel do Funcionário">
                @if ($errors->has('Telemovel'))
                    <span class="text-danger">{{ $errors->first('Telemovel') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="Especializacao" class="form-label">Especialização</label>
                <input required type="text" name="especializacao_funcionario" class="form-control" placeholder="Especialização do Funcionário">
                @if ($errors->has('Especializacao'))
                    <span class="text-danger">{{ $errors->first('Especializacao') }}</span>
                @endif
            </div>
            <div class="form-group">
                @php
                    $ids = DB::table('departamento')->pluck('area_departamento');
                    $patt = null;
                    for ($i = 0; $i < count($ids); $i++) {
                        $patt = $patt . $ids[$i] . '|';
                    }
                @endphp
                <label for="Departamento_Nome" class="form-label">Nome do Departamento</label>
                <input required chosen class="form-control" placeholder="Nome do Departamento" list="departamentos"
                    name="departamento_nome" pattern="^(@php
                        echo $patt;
                    @endphp)$">

                <datalist id="departamentos">

                    @foreach ($ids as $id_departamento)
                        <option value="{{ $id_departamento }}">
                            {{ DB::table('departamento')->where('id', $id_departamento)->value('area_departamento') }}</option>
                    @endforeach
                </datalist>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Criar</button>
            <a href="{{ route('funcionario.index') }}" class="btn btn-dark">Cancelar</a>
        </form>
    </div>
@endsection
