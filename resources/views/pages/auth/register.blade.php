@extends('layouts.dashboard')
@section('head')
<script src="{{getenv('APP_URL')}}/js/cpfInputHandler.js" defer></script>
<script src="{{getenv('APP_URL')}}/js/image_preview.js" defer></script>
@endsection
@section('content')
<div class="dash_page">
    <h1 class="page_title"><i class="fa-solid fa-users"></i> Criar usuario</h1>
    <form class="page_form" method="post" action="{{route('register-user')}}" enctype="multipart/form-data">
        @csrf
        @error('any')
            <div class="box-error">
                <p>{{$message}}</p>
            </div>
        @enderror
        <div class="input_box">
            <label for="name">Nome:</label>
            <input type="text" name="name" class="page_input" placeholder="Sam Sulek" required>
        </div>
        <div class="input_box">
            <label for="name">CPF:</label>
            <input type="text" id="cpfInput" name="cpf" class="page_input" placeholder="00000000000" required>
        </div>
        <div class="input_box">
            <label for="name">Email:</label>
            <input type="text" name="email" class="page_input" placeholder="sam.sulek@gmail.com" required>
        </div>
        <div class="input_box">
            <label for="name">Senha:</label>
            <input type="password" name="password" class="page_input" placeholder="******" required>
        </div>
        <div class="input_box">
            <label for="">Cargo:</label>
            <select name="role" class="page_input" required>
                <option value="0">selecione</option>
                <option value="1">Administrador</option>
                <option value="2">Funcionario</option>
                <option value="3">Gerente</option>
            </select>
        </div>

        <div class="input_box">
            <label>Image:</label>
            <input onchange="readURL(this);" class="page_input" type="file" name="image" placeholder="Select a Image..." required>
            <div class="image_preview">
                <div class="no_image">
                    <i class="fa-regular fa-image"></i>
                    <span>Preview</span>
                </div>
                <img src="" alt="">
            </div>
        </div>

        <div class="input_box">
            <input type="submit" value="Registrar">
        </div>
    </form>
</div>
@endsection