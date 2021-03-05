@extends('app')

@section('content')
<div class="container-fluid">
    <div class="container container-home">
        <div class="box box-home">
            <p> Bem vindo ao desafio PMK </p>
            
            <a href="{{ route('doadores') }}" class="btn btn-primary">Lista de Doadores</a>
            <br>
            <br>
            <br>
            <a href="{{ route('novoDoador') }}" class="btn btn-primary">Cadastrar Doador</a>
        </div>
    </div>
</div>
@endsection