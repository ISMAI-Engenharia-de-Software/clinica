@extends('layouts.app-master')
@section('content')
    <style>
        body {
            background-color: #c5d7f2;
        }
    </style>
    <h1>Relatorios de Vendas</h1>
    <div style="margin-top: 20px">
        @include('layouts.partials.messages')
    </div>
    <a href="{{route('relVservicos.pag_criar')}}" class="btn btn-success">Criar Relatório</a>
    <table style="margin-top: 20px" class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col" width="5%">#</th>
                <th scope="col" width="10%">Nome</th>
                <th scope="col" width="15%">Data de inicio</th>
                <th scope="col" width="15%">Data final</th>
                <th scope="col" width="15%">Tipo Serviço</th>
                <th scope="col" width="10%">Preço</th>
                <th scope="col" width="30%">Anotações</th>
                <th scope="col" colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($relVservico as $relVservicos)
                <tr>
                    <th scope="row">{{ $relVservicos->id }}</th>
                    <td>{{ $n_paciente = DB::table('paciente')->where('nif', $relVservicos->paciente_nif)->value('nome') }}</td>
                    <td>{{ $relVservicos->data_inicio}}</td>
                    <td>{{ $relVservicos->data_final}}</td>
                    <td>{{ $relVservicos->tipo_servico }}</td>
                    <td>{{ $relVservicos->preco }}</td>
                    <td>{{ $relVservicos->anotacoes }}</td>
                    <td><a href="{{ route('relVservicos.mostrar', $relVservicos->id) }}" class="btn btn-primary">Ver</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex">
        {!! $relVservico->links() !!}
    </div>
@endsection

