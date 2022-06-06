@extends ('layouts.app-master')
@section ('content')
    <style>
        body {
            background-color: #c5d7f2;
        }
    </style>
    <div class="container">
        <h1>Novo Relatório de Despesas Totais</h1>
        <form method="POST" action=''>
            @csrf
            <div class="form-group">
                <label class="form-label" for="data_inicio">Data Inicial</label>
                <input type="date" class="datepicker form-control" name="data_inicio"/>

                @if ($errors->has('data_inicio'))
                    <span class=text-danger>{{$errors->first('data_inicio')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label class="form-label" for="data_final">Data Final</label>
                <input type="date" class="form-control" name="data_final"/>

                @if ($errors->has('data_final'))
                    <span class=text-danger>{{$errors->first('data_final')}}</span>
                @endif
            </div>
            <div class="form-group" style="margin-top: 10px">
                <label class="form-label" for="internamento" style="width: 115px">Internamento</label>
                <input type="checkbox" class="form-checkbox" name="internamento" value="1"/>

                @if ($errors->has('internamento'))
                    <span class=text-danger>{{$errors->first('internamento')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label class="form-label" for="ambulatorio" style="width: 115px">Ambulatório</label>
                <input type="checkbox" class="form-checkbox" name="ambulatorio" value="1"/>

                @if ($errors->has('ambulatorio'))
                    <span class=text-danger>{{$errors->first('ambulatorio')}}</span>
                @endif
            </div>
            <div class="form-group" style="margin-bottom: 20px">
                <label class="form-label" for="servicos" style="width: 115px">Serviços</label>
                <input type="checkbox" class="form-checkbox" name="servicos" value="1"/>

                @if ($errors->has('servicos'))
                    <span class=text-danger>{{$errors->first('servicos')}}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{route('rel_dt.index')}}" class="btn btn-dark">Cancel</a>
        </form>
    </div>
@endsection