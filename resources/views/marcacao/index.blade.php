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
        <h1>Lista de Marcações</h1>
        <a href="{{ route('marcacao.pag_criar') }}" class="btn btn-success">Nova Marcação</a>
        <br><br>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col" width="1%">#</th>
                    <th scope="col" width="15%">Paciente</th>
                    <th scope="col" width="10%">Data</th>
                    <th scope="col" width="15%">Responsavel</th>
                    <th scope="col" >Motivo</th>
                    <th scope="col" width="1%" colspan='3'></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($marcacoes as $marcacao)
                    <tr>
                        <th scope="row">{{ $marcacao->id }}</th>
                        <td>{{ $n_paciente = DB::table('paciente')->where('nif', $marcacao->paciente_nif)->value('nome') }} </td>
                        <td>{{ $marcacao->data }}</td>
                        <td>{{ $n_funcionario = DB::table('funcionario')->where('nif', $marcacao->funcionario_nif)->value('nome') }} </td>
                        <td>{{ $marcacao->motivo }}</td>
                        <td><a href="{{ route('marcacao.mostrar_reg', $marcacao->id) }}" class="btn btn-primary">Ver</a></td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['marcacao.eliminar', $marcacao->id], 'style' => 'display::inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex">
        {!! $marcacoes->links() !!}
    </div>
@endsection
