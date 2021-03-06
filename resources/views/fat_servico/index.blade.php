@extends('layouts.app-master')
@section('content')
    <div>
        @include('layouts.partials.messages')
    </div>
    <style type="text/css">
        body {
            background-color: #c5d7f2;
        }

    </style>
    <div class="container">
        <h1>Fatura de serviço</h1>
        <a href="{{ route('fat_servico.pag_criar') }}" class="btn btn-success">Nova fatura</a>
        <br><br>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col" width="1%">#</th>
                    <th scope="col" width="10%">Paciente</th>
                    <th scope="col" width="10%">Data</th>
                    <th scope="col" width="10%">Valor</th>
                    <th scope="col" width="1%" colspan='3'></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fatservicoo as $fat_servico)
                    <tr>
                        <th scope="row">{{ $fat_servico->id }}</th>
                        <td>{{ $n_paciente = DB::table('paciente')->where('nif', $fat_servico->paciente_nif)->value('nome') }}
                        </td>
                        <td>{{ $fat_servico->data }}</td>
                        <td>{{ $fat_servico->valor }}</td>
                        <td><a href="{{ route('fat_servico.mostrar_reg', $fat_servico->id) }}" class="btn btn-primary">Ver</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex">
        {!! $fatservicoo->links() !!}
    </div>
@endsection

