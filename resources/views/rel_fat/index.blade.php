@extends('layouts.app-master')
@section('content')
    <style>
        body {
            background-color: #c5d7f2;
        }
    </style>
    <h1>Relatórios de Faturas</h1>
    <div style="margin-top: 20px">
        @include('layouts.partials.messages')
    </div>
    <a href="{{route('rel_fat.pag_criar')}}" class="btn btn-success">Novo Relatório</a>
    <table style="margin-top: 20px" class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col" width="5%">#</th>
                <th scope="col" width="15%">Data Inicial</th>
                <th scope="col" width="15%">Data Final</th>
                <th scope="col" width="15%">Internamento</th>
                <th scope="col" width="15%">Ambulatório</th>
                <th scope="col" width="15%">Serviços</th>
                <th scope="col" width="15%">Valor Total</th>
                <th scope="col" colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($rels as $rel)
                <tr>
                    <th scope="row">{{$rel->id}}</th>
                    <td>{{$rel->data_inicio}}</td>
                    <td>{{$rel->data_final}}</td>
                    <td>
                        @if ($rel->internamento == 0)
                            <?php echo "Não Incluído" ?>
                        @else
                            <?php echo "Incluído" ?>
                        @endif
                    <td>
                        @if ($rel->ambulatorio == 0)
                            <?php echo "Não Incluído" ?>
                        @else
                            <?php echo "Incluído" ?>
                        @endif
                    </td>
                    <td>
                        @if ($rel->servicos == 0)
                            <?php echo "Não Incluído" ?>
                        @else
                            <?php echo "Incluído" ?>
                        @endif
                    <td>{{$rel->valor_total}}€</td>
                    <td><a href="{{route('rel_fat.pag_rel', $rel->id)}}" class="btn btn-primary">Ver</a></td>
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['rel_fat.apagar', $rel->id], 'style' => 'display:inline']) !!}
                        {!! Form::submit('Apagar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex">
        {!! $rels->links() !!}
    </div>
@endsection