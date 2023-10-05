@extends('layouts.dashboard')
@section('content')
<div class="dash_page">
    <h1 class="page_title"><i class="fa-solid fa-money-bill-trend-up"></i> Rastrear Faturas</h1>

    <div class="dash_table">
        <div class="dash_table_header">
            <span>Status:</span>
            <span>Numero da fatura:</span>
            <span>Data da fatura:</span>
            <span>valor:</span>
        </div>
        @foreach ($invoices as $invoice)
            <div class="dash_table_column">
                @php
                    if($invoice['status'] == 'pendente')
                        echo '<span class="tipo_alerta">Pendente</span>';
                    else if($invoice['status'] == 'pago')
                        echo '<span class="tipo_entrada">Pago</span>';
                    else if($invoice['status'] == 'atrasado')
                        echo '<span class="tipo_saida">Atrasado</span>';
                @endphp
                
                <span>{{$invoice['numero_fatura']}}</span>
                <span>{{$invoice['data_fatura'] }}</span>
                <span>R${{$invoice['total']}}</span>
                
                
            </div>
        @endforeach
    </div>
</div>
@endsection