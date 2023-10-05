@extends('layouts.dashboard')
@section('content')
<div class="dash_page">
    <h1 class="page_title"><i class="fa-solid fa-users"></i> Lista de Usuarios</h1>
    <div class="page_list_wrapper">
        @foreach ($users as $user)
            
        <div class="page_list_single">
            <img src="../img/pics/{{$user->image}}" alt="">
            <h1>{{$user['name']}}</h1>
            <p>
            @php
                if($user['role'] == 1)
                    echo 'Administrador';
                else if($user['role'] == 2)
                    echo 'Funcionario';
                else if($user['role'] == 3)
                    echo 'Gerente';
            @endphp
            </p>

            <div class="page_list_single_btn_box">
                <a href="{{route('delete-user', $user['id'])}}" class="delete-button">Deletar</a>
                <a href="{{route('update-user', $user['id'])}}" class="edit-button">Editar</a>
            </div>
        </div>
        @endforeach
        
    </div>
</div>
@endsection