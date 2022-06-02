@extends('layouts.app-master')
@section('content')
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }
    </style>
    <div class="container">
        <h1>Criar Teste</h1>
        <form method="POST" action="">
            @csrf
            <div class="form-group">
                @php
                    $ids = DB::table('paciente')->pluck('NIF');
                    $patt = null;

                    for ($i = 0; $i < count($ids) - 1; $i++) {
                        $patt = $patt . $ids[$i] . '|';
                        $cont = $i;
                    }
                    $patt = $patt . $ids[$cont + 1];
                @endphp
                <label for="Paciente_NIF" class="form-label">NIF do Paciente</label>
                <input required chosen class="form-control" placeholder="NIF do Paciente" list="pacientes"
                    name="Paciente_NIF" pattern="^(@php
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
                <input required type="date" name="Data" class="form-control" placeholder="Data">
                @if ($errors->has('Data'))
                    <span class="text-danger">{{ $errors->first('Data') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="TipoTeste" class="form-label">Tipo de Teste</label>
                <input required type="text" name="TipoTeste" class="form-control" placeholder="TipoTeste">
                @if ($errors->has('TipoTeste'))
                    <span class="text-danger">{{ $errors->first('TipoTeste') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="Resultado" class="form-label">Resultado</label>
                <input required list="resultados" name="Resultado" class="form-control" placeholder="Resultado">
                <datalist id="resultados">
                    <option value="Positivo">
                    <option value="Negativo">
                </datalist>
                @if ($errors->has('Resultado'))
                    <span class="text-danger">{{ $errors->first('Resultado') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="Observacoes" class="form-label">Observações</label>
                <input required type="text" name="Observacoes" class="form-control" placeholder="Observacoes"
                    value="Sem Observações">
                @if ($errors->has('Observacoes'))
                    <span class="text-danger">{{ $errors->first('Observacoes') }}</span>
                @endif
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Criar</button>
            <a href="{{ route('teste.index') }}" class="btn btn-dark">Cancelar</a>
        </form>
    </div>
@endsection
