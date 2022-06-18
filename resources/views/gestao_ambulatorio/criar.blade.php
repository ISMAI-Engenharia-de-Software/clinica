@extends('layouts.app-master')
@section('content')
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }

    </style>
    <div class="container">
        <h1>Criar Ambulatorio</h1>
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
                <label for="Data" class="form-label">Data</label>
                <input required type="date" name="data" class="form-control" placeholder="Data">
                @if ($errors->has('Data'))
                    <span class="text-danger">{{ $errors->first('Data') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="Procedimento" class="form-label">Procedimento</label>
                <input required type="text" name="procedimento" class="form-control" placeholder="Procedimento">
                @if ($errors->has('Procedimento'))
                    <span class="text-danger">{{ $errors->first('Procedimento') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="Estado" class="form-label">Estado</label>
                <input required list="estado" name="estado" class="form-control" placeholder="Estado">
                <datalist id="estado">
                    <option value="Em realizacao">
                    <option value="Finalizado">
                </datalist>
                @if ($errors->has('Estado'))
                    <span class="text-danger">{{ $errors->first('Estado') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="Gastos" class="form-label">Gastos</label>
                <input required type="number" name="gastos" class="form-control" placeholder="gastos">
                @if ($errors->has('Gastos'))
                    <span class="text-danger">{{ $errors->first('Gastos') }}</span>
                @endif
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Criar</button>
            <a href="{{ route('gestao_ambulatorio.index') }}" class="btn btn-dark">Cancelar</a>
        </form>
    </div>
@endsection
