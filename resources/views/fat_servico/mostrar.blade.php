@extends('layouts.app-master')
@section('content')
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }
    </style>
    <div class="container">
        <div class="form-group row">
            <label for="Paciente" class="col-sm-2 col-form-label">Fatura</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control"
                    value="{{$n_paciente = DB::table('paciente')->where('NIF', $fat_servico->Paciente_NIF)->value('nome')}}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="Data" class="col-sm-2 col-form-label">Data</label>
            <div class="col-sm-10">
                <input required type="text"disabled class="form-control" value="{{$fat_servico->Data}}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="Valor" class="col-sm-2 col-form-label">Valor</label>
            <div class="col-sm-10">
                <input required type="text"disabled class="form-control" value="{{$fat_servico->Valor}}">
            </div>
        </div>
        <br>
        <div>
            <a href="{{route('fat_servico.index')}}"class="btn btn-dark">Voltar</a>
        </div>
    </div>
@endsection
