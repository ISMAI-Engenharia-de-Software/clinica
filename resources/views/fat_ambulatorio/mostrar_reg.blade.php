@extends('layouts.app-master')
@section('content')
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }
    </style>
    <div class="container">
        <div class="form-group row">
            <label for="fat_ambulatorio" class="col-sm-2 col-form-label">Conta Ambulatorio</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="Data" class="col-sm-2 col-form-label">Data</label>
            <div class="col-sm-10">
                <input required type="text" disabled class="form-control" value="{{ $fat_ambulatorio->data }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="Valor" class="col-sm-2 col-form-label">Valor</label>
            <div class="col-sm-10">
                <input required type="double" disabled class="form-control" value="{{ $fat_ambulatorio->valor }}">
            </div>
        </div>
        <div>
            <a href="{{ route('fat_ambulatorio.index') }}" class="btn btn-dark">Voltar</a>
        </div>
    </div>
@endsection
