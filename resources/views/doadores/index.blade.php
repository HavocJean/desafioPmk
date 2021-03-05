@extends('app')

@section('content')
    <div class="container-fluid p-0">
        @include('topbar')
        <div class="container">
            <div class="row">
                <div class="col-md-4 search mt-2">
                    <form action="/" method="GET" role="search">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search.." aria-label="Search" aria-describedby="basic-addon1" name="busca">
                            <button type="submit" class="btn btn-primary">Buscar..</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- INICIO TABELA -->
            <table class="table mt-2">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Índice</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Dt Nascimento</th>
                    <th scope="col">Dt Cadastro</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($doadores as $doador)
                        <tr>
                            <th scope="row">{{ $doadores->firstItem()+$loop->index }}</th>
                            <td>{{ $doador->nome }}</td>
                            <td>{{ $doador->email }}</td>
                            <td>{{ Carbon\Carbon::parse($doador->dt_nascimento)->format('d/m/Y') }}</td>
                            <td>{{ $doador->created_at->diffForHumans() }}</td>
                            <td>
                                <a href="{{ url('/doador/edit/'.$doador->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ url('/doador/update/'.$doador->id) }}" class="btn btn-danger" onclick="confirm('Gostaria mesmo de deletar?')">Deletar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row mt-2 mb-2">
                <div class="col-md-8">
                    Doadores: {{ $doadores->count() }}
                </div>
                <div class="col-md-4">
                    {{ $doadores->links() }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('novoDoador') }}" class="btn btn-primary">Cadastrar Doador</a>
                </div>
                <div class="col-md-6 text-right">
                    <a href="{{ url('/') }}" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- BY JEAN -->