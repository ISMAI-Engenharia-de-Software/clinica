@extends ('layouts.app-master')
@section ('content')
    <style>
        body {
            background-color: #c5d7f2;
        }
    </style>
    <div style="margin-top: 20px">
        @include('layouts.partials.messages')
    </div>
    <div style="display: flex; align-items: center">
        <a href="{{route('servicos.index')}}" class="btn btn-primary" 
        style="display: flex; align-items: center; justify-content: center; 
        height: 30px; width: 30px; margin-right: 10px"><</a>
        <h1>Servico #{{$servico->id}}</h1>
    </div>
    <table style="margin-top: 20px" class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col" width="15%">Data</th>
                <th scope="col" width="15%">Nome</th>
                <th scope="col" width="15%">Tipo</th>
                <th scope="col" width="15%">Condições</th>
                <th scope="col" width="15%">Gastos</th>
                <th scope="col" width="15%">Paciente</th>
                <th scope="col" width="15%">NIF Paciente</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$servico->data}}</td>
                <td>{{$servico->nome}}</td>
                <td>{{$servico->tipo}}</td>
                <td>{{$servico->condicoes}}</td>
                <td>{{$servico->gastos}}€</td>
                <td>
                    <?php $nif = $servico->paciente_nif; ?>
                    <?php $queryId = DB::table('paciente')->where('nif', '>=', $nif)->pluck('nif'); ?>
                    {{DB::table('paciente')->where('nif', $queryId)->value('nome')}}
                </td>
                <td>{{$servico->paciente_nif}}</td>
            </tr>
        </tbody>
    </table>
@endsection