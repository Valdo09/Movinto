@extends('layouts.auth-master')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <img src="{{asset('images/undraw_welcome_cats_thqn.png')}}" class="w-100 h-100">
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-success  text-white  ">{{ __('Inscrivez-vous ici') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register.perform') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="first_name" class="col-md-4 col-form-label text-md-end">{{ __('Prénom') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <input type="hidden" name="role_id" value="3">
                        <div class="row mb-3">
                            <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Numéro de téléphone') }}</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="tel" class="form-control @error('email') is-invalid @enderror" name="phone_number" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmer le mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="sexe" class="col-md-4 col-form-label text-md-end">{{__('Sexe')}}</label>
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" id="flexRadioDefault1" value="Male">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      Masculin
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" id="flexRadioDefault2" value="Female">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      Féminin
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" id="flexRadioDefault3" value="Other">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                      Autre
                                    </label>
                                  </div>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <label for="birthDate" class="col-md-4 col-form-label text-md-end">{{__('Date de naissance')}}</label>
                            <div class="col-md-6">
                                <input type="date" name="birthdate" id="" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('S\'inscrire') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
