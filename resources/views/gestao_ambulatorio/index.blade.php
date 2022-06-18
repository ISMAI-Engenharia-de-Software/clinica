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
        <h1>Lista de Pacientes Ambulatorio</h1>
        <a href="{{ route('gestao_ambulatorio.pag_criar') }}" class="btn btn-success">Novo Registo Ambulatorio</a>
        <br><br>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col" width="1%">#</th>
                    <th scope="col" width="10%">Paciente</th>
                    <th scope="col" width="10%">Data</th>
                    <th scope="col" width="15%">Procedimento</th>
                    <th scope="col" width="10%">Estado</th>
                    <th scope="col" width="10%">Gastos</th>
                    <th scope="col" width="1%" colspan='3'></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gestao_ambulatorioo as $gestao_ambulatorio)
                    <tr>
                        <th scope="row">{{ $gestao_ambulatorio->id }}</th>
                        <td>{{ $n_paciente = DB::table('paciente')->where('nif', $gestao_ambulatorio->paciente_nif)->value('nome') }}
                        </td>
                        <td>{{ $gestao_ambulatorio->data }}</td>
                        <td>{{ $gestao_ambulatorio->procedimento }}</td>
                        <td>{{ $gestao_ambulatorio->estado }}</td>
                        <td>{{ $gestao_ambulatorio->gastos }}</td>
                        <td><a href="{{ route('gestao_ambulatorio.mostrar_reg', $gestao_ambulatorio->id) }}" class="btn btn-primary">Ver</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex">
        {!! $gestao_ambulatorioo->links() !!}
    </div>
@endsection
