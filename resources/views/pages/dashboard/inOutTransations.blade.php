@extends('layouts.dashboard')
@section('content')
<div class="dash_page">
    <h1 class="page_title"><i class="fa-solid fa-piggy-bank"></i> Entradas e Saidas</h1>

    <div class="dash_table">
        <div class="dash_table_header">
            <span>Tipo:</span>
            <span>Conta de Entrada:</span>
            <span>Conta de Saida:</span>
            <span>valor:</span>
        </div>
        @foreach ($flows as $flow)
            <div class="dash_table_column">
                @php
                    if($flow['type'] == 1)
                        echo '<span class="tipo_entrada">Entrada</span>';
                    else if($flow['type'] == 2)
                        echo '<span class="tipo_saida">Saida</span>';
                @endphp
                
                <span>{{$entrys['number'] }}</span>
                <span>{{$outs['number']}}</span>
                <span>R${{$flow['amount']}}</span>
            </div>
        @endforeach
    </div>
</div>
@endsection