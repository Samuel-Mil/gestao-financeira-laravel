@extends('layouts.dashboard')
@section('head')
@endsection
@section('content')
<div class="dash_page">
    <h1 class="page_title"><i class="fa-solid fa-money-bill-trend-up"></i> Registrar fatura</h1>
    <form class="page_form" method="post" action="{{route('create-invoice')}}">
        @csrf
        @error('any')
            <div class="box-error">
                <p>{{ $message }}</p>
            </div>
        @enderror
        <div class="input_box">
            <label for="numero_fatura">Número da Fatura:</label>
            <input required type="text" name="numero_fatura" class="page_input" placeholder="Número da Fatura">
        </div>
        <div class="input_box">
            <label for="data_fatura">Data da Fatura:</label>
            <input required type="date" name="data_fatura" class="page_input">
        </div>
        <div class="input_box">
            <label for="data_vencimento">Data de Vencimento:</label>
            <input required type="date" name="data_vencimento" class="page_input">
        </div>
        <div class="input_box">
            <label for="nome_emitente">Nome do Emitente:</label>
            <input required type="text" name="nome_emitente" class="page_input" placeholder="Nome do Emitente">
        </div>
        <div class="input_box">
            <label for="endereco_emitente">Endereço do Emitente:</label>
            <input required type="text" name="endereco_emitente" class="page_input" placeholder="Endereço do Emitente">
        </div>
        <div class="input_box">
            <label for="cpf_cnpj_emitente">CPF/CNPJ do Emitente:</label>
            <input required type="text" id="cpf_cnpj_emitente" name="cpf_cnpj_emitente" class="page_input" placeholder="CPF/CNPJ do Emitente">
        </div>
        <div class="input_box">
            <label for="nome_cliente">Nome do Cliente:</label>
            <input required type="text" name="nome_cliente" class="page_input" placeholder="Nome do Cliente">
        </div>
        <div class="input_box">
            <label for="endereco_cliente">Endereço do Cliente:</label>
            <input required type="text" name="endereco_cliente" class="page_input" placeholder="Endereço do Cliente">
        </div>
        <div class="input_box">
            <label for="cpf_cnpj_cliente">CPF/CNPJ do Cliente:</label>
            <input required type="text" id="cpf_cnpj_cliente" name="cpf_cnpj_cliente" class="page_input" placeholder="CPF/CNPJ do Cliente">
        </div>
        <div class="input_box">
            <label for="descricao_item">Descrição do Item:</label>
            <textarea name="descricao_item" class="page_input" placeholder="Descrição do Item"></textarea>
        </div>
        <div class="input_box">
            <label for="quantidade">Quantidade:</label>
            <input required type="number" name="quantidade" class="page_input" placeholder="Quantidade">
        </div>
        <div class="input_box">
            <label for="preco_unitario">Preço Unitário:</label>
            <input required type="number" step="0.01" name="preco_unitario" class="page_input" placeholder="Preço Unitário">
        </div>
        <div class="input_box">
            <label for="subtotal">Subtotal:</label>
            <input required type="number" step="0.01" name="subtotal" class="page_input" placeholder="Subtotal">
        </div>
        <div class="input_box">
            <label for="impostos">Impostos:</label>
            <input required type="number" step="0.01" name="impostos" class="page_input" placeholder="Impostos">
        </div>
        <div class="input_box">
            <label for="desconto">Desconto:</label>
            <input required type="number" step="0.01" name="desconto" class="page_input" placeholder="Desconto">
        </div>
        <div class="input_box">
            <label for="total">Total:</label>
            <input required type="number" step="0.01" name="total" class="page_input" placeholder="Total">
        </div>
        <div class="input_box">
            <label for="metodo_pagamento">Método de Pagamento:</label>
            <input required type="text" name="metodo_pagamento" class="page_input" placeholder="Método de Pagamento">
        </div>
        <div class="input_box">
            <label for="condicoes_pagamento">Condições de Pagamento:</label>
            <input required type="text" name="condicoes_pagamento" class="page_input" placeholder="Condições de Pagamento">
        </div>
        <div class="input_box">
            <label for="numero_pedido">Número de Pedido:</label>
            <input required type="text" name="numero_pedido" class="page_input" placeholder="Número de Pedido">
        </div>
        <div class="input_box">
            <label for="notas">Notas:</label>
            <textarea name="notas" class="page_input" placeholder="Notas"></textarea>
        </div>
        <div class="input_box">
            <label for="status">Status:</label>
            <select name="status" class="page_input" required>
                <option value="pendente">Pendente</option>
                <option value="pago">Pago</option>
                <option value="atrasado">Atrasado</option>
            </select>
        </div>
        
        <div class="input_box">
            <input type="submit" value="Registrar">
        </div>
    </form>
</div>
@endsection
