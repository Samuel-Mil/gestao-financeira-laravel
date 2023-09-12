@extends('layouts.dashboard')
@section('content')
<div class="dash_page">
    <h1 class="page_title"><i class="fa-solid fa-users"></i> Editar usuario: Samuel Milhomens</h1>
    <form class="page_form" method="post" action="{{route('update-user', $user['id'])}}">
        @csrf
        <div class="input_box">
            <label for="name">Nome:</label>
            <input type="text" name="name" class="page_input" value="{{$user['name']}}">
        </div>
        <div class="input_box">
            <label for="name">CPF:</label>
            <input type="text" name="cpf" class="page_input" value="{{$user['cpf']}}">
        </div>
        <div class="input_box">
            <label for="name">Email:</label>
            <input type="text" name="email" class="page_input" value="{{$user['email']}}">
        </div>
        <div class="input_box">
            <label for="name">Senha:</label>
            <input type="password" name="password" class="page_input" placeholder="****">
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
            <input type="submit" value="Atualizar">
        </div>
    </form>
</div>
@endsection