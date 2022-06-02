@extends('layouts.app-master')
@section('content')
    <style>
        body {
            background-color: #c5d7f2;
        }
    </style>
    <h1>Fatura de Serviços</h1>
    <div style="margin-top: 20px">
        @include('layouts.partials.messages')
    </div>
    <a href="{{route('fat_servico.pag_criar')}}" class="btn btn-success">Criar Fatura</a>
    <table style="margin-top: 20px" class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col" width="5%">#</th>
                <th scope="col" width="40%">Data</th>
                <th scope="col" width="40%">Valor</th>
                <th scope="col" colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($faturas as $fat_servico)
                <tr>
                    <th scope="row">{{ $fat_servico->id }}</th>
                    <td>{{ $n_paciente = DB::table('paciente')->where('nif', $fat_servico->paciente_nif)->value('nome') }}
                    </td>
                    <td>{{ $fat_servico->Data }}</td>
                    <td>{{ $fat_servico->Valor }}</td>
                    <td><a href="{{ route('fat_Servico.mostrar', $fat_Servico->id) }}" class="btn btn-primary">Ver</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex">
        {!! $rels->links() !!}
    </div>
@endsection