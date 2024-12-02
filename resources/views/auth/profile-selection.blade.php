@extends('layouts.only-logo')

@section('content')
<div class="container-fluid px-5">
    <div class="row mt-xl-2 row-cols-2">
        <div class="col col-xl-7 regular-text ms-xl-5">
            <div class="mb-xl-5 main-title pb-xl-5 pt-xl-3">{{ __('Antes de mais nada...') }}</div>

            <div class="pb-xl-4 pt-xl-3 secundary-title">{{ __('O que você procura aqui?') }}</div>

            <div class="pt-xl-5 pb-xl-4 form-check">
                <input class="form-check-input" type="radio" name="set-profile" value="employer" id="employer">
                <label class="form-check-label px-xl-3" for="employer">
                {{ __('Trabalho na área de recrutamento e quero contratar pessoas.') }}
                </label>
            </div>
            <div class="form-check mb-xl-5 pb-xl-5">
                <input class="form-check-input" type="radio" name="set-profile" value="worker" id="worker">
                <label class="form-check-label px-xl-3" for="worker">
                {{ __('Estou procurando emprego.') }}
                </label>
            </div>
            <div class="d-flex pt-xl-5 pe-xl-5 links-register justify-content-end focus-ring" style="font-color: $link-register-color">
                <a href="{{ route('register-worker') }}">Próximo >></a>
            </div>
        </div>
        <div class="col col-xl-4 me-xl-5 pe-xl-4 justify-content-end">
            <img id="select-profile-img" src="{{ asset('assets/img/profile.png') }}" alt="">
        </div>
    </div>
</div>
@endsection