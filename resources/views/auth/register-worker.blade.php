@extends('layouts.only-logo')

@section('content')
<div class="container-fluid px-5">
    <div class="row focus-ring mt-xl-2 row-cols-2">
        <div class="col col-xl-7 ms-xl-5 regular-text">
            <div class="main-title pb-xl-1 pt-xl-3">{{ __('Vamos começar por algumas informações básicas!') }}</div>

            <div class="pb-xl-5 pt-xl-2 secundary-title">{{ __('Essas são as informações essenciais para prosseguirmos com o seu cadastro.') }}</div>

            <div class="row mt-xl-3">
                <form method="POST" action="{{ route('register-worker') }}">
                    @csrf
                    <div class="row row-cols-2">
                        <div class="row worker-profile mb-5">
                            <label for="name" class="col-form-label">{{ __('Nome completo*') }}</label>
                            <input id="name" type="text" class="focus-ring px-2 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus required>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="row worker-profile mb-5">
                            <label for="birthdate" class="col-form-label">{{ __('Data de nascimento*') }}</label>
                            <input id="birthdate" type="date" class="focus-ring px-2 form-control" name="birthdate" placeholder="Ex:01/01/1992">
                        </div>
                        <div class="row worker-profile mb-5">
                            <label for="zipcode" class="col-form-label">{{ __('CEP*') }}</label>
                            <input id="zipcode" type="text" class="focus-ring px-2 form-control" name="zipcode" required>
                        </div>
                        <div class="row worker-profile mb-5">
                            <label for="cpf" class="col-form-label">{{ __('CPF*') }}</label>
                            <input id="cpf" type="text" class="focus-ring px-2 form-control" name="cpf" required>
                        </div>
                        <div class="row worker-profile mb-5">
                            <label for="email" class="col-form-label">{{ __('E-mail*') }}</label>
                            <input id="email" type="email" class="focus-ring px-2 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" required>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row worker-profile mb-5">
                            <label for="password" class="col-form-label">{{ __('Senha*') }}</label>
                            <input id="password" type="password" class="focus-ring px-2 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row worker-profile mb-5">
                            <div class="col">{{ __('Possui algum tipo de deficiência?*') }}</div>
                                
                            <div class="d-flex flex-row">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="disabilities" id="disabilities">
                                    <label class="form-check-label px-xl-2" for="disabilities">
                                    {{ __('Sim') }}
                                    </label>
                                </div>
                                <div class="form-check ps-xl-5">
                                    <input class="form-check-input" type="radio" name="disabilities" id="no-disabilities">
                                    <label class="form-check-label px-xl-2" for="no-disabilities">
                                    {{ __('Não') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row worker-profile mb-5 disabilities-list">
                            <div class="mb-xl-3">{{ __('Se sim, qual(is)?') }}</div>
                                
                            <div class="row row-cols-xl-3">
                                <div class="form-check pb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label ps-xl-2" for="flexCheckDefault">
                                        Física
                                    </label>
                                </div>
                                <div class="form-check pb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label ps-xl-2" for="flexCheckDefault">
                                        Auditiva
                                    </label>
                                </div>
                                <div class="form-check pb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label ps-xl-2" for="flexCheckDefault">
                                        Visual
                                    </label>
                                </div>
                                <div class="form-check pb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label ps-xl-2" for="flexCheckDefault">
                                        Intelectual
                                    </label>
                                </div>
                                <div class="form-check pb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label ps-xl-2" for="flexCheckDefault">
                                        Outra
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row pt-xl-2 links-register" style="font-color: $link-register-color">
                    <div class="col"><a href="{{ route('profile-selection') }}"><< Anterior</a></div>
                    <div class="col text-end"><a href="{{ route('register-worker-add-info') }}">Próximo >></a></div>
                </div>
            </div>
        </div>
        <div class="col col-xl-4 align-self-center">
            <img class="img-fluid" id="select-profile-img" src="{{ asset('assets/img/workers.png') }}" alt="">
        </div>
    </div>
</div>
@endsection