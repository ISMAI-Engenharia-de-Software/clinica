@extends('layouts.app-master')
@section('content')
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }

    </style>
    <div class="container">
        <h1>Criar Marcação</h1>
        <form method="POST" action="">
            @csrf
            <div class="form-group">
                @php
                    $ids_pac = DB::table('paciente')->pluck('nif');
                    $patt1 = null;
                    for ($i = 0; $i < count($ids_pac); $i++) {
                        $patt1 = $patt1 . $ids_pac[$i] . '|';
                    }
                @endphp
                <label for="Paciente_NIF" class="form-label">NIF do Paciente</label>
                <input required chosen class="form-control" placeholder="NIF do Paciente" list="pacientes"
                    name="paciente_nif" pattern="^(@php
                        echo $patt1;
                    @endphp)$">

                <datalist id="pacientes">
                    @foreach ($ids_pac as $id_paciente)
                        <option value="{{ $id_paciente }}">
                            {{ DB::table('paciente')->where('NIF', $id_paciente)->value('nome') }}</option>
                    @endforeach
                </datalist>
            </div>

            <div class="form-group">
                <label for="Data" class="form-label">Data</label>
                <input required type="date" name="data" class="form-control" placeholder="Data">
                @if ($errors->has('data'))
                    <span class="text-danger">{{ $errors->first('data') }}</span>
                @endif
            </div>

            <div class="form-group">
                @php
                    $ids_func = DB::table('funcionario')->pluck('nif');
                    $patt2 = null;
                    for ($i = 0; $i < count($ids_func); $i++) {
                        $patt2 = $patt2 . $ids_func[$i] . '|';
                    }
                @endphp
                <label for="Funcionario_NIF" class="form-label">NIF do Funcionário</label>
                <input required chosen class="form-control" placeholder="NIF do Funcionário" list="funcionarios"
                    name="funcionario_nif" pattern="^(@php
                        echo $patt2;
                    @endphp)$">

                <datalist id="funcionarios">
                    @foreach ($ids_func as $id_funcionario)
                        <option value="{{ $id_funcionario }}">
                            {{ DB::table('funcionario')->where('NIF', $id_funcionario)->value('nome') }}</option>
                    @endforeach
                </datalist>
            </div>

            <div class="form-group">
                <label for="Motivo" class="form-label">Motivo</label>
                <input required type="text" name="motivo" class="form-control" placeholder="Motivo">
                @if ($errors->has('Motivo'))
                    <span class="text-danger">{{ $errors->first('Motivo') }}</span>
                @endif
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Criar</button>
            <a href="{{ route('marcacao.index') }}" class="btn btn-dark">Cancelar</a>
        </form>
    </div>
@endsection
