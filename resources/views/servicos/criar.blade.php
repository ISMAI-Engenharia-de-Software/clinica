@extends('layouts.app-master')
@section('content')
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }
    </style>
    <div class="container">
        <h1>Criar Serviço</h1>
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
                <label for="data" class="form-label">Data</label>
                <input required type="date" name="data" class="form-control" placeholder="Data">
                @if ($errors->has('data'))
                    <span class="text-danger">{{ $errors->first('data') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="nome" class="form-label">Nome</label>
                <input required type="text" name="nome" class="form-control" placeholder="Nome">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('nome') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="tipo" class="form-label">Tipo</label>
                <input required type="text" name="tipo" class="form-control" placeholder="Tipo">
                @if ($errors->has('tipo'))
                    <span class="text-danger">{{ $errors->first('tipo') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="condicoes" class="form-label">Condições</label>
                <input required type="text" name="condicoes" class="form-control" placeholder="Condições">
                @if ($errors->has('condicoes'))
                    <span class="text-danger">{{ $errors->first('condicoes') }}</span>
                @endif
            </div>

            <div class="form-group" style="margin-bottom: 20px">
                <label for="gastos" class="form-label">Gastos</label>
                <input required type="text" name="gastos" class="form-control" placeholder="Gastos">
                @if ($errors->has('gastos'))
                    <span class="text-danger">{{ $errors->first('gastos') }}</span>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Criar</button>
            <a href="{{ route('servicos.index') }}" class="btn btn-dark">Cancelar</a>
        </form>
    </div>
@endsection
