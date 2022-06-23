@extends('layouts.app-master')
@section('content')
    <style>
        body {
            background-color: #c5d7f2;
        }
    </style>
    <h1>Relatorios de Vendas de Internamento</h1>
    <div style="margin-top: 20px">
        @include('layouts.partials.messages')
    </div>
    <a href="{{route('relVInternamento.pag_criar')}}" class="btn btn-success">Criar Relatório</a>
    <table style="margin-top: 20px" class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col" width="5%">#</th>
                <th scope="col" width="10%">Nome</th>
                <th scope="col" width="15%">Data de inicio</th>
                <th scope="col" width="15%">Data final</th>
                <th scope="col" width="15%">Motivo</th>
                <th scope="col" width="10%">Idade</th>
                <th scope="col" width="30%">Hora</th>
                <th scope="col" colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($RelVenInternamento as $RelVenInternamento)
                <tr>
                    <th scope="row">{{ $RelVenInternamento->id }}</th>
                    <td>{{ $RelVenInternamento->nome_paciente}}</th>
                    <td>{{ $RelVenInternamento->data_inicio}}</td>
                    <td>{{ $RelVenInternamento->data_final}}</td>
                    <td>{{ $RelVenInternamento->motivo }}</td>
                    <td>{{ $RelVenInternamento->idade_paciente }}</td>
                    <td>{{ $RelVenInternamento->hora }}</td>
                    <td><a href="{{ route('RelVenInternamento.mostrar', $RelVenInternamento->id) }}" class="btn btn-primary">Ver</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex">
        {!! $RelVenInternamento->links() !!}
    </div>
@endsection
