@extends('app')

@section('content')
<div class="container-fluid">
    <div class="container container-home">
        <div class="box box-home">
            <div class="card">
                <div class="card-header text-center">
                    Bem vindo ao desafio PMK
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-12 mb-4">
                            <a href="{{ route('doadores') }}" class="btn btn-primary">Lista de Doadores</a>
                        </div>
                        
                        <div class="col-md-12">
                            <a href="{{ route('novoDoador') }}" class="btn btn-primary">Cadastrar Doador</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection