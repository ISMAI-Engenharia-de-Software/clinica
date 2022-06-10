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
        <h1>Lista de Testes</h1>
        <a href="{{ route('teste.pag_criar') }}" class="btn btn-success">Novo Teste</a>
        <br><br>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col" width="1%">#</th>
                    <th scope="col" width="10%">Paciente</th>
                    <th scope="col" width="10%">Data</th>
                    <th scope="col" width="10%">Tipo de Teste</th>
                    <th scope="col" width="15%">Resultado</th>
                    <th scope="col">Observações</th>
                    <th scope="col" width="1%" colspan='3'></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($testes as $teste)
                    <tr>
                        <th scope="row">{{ $teste->id }}</th>
                        <td>{{ $n_paciente = DB::table('paciente')->where('nif', $teste->paciente_nif)->value('nome') }}
                        </td>
                        <td>{{ $teste->data }}</td>
                        <td>{{ $teste->tipo_teste }}</td>
                        <td>{{ $teste->resultado }}</td>
                        <td>{{ $teste->observacoes }}</td>
                        <td><a href="{{ route('teste.mostrar_reg', $teste->id) }}" class="btn btn-primary">Ver</a></td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['teste.eliminar', $teste->id], 'style' => 'display::inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex">
        {!! $testes->links() !!}
    </div>
@endsection
