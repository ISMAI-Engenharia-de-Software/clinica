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
        <h1>Fatura Ambulatorio</h1>
        <a href="{{ route('fat_ambulatorio.pag_criar') }}" class="btn btn-success">Nova Fatura</a>
        <br><br>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col" width="1%">#</th>
                    <th scope="col" width="10%">Paciente</th>
                    <th scope="col" width="20%">Data</th>
                    <th scope="col" width="20%">Valor</th>
                    <th scope="col" width="1%" colspan='3'></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fat_ambulatorio as $fat_ambulatorio)
                    <tr>
                        <th scope="row">{{ $fat_ambulatorio->id }}</th>
                        <td>{{ $n_paciente = DB::table('paciente')->where('nif', $fat_ambulatorio->paciente_nif)->value('nome') }}
                        </td>
                        <td>{{ $fat_ambulatorio->data }}</td>
                        <td>{{ $fat_ambulatorio->valor }}</td>
                        <td><a href="{{ route('fat_ambulatorio.mostrar', $fat_ambulatorio->id) }}" class="btn btn-primary">Ver</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex">
        {!! $fat_ambulatorio->links() !!}
    </div>
@endsection
