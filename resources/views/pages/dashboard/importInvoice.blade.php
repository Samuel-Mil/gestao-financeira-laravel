@extends('layouts.dashboard')
@section('content')
<div class="dash_page">
    <h1 class="page_title"><i class="fa-solid fa-handshake"></i> Importar extrato</h1>
    <form class="page_form" method="post" action="{{route('salvar-fatura')}}" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <div class="input_box">
            <label for="name">Nome:</label>
            <input type="text" name="name" class="page_input" placeholder="Nome...">
        </div>
        
        <div class="input_box">
            <label>Image:</label>
            <input onchange="readURL(this);" class="page_input" type="file" name="pdf" placeholder="Select a PDF..." accept=".pdf">
            
        </div>

        <div class="input_box">
            <input type="submit" value="Registrar">
        </div>
    </form>

        <h1 class="page_title"><i class="fa-solid fa-users"></i> Lista de PDFs</h1>
        <div class="page_list_wrapper">
            @foreach ($pdfs as $pdf)
                <div class="page_list_single">
                    <p><b>Nome do PDF: </b>{{ $pdf->name }}</p>
                    <p><b>Data de Upload: </b>{{ $pdf->created_at }}</p>

                    <div class="page_list_single_btn_box">
                        <a href="{{ route('download', $pdf->id) }}" target="_blank" class="delete-button">Download</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection