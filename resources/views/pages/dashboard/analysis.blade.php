@extends('layouts.dashboard')
@section('content')
<div class="dash_page">
    <h1 class="page_title"><i class="fa-solid fa-newspaper"></i> Análises de dados</h1>

    <div class="analytics">
        <div class="view-itens">
            <h2>Detalhes de cada item da análise</h2>
            <ul>
                <li><a href="{{route('list-banks')}}">Contas Bancarias</a></li>
                <li><a href="{{route('list-users')}}">Usuarios</a></li>
                <li><a href="{{route('inOut')}}">Transações</a></li>
                <li><a href="{{route('list-invoices')}}">Faturas</a></li>
            </ul>
        </div>

        <h2>Análise geral do sistema</h2>
        <p>Essa é uma análise geral do sistema, para informações mais expecificas entre na aba de gerenciamento de cada sessão!</p>
        <h3>Usuários</h3>
        <p>Atualmente o painel tem <b>{{$usersCount}}</b> usuários ativos.</p>
        <h3>Contas bancarias</h3>
        <p>Atualmente o painel tem <b>{{$bankCount}}</b> contas bancarias registradas, sendo elas:</p>
        
        <h3>Transações</h3>
        <p>Ao total foram <b>{{$transactionsCount}}</b> transções e foram movimentados R$<b>{{$amount}}</b> das seguintes contas:</p>
        
        <h3>Faturas</h3>
        <p>Atualmente temos o total de <b>{{$invoicesCount}}</b> faturas emitidas sendo elas e seus status:</p>
        
    </div>

</div>
@endsection