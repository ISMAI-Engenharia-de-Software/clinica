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
                <input required type="number" name="nif" class="form-control" placeholder="NIF do Funcionário">
                @if ($errors->has('nif'))
                    <span class="text-danger">{{ $errors->first('nif') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="nome" class="form-label">Nome</label>
                <input required type="text" name="nome" class="form-control" placeholder="Nome do Funcionário">
                @if ($errors->has('nome'))
                    <span class="text-danger">{{ $errors->first('nome') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="idade" class="form-label">Idade</label>
                <input required type="number" name="idade" class="form-control" placeholder="Idade do Funcionário">
                @if ($errors->has('idade'))
                    <span class="text-danger">{{ $errors->first('idade') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input required type="email" name="email" class="form-control" placeholder="Email do Funcionário">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="telemovel" class="form-label">Telemóvel</label>
                <input required type="tel" name="telemovel" class="form-control" placeholder="Telemóvel do Funcionário">
                @if ($errors->has('telemovel'))
                    <span class="text-danger">{{ $errors->first('telemovel') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="especializacao" class="form-label">Especialização</label>
                <input required type="text" name="especializacao" class="form-control" placeholder="Especialização do Funcionário">
                @if ($errors->has('especializacao'))
                    <span class="text-danger">{{ $errors->first('especializacao') }}</span>
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
