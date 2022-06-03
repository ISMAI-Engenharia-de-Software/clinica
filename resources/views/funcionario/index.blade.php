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
        <h1>Lista de Funcionários</h1>
        <a href="{{ route('funcionario.pag_criar') }}" class="btn btn-success">Novo Funcionário</a>
        <br><br>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col" width="1%">NIF</th>
                    <th scope="col" width="12%">Nome do Funcionario</th>
                    <th scope="col" width="5%">Idade</th>
                    <th scope="col" width="10%">Telemóvel</th>
                    <th scope="col" width="15%">Especialização</th>
                    <th scope="col" width="10%">Departamento</th>
                    <th scope="col" width="1%" colspan='3'></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($funcionariot as $funcionario)
                    <tr>
                        <td>{{ $funcionario->nif }}</td>
                        <td>{{ $funcionario->nome }}</td>
                        <td>{{ $funcionario->idade }}</td>
                        <td>{{ $funcionario->email }}</td>
                        <td>{{ $funcionario->telemovel }}</td>
                        <td>{{ $funcionario->especializacao }}</td>
                        <td>{{ $funcionario->departamento_id }}</td>
                        <td><a href="{{ route('funcionario.mostrar_reg', $funcionario->id) }}" class="btn btn-primary">Ver</a></td>
                        <td>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex">
        {!! $funcionariot->links() !!}
    </div>
@endsection
