@extends('layouts.auth')
@section('head')
<link rel="stylesheet" href="css/auth/login.css">
<script src="js/cpfInputHandler.js" defer></script>
@endsection
@section('content')
<section class="login_page">
    <div class="container">
        <div class="cta">
            <h1>Seja bem vindo ao sistema de gestão financeira.</h1>

            <img src="../assets/banner.jpg" alt="">
        </div>
        <form action="" method="post">
            <h1>Login</h1>
            <div class="input_box">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpfInput" name="cpf" placeholder="000.000.000-00">
                @error('cpf')
                    <p class="input_error">CPF invalido</p>
                @enderror
            </div>
            <div class="input_box">
                <label for="password">Senha:</label>
                <input type="password" name="password" placeholder="*********">
                @error('cpf')
                    <p class="input_error">Senha invalida</p>
                @enderror
            </div>
            <div class="input_box">
                <input type="submit" value="Entrar">
            </div>
        </form>
    </div>
</section>
@endsection