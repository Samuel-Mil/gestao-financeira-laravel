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
        <form action="{{route('doLogin')}}" method="post">
            
            @csrf
            <h1>Login</h1>
            
            @error('password')
            <div class="box-error">
                <p>{{$message}}</p>
            </div>
            @enderror
            <div class="input_box">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpfInput" name="cpf" placeholder="000.000.000-00" required>
                
            </div>
            <div class="input_box">
                <label for="password">Senha:</label>
                <input type="password" name="password" placeholder="*********" required>
            </div>
            <div class="input_box">
                <input type="submit" value="Entrar">
            </div>
        </form>
    </div>
</section>
@endsection