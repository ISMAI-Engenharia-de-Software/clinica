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
        <h1>Lista de Pacientes</h1>
        <a href="{{ route('paciente.pag_criar') }}" class="btn btn-success">Novo Paciente</a>
        <br><br>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col" width="20%">NIF</th>
                    <th scope="col">Nome do Paciente</th>
                    <th scope="col" width="15%">Idade</th>
                    <th scope="col" width="1%" colspan='3'></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pacientes as $paciente)
                    <tr>
                        <th scope="row">{{ $paciente->nif }}</th>
                        <td>{{ $paciente->nome }}</td>
                        <td>{{ $paciente->idade }}</td>
                        <td><a href="{{ route('paciente.mostrar_reg', $paciente->nif) }}" class="btn btn-primary">Ver</a></td>
                        <td><a href="{{route('paciente.editar', $paciente->nif)}}" class="btn btn-warning">Editar</a></td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['paciente.eliminar', $paciente->nif], 'style' => 'display::inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex">
        {!! $pacientes->links() !!}
    </div>
@endsection
