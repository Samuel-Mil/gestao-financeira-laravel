@extends('layouts.dashboard')
@section('content')
<div class="dash_page">
    <h1 class="page_title"><i class="fa-solid fa-building-columns"></i> Adicionar conta bancária</h1>

    <form class="page_form" method="post" action="{{route('register-bank-account')}}">
        @csrf
        <div class="input_box">
            <label for="">Número da Conta:</label>
            <input type="text" name="acc_number" class="page_input" placeholder="000000000000000000" required>
        </div>
        <div class="input_box">
            <label for="">Nome do Titular da Conta:</label>
            <input type="text" name="acc_holder" class="page_input" placeholder="Jhonatam Silva">
        </div>
        <div class="input_box">
            <label for="">Tipo da Conta:</label>
            <select name="acc_type" class="page_input" required>
                <option value="0">selecione</option>
                <option value="1">conta corrente</option>
                <option value="2">conta poupança</option>
                <option value="3">conta conjunta</option>
            </select>
        </div>
        <div class="input_box">
            <label for="">Data de abertura da conta:</label>
            <input type="text" name="acc_opening" class="page_input" placeholder="dd/mm/yyyy" required>
        </div>
        <div class="input_box">
            <label for="">Agência Bancária:</label>
            <input type="text" name="acc_agency" class="page_input" placeholder="Itaú, Inter, Caixa, etc..." required>
        </div>
        <div class="input_box">
            <label for="">Número de Identificação do Banco:</label>
            <input type="text" name="agency_id" class="page_input" placeholder="00000" required>
        </div>
        <div class="input_box">
            <label for="">Status da Conta:</label>
            <select name="acc_status" class="page_input" required>
                <option value="0">selecione</option>
                <option value="1">ativa</option>
                <option value="2">inativa</option>
                <option value="3">bloqueada</option>
                <option value="4">encerrada</option>
            </select>
        </div>
        <div class="input_box">
            <label for="">Informações de Contato:</label>
            <textarea name="acc_contact" id="" cols="30" rows="10" class="page_input" placeholder="Email, Telefone, Endereço, etc.." required></textarea>
        </div>
        <div class="input_box">
            <label for="">Notas internas:</label>
            <textarea name="acc_notes" id="" cols="30" rows="10" class="page_input" placeholder="Alguma nota sobre a conta" required></textarea>
        </div>
        <div class="input_box">
            <input type="submit" value="Registrar">
        </div>
    </form>
</div>
@endsection