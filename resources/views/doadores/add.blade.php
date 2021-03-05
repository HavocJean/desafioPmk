@extends('app')

@section('content')
    <div class="container-fluid p-0">
        @include('topbar')
        {{-- <div class="col-md-12 bg-dark m-0 p-0 list-doadores-nav">
            <h4>DesafioPmk by Jean</h4>
        </div> --}}
        <div class="container">
            <div class="card mt-4">
                <div class="card-header">{{ __('Cadastrar Doador') }}</div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('novoNewDoador') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                            <label for="nome">{{ __('Nome') }}</label>
                                <input id="nome" type="text" class="form-control" name="nome" value="{{ old('nome') }}" required autocomplete="nome" autofocus>
                            </div>
                            <div class="col-md-6">
                                <label for="email">{{ __('E-mail') }}</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="telefone">{{ __('Telefone') }}</label>
                                <input id="telefone" type="text" class="form-control" name="telefone" value="{{ old('telefone') }}" required autocomplete="telefone" autofocus mask="tel">
                            </div>
                            <div class="col-md-4">
                                <label for="dt_nascimento">{{ __('Data Nascimento') }}</label>
                                <input id="dt_nascimento" type="date" class="form-control" name="dt_nascimento" value="{{ old('dt_nascimento') }}" required autocomplete="dt_nascimento" autofocus>
                            </div>
                            <div class="col-md-4">
                                <label for="cpf">{{ __('CPF') }}</label>
                                <input id="cpf" type="text" class="form-control" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" autofocus mask="cpf">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label for="intervalo_doacao">{{ __('Intervalo doação') }}</label>
                                <select class="custom-select" name="intervalo_doacao" id="intervalo_doacao">
                                    <option selected>Selecione..</option>
                                    <option value="1">Único</option>
                                    <option value="2">Bimestral</option>
                                    <option value="3">Semestral</option>
                                    <option value="4">Anual</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="vl_doacao">{{ __('Valor doação') }}</label>
                                <input id="vl_doacao" type="text" class="form-control" name="vl_doacao" value="{{ old('vl_doacao') }}" required autocomplete="vl_doacao" autofocus mask="money">
                                {{-- <span style="font-size:10px;color:gray">Digite apenas o valor, ex: 100,00</span> --}}
                            </div>
                            <div class="col-md-4">
                                <label for="forma_pag">{{ __('Forma de pagamento') }}</label>
                                <select class="custom-select" name="forma_pag" id="forma_pag">
                                    <option selected>Selecione..</option>
                                    <option value="1">Débito</option>
                                    <option value="2">Crédito</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="endereco">{{ __('Endereço') }}</label>
                                <input id="endereco" type="text" class="form-control" name="endereco" value="{{ old('endereco') }}" required autocomplete="endereco" autofocus>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-info">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ url('/') }}" class="btn btn-primary">Voltar</a>
                            </div>
                        </div>

                        @if(session('success'))
                            <div class="alert alert-success mt-2 text-center">
                                <p>{{session('success')}}</p>
                            </div>
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection