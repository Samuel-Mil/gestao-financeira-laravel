<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{getenv('APP_URL')}}/css/style.css">
    <link rel="stylesheet" href="{{getenv('APP_URL')}}/css/dashboard/main.css">
    <script defer src="https://kit.fontawesome.com/708b4765cf.js" crossorigin="anonymous"></script>
    @yield('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
</head>
<body>
    <aside class="sidebar">
        <header class="user_box">
            <img src="{{getenv('APP_URL')}}/img/pics/{{auth()->user()->image}}" class="user_image" alt="User profile pic">
            <div class="user_info">
                <h2 class="user_name">{{auth()->user()->name}}</h2>
                <p class="user_role">
                    @php
                        if(auth()->user()->role == 1)
                            echo 'Administrador';
                        else if(auth()->user()->role == 2)
                            echo 'Funcionario';
                        else if(auth()->user()->role == 3)
                            echo 'Gerente';
                    @endphp
                </p>
            </div>
        </header>
        <main class="sidebar_blocks">
            <ul>
                <h3><i class="fa-solid fa-building-columns"></i> Contas bancárias</h3>
                <li><a href="{{route('ceate-bank-account')}}">Registrar conta</a></li>
                <li><a href="{{route('list-banks')}}">Gerenciar contas</a></li>
                <h3><i class="fa-solid fa-piggy-bank"></i> Fluxo de Caixa</h3>
                <li><a href="{{route('inOut')}}">Entradas e saídas</a></li>
                @if (auth()->user()->role == 1 || auth()->user()->role == 2)
                    <li><a href="{{route('create-flow')}}">Registrar transação</a></li>
                @endif
                <h3><i class="fa-solid fa-money-bill-trend-up"></i> Faturamento e Faturas</h3>
                <li><a href="{{route('register-invoice')}}">Emitir fatura</a></li>
                <li><a href="{{route('track-invoices')}}">Rastrear faturas</a></li>
                <li><a href="{{route('list-invoices')}}">Gerenciar Faturas</a></li>
                <h3><i class="fa-solid fa-handshake"></i> Conciliação Bancária</h3>
                <li><a href="{{route('importar')}}">Importar extratos</a></li>
                <!--<li><a href="#">Discrepâncias</a></li>-->
                <h3><i class="fa-solid fa-newspaper"></i> Relatórios e análises</h3>
                <li><a href="{{route('analise')}}">Análide de dados</a></li>
                @if (auth()->user()->role == 1)
                    <h3><i class="fa-solid fa-users"></i> Usuarios</h3>
                    <li><a href="{{route('register')}}">Criar usuario</a></li>
                    <li><a href="{{route('list-users')}}">Gerenciar usuarios</a></li>
                    <li><a href="{{route('list-users')}}" class="mobile">.</a></li>
                @endif
            </ul>    
        </main>
    </aside>
    <header class="main_header">
        <h1>Sistema de gestão financeira</h1>
        <div class="buttons_box">
            <a href="{{route('dashboard')}}"><i class="fa-solid fa-house" title="home"></i></a>
            <a href="{{route('logout')}}"><i class="fa-solid fa-right-from-bracket" title="logout"></i></a>
        </div>
    </header>

    <section class="page_box">
        @yield('content')
    </section>

    <div class="clear"></div>
</body>
</html>