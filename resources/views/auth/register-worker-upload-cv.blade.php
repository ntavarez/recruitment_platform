@extends('layouts.only-logo')

@section('content')
<div class="container-fluid px-5">
    <div class="row focus-ring mt-xl-2 row-cols-2">
        <div class="col col-xl-7 ms-xl-5 regular-text">
            <div class="main-title pb-xl-1 pt-xl-3">{{ __('Para finalizar...') }}</div>

            <div class="pb-xl-5 pt-xl-2 secundary-title">{{ __('Anexe seu currículo no campo abaixo para que possamos preencher o restante do seu perfil.') }}</div>

            <div class="d-flex flex-column mt-xl-3">
                <form method="POST" action="{{ route('register-worker-add-info') }}">
                    @csrf
                    <div class="row cv-area ms-auto me-auto" style="width: 30%; height: 20rem; background-color: #F6EFFF; font-size: 1rem">  
                        <div class="upload-cv align-self-start text-xl-center px-xl-4 pt-xl-4">{{ __('Para inserir seu currículo a partir do computador, clique no botão abaixo.') }}</div>
                        <input class="file align-self-end px-xl-5 pb-xl-4 ms-auto me-auto" type="file" name="upload" id="upload" style="font-size: 1rem">
                    </div>

                    <div class="d-flex flex-row links-register mt-xl-5 pt-xl-5 row-cols-2" style="font-color: $link-register-color">
                        <div class="text"><a href="{{ route('register-worker-add-info') }}"><< Anterior</a></div>
                        <div class="col text-end"><a href="#">Finalizar</a></div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col col-xl-4 align-self-center">
            <img id="select-profile-img" src="{{ asset('assets/img/workers.png') }}" alt="">
        </div>
    </div>
</div>
@endsection