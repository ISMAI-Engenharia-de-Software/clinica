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
        <h1>Lista de Departamentos</h1>
        <a href="{{ route('departamento.pag_criar') }}" class="btn btn-success">Novo Departamento</a>
        <br><br>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col" width="12%">Nome do departamento</th>
                    <th scope="col" width="5%">Area do Departamento</th>
                    <th scope="col" width="10%">Numero de Trabalhadores</th>
                    <th scope="col" width="15%">Responsavel</th>
                    <th scope="col" width="1%" colspan='3'></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($departamentot as $departamento)
                    <tr>
                        <td>{{ $departamento->nome }}</td>
                        <td>{{ $departamento->areadodepartamento }}</td>
                        <td>{{ $departamento->numtrabalhadores }}</td>
                        <td>{{ $departamento->responsavel }}</td>
                        <td><a href="{{ route('departamento.mostrar_reg', $departamento->id) }}" class="btn btn-primary">Ver</a></td>
                        <td>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex">
        {!! $departamentot->links() !!}
    </div>
@endsection
