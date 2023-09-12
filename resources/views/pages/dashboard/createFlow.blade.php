@extends('layouts.dashboard')
@section('content')
<div class="dash_page">
    <h1 class="page_title"><i class="fa-solid fa-piggy-bank"></i> Registrar Transação</h1>
    <form class="page_form" method="post" action="{{route('register-flow')}}">
        @csrf
        <div class="input_box">
            <label for="">Tipo:</label>
            <select name="type" class="page_input">
                <option value="1">Entrada</option>
                <option value="2">Saida</option>
            </select>
        </div>
        <div class="input_box">
            <label for="name">Quantide:</label>
            <input type="number" name="amount" class="page_input" placeholder="100.00">
        </div>
        <div class="input_box">
            <label for="">Conta entrada:</label>
            <select name="entry_account" class="page_input">
                @foreach ($banks as $bank)
                    <option value="{{$bank['id']}}">{{$bank['number']}}</option>                
                @endforeach
            </select>
        </div>
        <div class="input_box">
            <label for="">Conta Saida:</label>
            <select name="outgoing_account" class="page_input">
                @foreach ($banks as $bank)
                    <option value="{{$bank['id']}}">{{$bank['number']}}</option>                
                @endforeach
            </select>
        </div>
        

        <div class="input_box">
            <input type="submit" value="Registrar">
        </div>
    </form>
</div>
@endsection