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
        <h1>Fatura de internamento</h1>
        <a href="{{ route('fat_internamento.pag_criar') }}" class="btn btn-success">Nova fatura</a>
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
                @foreach ($fatinternamentoo as $fat_internamento)
                    <tr>
                        <th scope="row">{{ $fat_internamento->id }}</th>
                        <td>{{ $n_paciente = DB::table('paciente')->where('nif', $fat_internamento->paciente_nif)->value('nome') }}
                        </td>
                        <td>{{ $fat_internamento->data }}</td>
                        <td>{{ $fat_internamento->valor }}</td>
                        <td><a href="{{ route('fat_internamento.mostrar_reg', $fat_internamento->id) }}" class="btn btn-primary">Ver</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex">
        {!! $fatinternamentoo->links() !!}
    </div>
@endsection

