@extends('layouts.app-master')
@section('content')
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }

    </style>
    <div class="container">
        <h1>Criar Relatório de Venda de Internamento</h1>
        <form method="POST" action="">
            @csrf
            <div class="form-group">
                @php
                    $ids = DB::table('paciente')->pluck('nome');
                    $patt = null;
                    for ($i = 0; $i < count($ids); $i++) {
                        $patt = $patt . $ids[$i] . '|';
                    }
                @endphp
                <label for="Paciente_Nome" class="form-label">Nome do Paciente</label>
                <input required chosen class="form-control" placeholder="Nome do Paciente" list="pacientes"
                    name="paciente_nome" pattern="^(@php
                        echo $patt;
                    @endphp)$">

                <datalist id="pacientes">

                    @foreach ($ids as $id_paciente)
                        <option value="{{ $id_paciente }}">
                            {{ DB::table('paciente')->where('Nome', $id_paciente)->value('nome') }}</option>
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
                <label for="nome_paciente" class="form-label">Nome do Paciente</label>
                <input required type="text" name="nome_paciente" class="form-control" placeholder="nome_paciente">
                @if ($errors->has('nome_paciente'))
                    <span class="text-danger">{{ $errors->first('nome_paciente') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="idade_paciente" class="form-label">Idade do paciente</label>
                <input required type="number" name="idade_paciente" class="form-control" placeholder="idade_paciente">
                @if ($errors->has('idade_paciente'))
                    <span class="text-danger">{{ $errors->first('idade_paciente') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="motivo" class="form-label">Motivo</label>
                <input required type="text" name="motivo" class="form-control" placeholder="motivo">
                @if ($errors->has('motivo'))
                    <span class="text-danger">{{ $errors->first('motivo') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="hora" class="form-label">Hora</label>
                <input required type="number" name="hora" class="form-control" placeholder="hora">
                @if ($errors->has('hora'))
                    <span class="text-danger">{{ $errors->first('hora') }}</span>
                @endif
            </div>



            <br>
            <button type="submit" class="btn btn-primary">Criar</button>
            <a href="{{ route('relVInternamento.index') }}" class="btn btn-dark">Cancelar</a>
        </form>
    </div>
@endsection
