@extends('layouts.dashboard')
@section('content')
<div class="dash_page">
    <h1 class="page_title"><i class="fa-solid fa-users"></i> Lista de Bancos</h1>
    <div class="page_list_wrapper">
        @foreach ($banks as $bank)
        <div class="page_list_single">
            <p><b>Titular: </b>{{$bank['holder_name']}}</p>
            <p><b>Numero: </b>{{$bank['number']}}</p>
            <p><b>Agencia: </b>{{$bank['agency']}}</p>
            <p><b>Info de Contato: </b>{{$bank['info_contact']}}</p>

            <div class="page_list_single_btn_box">
                <a href="{{route('delete-bank', $bank['id'])}}" class="delete-button">Deletar</a>
                <a href="{{route('edit-bank', $bank['id'])}}" class="edit-button">Editar</a>
            </div>
        </div>
        @endforeach
        
    </div>
</div>
@endsection