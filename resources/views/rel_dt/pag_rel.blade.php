@extends ('layouts.app-master')
@section ('content')
    <style>
        body {
            background-color: #c5d7f2;
        }
    </style>
    <div style="margin-top: 20px">
        @include('layouts.partials.messages')
    </div>
    <div style="display: flex; align-items: center">
        <a href="{{route('rel_dt.index')}}" class="btn btn-primary" 
        style="display: flex; align-items: center; justify-content: center; 
        height: 30px; width: 30px; margin-right: 10px"><</a>
        <h1>Relatório de Despesas Totais #{{$rel->id}}</h1>
    </div>
        <p>
            Data Inicial: <strong>{{$rel->data_inicio}}</strong> | 
            Data Final: <strong>{{$rel->data_final}}</strong> | 
            Despesa Total: <strong>{{$rel->despesas_totais}}€</strong> | 
            Tipo Despesa:
            @if ($rel->internamento == 1)
                <strong>Internamento</strong>;
            @endif
            @if ($rel->ambulatorio == 1)
                <strong>Ambulatório</strong>;
            @endif
            @if ($rel->servicos == 1)
                <strong>Serviços</strong>;
            @endif
        </p>
    </div>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Tipo Despesa</th>
                    <th scope="col">Data Registo</th>
                    <th scope="col">Gastos</th>
                </tr>
            </thead>
            <tbody>
                <?php $dataInicial = $rel->data_inicio; $dataFinal = $rel->data_final; $count = 0 ?>
                @if ($rel->internamento == 1)
                    <?php $qInt = DB::table('internamento')->where('data', '>=', $dataInicial)->where('data', '<=', $dataFinal)->pluck('id'); ++$count ?>
                    @foreach ($qInt as $id)
                        <tr>
                            <td>Internamento</td>
                            <td>{{DB::table('internamento')->where('id', $id)->value('data')}}</td>
                            <td>{{DB::table('internamento')->where('id', $id)->value('gastos')}}€</td>
                        </tr>
                    @endforeach
                @endif
                @if ($rel->ambulatorio == 1)
                    <?php $qAmb = DB::table('ambulatorio')->where('data', '>=', $dataInicial)->where('data', '<=', $dataFinal)->pluck('id'); ++$count ?>
                    @foreach ($qAmb as $id)
                        <tr>
                            <td>Ambulatório</td>
                            <td>{{DB::table('ambulatorio')->where('id', $id)->value('data')}}</td>
                            <td>{{DB::table('ambulatorio')->where('id', $id)->value('gastos')}}€</td>
                        </tr>
                    @endforeach
                @endif
                @if ($rel->servicos == 1)
                    <?php $qSer = DB::table('servico')->where('data', '>=', $dataInicial)->where('data', '<=', $dataFinal)->pluck('id'); ++$count ?>
                    @foreach ($qSer as $id)
                        <tr>
                            <td>Serviços</td>
                            <td>{{DB::table('servico')->where('id', $id)->value('data')}}</td>
                            <td>{{DB::table('servico')->where('id', $id)->value('gastos')}}€</td>
                        </tr>
                    @endforeach
                @endif
                @if ($count == 0)
                        <tr>
                            <td colspan="3">Sem Informação Disponível</td>
                        </tr>
                @endif
            </tbody>
        </table>
@endsection