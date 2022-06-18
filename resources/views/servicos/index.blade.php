@extends('layouts.app-master')
@section('content')
    <style>
        body {
            background-color: #c5d7f2;
        }
    </style>
    <h1>Serviços</h1>
    <div style="margin-top: 20px">
        @include('layouts.partials.messages')
    </div>
    <a href="{{route('servicos.pag_criar')}}" class="btn btn-success">Novo Serviço</a>
    <table style="margin-top: 20px" class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col" width="5%">#</th>
                <th scope="col" width="15%">Data</th>
                <th scope="col" width="15%">Nome</th>
                <th scope="col" width="15%">Tipo</th>
                <th scope="col" width="15%">Condições</th>
                <th scope="col" width="15%">Gastos</th>
                <th scope="col" width="15%">NIF Paciente</th>
                <th scope="col" colspan="3"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($servicos as $servico)
                <tr>
                    <?php $input = $servico->data; $date = strtotime($input); ?>
                    <th scope="row">{{$servico->id}}</th>
                    <td>
                        <?php echo date('d/m/Y H:i', $date);?>
                    </td>
                    <td>{{$servico->nome}}</td>
                    <td>{{$servico->tipo}}</td>
                    <td>{{$servico->condicoes}}</td>
                    <td>{{$servico->gastos}}€</td>
                    <td>{{$servico->paciente_nif}}</td> 
                    <td><a href="{{route('servicos.mostrar', $servico->id)}}" class="btn btn-primary">Ver</a></td>
                    <td><a href="{{route('servicos.editar', $servico->id)}}" class="btn btn-warning">Editar</a></td>
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['servicos.apagar', $servico->id], 'style' => 'display:inline']) !!}
                        {!! Form::submit('Apagar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex">
        {!! $servicos->links() !!}
    </div>
@endsection