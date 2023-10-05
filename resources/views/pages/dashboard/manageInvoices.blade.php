@extends('layouts.dashboard')
@section('content')
<div class="dash_page">
    <h1 class="page_title"><i class="fa-solid fa-money-bill-trend-up"></i> Lista de Faturas</h1>
    <div class="page_list_wrapper">
        @foreach ($invoices as $invoice)
        <div class="page_list_single">
            <p><b>Numero da fatura: </b>{{$invoice['numero_fatura']}}</p>
            <p><b>Data da fatura: </b>{{$invoice['data_fatura']}}</p>
            <p><b>Emitente: </b>{{$invoice['nome_emitente']}}</p>
            <p><b>Cliente: </b>{{$invoice['nome_cliente']}}</p>
            <p><b>Total: </b>R${{$invoice['total']}}</p>
            <p><b>Numero pedido: </b>{{$invoice['numero_pedido']}}</p>
            <p><b>Status: </b>{{$invoice['status']}}</p>

            <div class="page_list_single_btn_box">
                <a href="{{route('delete-invoice', $invoice['id'])}}" class="delete-button">Deletar</a>
                <a href="{{route('edit-invoice', $invoice['id'])}}" class="edit-button">Editar</a>
            </div>
        </div>
        @endforeach
        
    </div>
</div>
@endsection