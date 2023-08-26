<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Autenticação</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/dashboard/main.css">
    <script defer src="https://kit.fontawesome.com/708b4765cf.js" crossorigin="anonymous"></script>
    @yield('head')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
</head>
<body>
    <aside class="sidebar">
        <header class="user_box">
            <img src="../assets/profile_pic.png" class="user_image" alt="User profile pic">
            <div class="user_info">
                <h2 class="user_name">Matheus</h2>
                <p class="user_role">Administrador</p>
            </div>
        </header>
        <main class="sidebar_blocks">
            <ul>
                <h3><i class="fa-solid fa-building-columns"></i> Contas bancárias</h3>
                <li><a href="{{route('register')}}">Registrar conta</a></li>
                <li><a href="#">Gerenciar contas</a></li>
                <h3><i class="fa-solid fa-piggy-bank"></i> Fluxo de Caixa</h3>
                <li><a href="#">Entradas e saídas</a></li>
                <li><a href="#">Registrar transação</a></li>
                <li><a href="#">Gerar relatório</a></li>
                <h3><i class="fa-solid fa-money-bill-trend-up"></i> Faturamento e Faturas</h3>
                <li><a href="#">Emitir fatura</a></li>
                <li><a href="#">Rastrear faturas</a></li>
                <li><a href="#">Gerenciar Faturas</a></li>
                <h3><i class="fa-solid fa-handshake"></i> Conciliação Bancária</h3>
                <li><a href="#">Importar extratos</a></li>
                <li><a href="#">Discrepâncias</a></li>
                <h3><i class="fa-solid fa-newspaper"></i> Relatórios e análises</h3>
                <li><a href="#">Gerar relatório</a></li>
                <li><a href="#">Análide de dados</a></li>
                <h3><i class="fa-solid fa-users"></i> Usuarios</h3>
                <li><a href="#">Criar usuario</a></li>
                <li><a href="#">Gerenciar usuarios</a></li>
            </ul>    
        </main>
    </aside>
    <header class="main_header">
        <h1>Sistema de gestão financeira</h1>
        <div class="buttons_box">
            <a href="{{route('dashboard')}}"><i class="fa-solid fa-house" title="home"></i></a>
            <a href=""><i class="fa-solid fa-right-from-bracket" title="logout"></i></a>
        </div>
    </header>

    <section class="page_box">
        @yield('content')
    </section>

    <div class="clear"></div>
</body>
</html>