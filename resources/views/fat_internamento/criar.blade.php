@extends('layouts.app-master')
@section('content')
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }

    </style>
    <div class="container">
        <h1>Criar fatura</h1>
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
                <label for="valor" class="form-label">Valor</label>
                <input required type="number" name="valor" class="form-control" placeholder="Valor">
                @if ($errors->has('valor'))
                    <span class="text-danger">{{ $errors->first('valor') }}</span>
                @endif
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Criar</button>
            <a href="{{ route('fat_internamento.index') }}" class="btn btn-dark">Cancelar</a>
        </form>
    </div>
@endsection
