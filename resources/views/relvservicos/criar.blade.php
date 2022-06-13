@extends('layouts.app-master')
@section('content')
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }

    </style>
    <div class="container">
        <h1>Criar Relatório Serviços</h1>
        <form method="POST" action="">
            @csrf
            <div class="form-group">
                @php
                    $ids = DB::table('paciente')->pluck('nif');
                    $patt = null;
                    for ($i = 0; $i < count($ids); $i++) {
                        $patt = $patt . $ids[$i] . '|';
                    }
                @endphp
                <label for="Paciente_NIF" class="form-label">NIF do Paciente</label>
                <input required chosen class="form-control" placeholder="NIF do Paciente" list="pacientes"
                    name="paciente_nif" pattern="^(@php
                        echo $patt;
                    @endphp)$">

                <datalist id="pacientes">

                    @foreach ($ids as $id_paciente)
                        <option value="{{ $id_paciente }}">
                            {{ DB::table('paciente')->where('NIF', $id_paciente)->value('nome') }}</option>
                    @endforeach
                </datalist>
            </div>
            <div class="form-group">
                <label class="data_inicio" for="data_inicio">Data Inicial</label>
                <input type="date" class="datepicker form-control" name="data_inicio"/>

                @if ($errors->has('data_inicio'))
                    <span class=text-danger>{{$errors->first('data_inicio')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label class="data_final" for="data_final">Data Final</label>
                <input type="date" class="form-control" name="data_final"/>

                @if ($errors->has('data_final'))
                    <span class=text-danger>{{$errors->first('data_final')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="tipo_servico" class="form-label">Tipo de serviço</label>
                <input required type="text" name="tipo_servico" class="form-control" placeholder="Tipo de serviço">
                @if ($errors->has('tipo_servico'))
                    <span class="text-danger">{{ $errors->first('tipo_servico') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="preco" class="form-label">Preço</label>
                <input required type="number" name="tipo_teste" class="form-control" placeholder="Preço">
                @if ($errors->has('preco'))
                    <span class="text-danger">{{ $errors->first('preco') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="anotacoes" class="form-label">Anotações</label>
                <input required type="text" name="observacoes" class="form-control" placeholder="Anotações"
                    value="Sem Anotações">
                @if ($errors->has('anotacoes'))
                    <span class="text-danger">{{ $errors->first('anotacoes') }}</span>
                @endif
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Criar</button>
            <a href="{{ route('relVservicos.index') }}" class="btn btn-dark">Cancelar</a>
        </form>
    </div>
@endsection
