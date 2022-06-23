@extends('layouts.app-master')
@section('content')
    <style>
        body {
            background-color: #c5d7f2;
        }
    </style>
    <div class="main-container">
        <a class="menu-container" href="{{route('rel_fat.index')}}">
            Relatórios de Faturas
        </a>
        <a class="menu-container" href="{{route('rel_dt.index')}}">
            Relatórios de Despesas Totais
        </a>
    </div>
@endsection