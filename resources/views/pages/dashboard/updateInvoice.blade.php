@extends('layouts.dashboard')

@section('head')
<script src="{{ getenv('APP_URL') }}/js/cpfInputHandler.js" defer></script>
@endsection

@section('content')
<div class="dash_page">
    <h1 class="page_title"><i class="fa-solid fa-file-invoice"></i> Editar Fatura: Nome da Fatura</h1>
    <form class="page_form" method="post" action="{{ route('update-invoice', $invoice['id']) }}">
        @csrf
        <div class="input_box">
            <label for="numero_fatura">Número da Fatura:</label>
            <input type="text" name="numero_fatura" class="page_input" value="{{ $invoice['numero_fatura'] }}">
        </div>
        <div class="input_box">
            <label for="data_fatura">Data da Fatura:</label>
            <input type="date" name="data_fatura" class="page_input" value="{{ $invoice['data_fatura'] }}">
        </div>
        <div class="input_box">
            <label for="data_vencimento">Data de Vencimento:</label>
            <input type="date" name="data_vencimento" class="page_input" value="{{ $invoice['data_vencimento'] }}">
        </div>
        <div class="input_box">
            <label for="nome_emitente">Nome do Emitente:</label>
            <input type="text" name="nome_emitente" class="page_input" value="{{ $invoice['nome_emitente'] }}">
        </div>
        <div class="input_box">
            <label for="endereco_emitente">Endereço do Emitente:</label>
            <input type="text" name="endereco_emitente" class="page_input" value="{{ $invoice['endereco_emitente'] }}">
        </div>
        <div class="input_box">
            <label for="cpf_cnpj_emitente">CPF/CNPJ do Emitente:</label>
            <input type="text" name="cpf_cnpj_emitente" class="page_input" value="{{ $invoice['cpf_cnpj_emitente'] }}">
        </div>
        <div class="input_box">
            <label for="nome_cliente">Nome do Cliente:</label>
            <input type="text" name="nome_cliente" class="page_input" value="{{ $invoice['nome_cliente'] }}">
        </div>
        <div class="input_box">
            <label for="endereco_cliente">Endereço do Cliente:</label>
            <input type="text" name="endereco_cliente" class="page_input" value="{{ $invoice['endereco_cliente'] }}">
        </div>
        <div class="input_box">
            <label for="cpf_cnpj_cliente">CPF/CNPJ do Cliente:</label>
            <input type="text" name="cpf_cnpj_cliente" class="page_input" value="{{ $invoice['cpf_cnpj_cliente'] }}">
        </div>
        <div class="input_box">
            <label for="descricao_item">Descrição do Item:</label>
            <input type="text" name="descricao_item" class="page_input" value="{{ $invoice['descricao_item'] }}">
        </div>
        <div class="input_box">
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" class="page_input" value="{{ $invoice['quantidade'] }}">
        </div>
        <div class="input_box">
            <label for="preco_unitario">Preço Unitário:</label>
            <input type="number" step="0.01" name="preco_unitario" class="page_input" value="{{ $invoice['preco_unitario'] }}">
        </div>
        <div class="input_box">
            <label for="subtotal">Subtotal:</label>
            <input type="number" step="0.01" name="subtotal" class="page_input" value="{{ $invoice['subtotal'] }}">
        </div>
        <div class="input_box">
            <label for="impostos">Impostos:</label>
            <input type="number" step="0.01" name="impostos" class="page_input" value="{{ $invoice['impostos'] }}">
        </div>
        <div class="input_box">
            <label for="desconto">Desconto:</label>
            <input type="number" step="0.01" name="desconto" class="page_input" value="{{ $invoice['desconto'] }}">
        </div>
        <div class="input_box">
            <label for="total">Total:</label>
            <input type="number" step="0.01" name="total" class="page_input" value="{{ $invoice['total'] }}">
        </div>
        <div class="input_box">
            <label for="metodo_pagamento">Método de Pagamento:</label>
            <input type="text" name="metodo_pagamento" class="page_input" value="{{ $invoice['metodo_pagamento'] }}">
        </div>
        <div class="input_box">
            <label for="condicoes_pagamento">Condições de Pagamento:</label>
            <input type="text" name="condicoes_pagamento" class="page_input" value="{{ $invoice['condicoes_pagamento'] }}">
        </div>
        <div class="input_box">
            <label for="numero_pedido">Número do Pedido:</label>
            <input type="text" name="numero_pedido" class="page_input" value="{{ $invoice['numero_pedido'] }}">
        </div>
        <div class="input_box">
            <label for="notas">Notas:</label>
            <textarea name="notas" class="page_input">{{ $invoice['notas'] }}</textarea>
        </div>
        <div class="input_box">
            <label for="status">Status:</label>
            <select name="status" class="page_input">
                <option value="pendente" {{ $invoice['status'] == 'pendente' ? 'selected' : '' }}>Pendente</option>
                <option value="pago" {{ $invoice['status'] == 'pago' ? 'selected' : '' }}>Pago</option>
                <option value="atrasado" {{ $invoice['status'] == 'atrasado' ? 'selected' : '' }}>Atrasado</option>
            </select>
        </div>
        <div class="input_box">
            <input type="submit" value="Atualizar">
        </div>
    </form>
</div>
@endsection
