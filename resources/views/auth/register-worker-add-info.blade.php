@extends('layouts.only-logo')

@section('content')
<div class="container-fluid px-5">
    <div class="row focus-ring mt-xl-2 row-cols-2">
        <div class="col col-xl-7 ms-xl-5 regular-text">
            <div class="main-title pb-xl-1 pt-xl-3">{{ __('Preencha apenas se quiser...') }}</div>

            <div class="pb-xl-5 pt-xl-2 secundary-title">{{ __('Pedimos esses dados somente para deixar o nosso serviço mais de acordo com o seu perfil. Você pode solicitar a exclusão desses dados a qualquer momento nas configurações do seu perfil.') }}</div>

            <div class="row mt-xl-3">
                <form method="POST" action="{{ route('register-worker-add-info') }}">
                    @csrf
                    <div class="row row-cols-xl-3">
                        <div class="col mb-3">
                            <div class="mb-4">{{ __('Raça/Cor') }}</div>
                                
                            <div class="col">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="ethnicity" id="white">
                                    <label class="form-check-label px-xl-2" for="white">
                                    {{ __('Branca') }}
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="ethnicity" id="black">
                                    <label class="form-check-label px-xl-2" for="black">
                                    {{ __('Preta') }}
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="ethnicity" id="mixed">
                                    <label class="form-check-label px-xl-2" for="mixed">
                                    {{ __('Parda') }}
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="ethnicity" id="asian">
                                    <label class="form-check-label px-xl-2" for="asian">
                                    {{ __('Amarela') }}
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="ethnicity" id="indigenous">
                                    <label class="form-check-label px-xl-2" for="indigenous">
                                    {{ __('Indígena') }}
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="ethnicity" id="indigenous">
                                    <label class="form-check-label px-xl-2" for="indigenous">
                                    {{ __('Outra') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="mb-4">{{ __('Orientação sexual') }}</div>

                            <div class="col">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="orientation" id="heterosex">
                                    <label class="form-check-label px-xl-2" for="heterosex">
                                    {{ __('Heterossexual') }}
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="orientation" id="homosex">
                                    <label class="form-check-label px-xl-2" for="homosex">
                                    {{ __('Homossexual') }}
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="orientation" id="bisex">
                                    <label class="form-check-label px-xl-2" for="bisex">
                                    {{ __('Bissexual') }}
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="orientation" id="asex">
                                    <label class="form-check-label px-xl-2" for="asex">
                                    {{ __('Assexual') }}
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="orientation" id="other-orientation">
                                    <label class="form-check-label px-xl-2" for="other-orientation">
                                    {{ __('Outra') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="mb-4">{{ __('Gênero') }}</div>

                            <div class="col">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="gender" id="cis-woman">
                                    <label class="form-check-label px-xl-2" for="cis-woman">
                                    {{ __('Mulher cis') }}
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="gender" id="trans-woman">
                                    <label class="form-check-label px-xl-2" for="trans-woman">
                                    {{ __('Mulher trans') }}
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="gender" id="cis-man">
                                    <label class="form-check-label px-xl-2" for="cis-man">
                                    {{ __('Homem cis') }}
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="gender" id="trans-man">
                                    <label class="form-check-label px-xl-2" for="trans-man">
                                    {{ __('Homem trans') }}
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="gender" id="non-binarie">
                                    <label class="form-check-label px-xl-2" for="non-binarie">
                                    {{ __('Não-binário') }}
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="gender" id="other-gender">
                                    <label class="form-check-label px-xl-2" for="other-gender">
                                    {{ __('Outro') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="row pt-xl-5 links-register" style="font-color: $link-register-color">
                    <div class="col"><a href="{{ route('register-worker') }}"><< Anterior</a></div>
                    <div class="col text-end"><a href="{{ route('register-worker-upload-cv') }}">Próximo >></a></div>
                </div>
            </div>
        </div>
        <div class="col col-xl-4 align-self-end">
            <img id="select-profile-img" src="{{ asset('assets/img/workers.png') }}" alt="">
        </div>
    </div>
</div>
@endsection