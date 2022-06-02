@extends ('layouts.app-master')
@section ('content')
    <style>
        body {
            background-color: #c5d7f2;
        }
    </style>
    <div class="container">
        <h1>Nova fatura</h1>
        <form method="POST" action=''>
            @csrf
            <div class="form-group">
                <label class="form-label" for="data_inicio">Data</label>
                <input type="date" class="datepicker form-control" name="data"/>
            </div>
            <div class="form-group" style="margin-top: 10px">
                <label class="form-label" for="internamento" style="width: 115px">Valor</label>
                <input type="number" class="form-checkbox" name="valor"/>
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{route('fat_servico.index')}}" class="btn btn-dark">Voltar</a>
            </div>
        </form>
    </div>
@endsection