@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- imagem pág inicial -->
        <div class="home-img">
            <img src="{{ asset('assets/img/Untitled-2.png') }}" alt="">
        </div>
    </div>

    <div class="home-content d-flex flex-wrap container-fluid">
        <div class="title-home col-xl-8 py-5 px-5 align-self-center">{{ __('Transformamos o processo de recrutar e conseguir emprego em uma experiência mais agradável. Vem com a gente!') }}</div>

        <div class="login-card d-flex col-xl-4 justify-content-center">
            <div class="px-5">
                <div class="mb-4 text-xl-center" style="font-size: 1.7em">{{ __('Já possui uma conta?') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="login" class="col-xl-3 col-form-label text-xl-center">{{ __('Login') }}</label>

                                <div class="col-xl-8">
                                    <input id="login" type="text" class="focus-ring px-2 form-control @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="login" autofocus>

                                    @error('login')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-xl-3 col-form-label text-xl-center">{{ __('Senha') }}</label>

                                <div class="col-xl-8">
                                    <input id="password" type="password" class="focus-ring px-2 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <div class="checkbox col-xl-12 offset-xl-3">
                                        <div class="d-inline-flex form-check py-3">
                                            <input class="form-check-input focus-ring" type="checkbox" id="flexSwitchCheckDefault">
                                            <label class="form-check-label px-2" style="font-size: 1em" for="flexSwitchCheckDefault">{{ __('Lembrar-me') }}</label>
                                        </div>

                                        <div class="mb-4 text-xl-begin">
                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link focus-ring" href="{{ route('password.request') }}">
                                                {{ __('Esqueceu a senha?') }}
                                            </a>
                                            @endif
                                        </div>
                                        <div class="row mb-3 text-xl-center">
                                            <div class="col-xl-12 offset-xl-4">
                                                <button type="submit" class="btn btn-primary px-5 py-2 focus-ring">
                                                    {{ __('Entrar') }}
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 text-xl-center" style="font-size: 1em">{{ __('Não possui uma conta ainda? Clique ') }}
                                            <span><a class="btn btn-link focus-ring" href="{{ route('profile-selection') }}">
                                                {{ __('aqui.') }}
                                            </a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection
