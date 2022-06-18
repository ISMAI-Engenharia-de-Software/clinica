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
        <h1>Lista de Ambulatorio</h1>
        <a href="{{ route('conta_ambulatorio.pag_criar') }}" class="btn btn-success">Novo Ambulatorio</a>
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
                @foreach ($contaambulatorioo as $conta_ambulatorio)
                    <tr>
                        <th scope="row">{{ $conta_ambulatorio->id }}</th>
                        <td>{{ $n_paciente = DB::table('paciente')->where('nif', $conta_ambulatorio->paciente_nif)->value('nome') }}
                        </td>
                        <td>{{ $conta_ambulatorio->data }}</td>
                        <td>{{ $conta_ambulatorio->valor }}</td>
                        <td><a href="{{ route('conta_ambulatorio.mostrar_reg', $conta_ambulatorio->id) }}" class="btn btn-primary">Ver</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex">
        {!! $contaambulatorioo->links() !!}
    </div>
@endsection
