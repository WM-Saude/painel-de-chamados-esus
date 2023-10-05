@extends('layouts.app')

@section('content')
    <main class="main-content main-content-bg mt-0">
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row justify-content-center mb-4">
                    <img class="align-middle img-fluid"
                         src="https://www.wmsaude.com.br/assets/images/Logo_colorida_vetor.png"
                         style="max-width: 300px;"/>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-7">
                        <div class="card border-0 mb-0">
                            <div class="card-header bg-transparent">
                                <h5 class="text-dark text-start mt-2">Entrar</h5>
                                <small>Digite seu e-mail e senha para continuar.</small>
                            </div>
                            <div class="card-body px-lg-5 pt-0">
                                <form role="form" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               name="email" value="{{ old('email') }}" required
                                               autocomplete="email" autofocus placeholder="E-mail">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <input id="password" name="password" placeholder="Senha" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               required autocomplete="password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary w-100 my-4 mb-2">Entrar</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
