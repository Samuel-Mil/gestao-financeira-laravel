@extends('layouts.dashboard')
@section('head')
<script src="{{getenv('APP_URL')}}/js/cpfInputHandler.js" defer></script>
@endsection
@section('content')
<div class="dash_page">
    <h1 class="page_title"><i class="fa-solid fa-users"></i> Criar usuario</h1>
    <form class="page_form" method="post" action="{{route('register-user')}}">
        @csrf
        @error('any')
            <div class="box-error">
                <p>{{$message}}</p>
            </div>
        @enderror
        <div class="input_box">
            <label for="name">Nome:</label>
            <input type="text" name="name" class="page_input" placeholder="Sam Sulek">
        </div>
        <div class="input_box">
            <label for="name">CPF:</label>
            <input type="text" id="cpfInput" name="cpf" class="page_input" placeholder="00000000000">
        </div>
        <div class="input_box">
            <label for="name">Email:</label>
            <input type="text" name="email" class="page_input" placeholder="sam.sulek@gmail.com">
        </div>
        <div class="input_box">
            <label for="name">Senha:</label>
            <input type="password" name="password" class="page_input" placeholder="******">
        </div>
        <div class="input_box">
            <label for="">Cargo:</label>
            <select name="role" class="page_input">
                <option value="0">selecione</option>
                <option value="1">Administrador</option>
                <option value="2">Funcionario</option>
                <option value="3">Gerente</option>
            </select>
        </div>

        <div class="input_box">
            <input type="submit" value="Registrar">
        </div>
    </form>
</div>
@endsection