@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row my-5 bg-white d-flex justify-content-between p-5">
            <div class="col-md-6">

                <img src="{{ asset('images/undraw_Login_re_4vu2.png') }}" class="w-100 h-100" alt="">
            </div>
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="card-header bg-transparent text-dark
                     text-center font-weight-bold font-size-36">{{ __('Connexion') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login.perform') }}">
                            @csrf

                            <div class="row mb-4">

                                <div class="col-12">
                                    <label for="identifiant"
                                           class="">{{ __('Adresse email') }}</label>
                                </div>

                                <div class="col-12">
                                    <input id="identifiant" type="text"
                                           class="form-control @error('email') is-invalid @enderror" name="identifiant"
                                           value="{{ old('email') }}" autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="row mb-4">

                                <div class="col-12">
                                    <label for="password"
                                           class="">{{ __('Mot de passe') }}</label>
                                </div>


                                <div class="col-12">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Se souvenir de moi') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success w-100">
                                        {{ __('Connexion') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-success d-block" href="{{ route('password.request') }}">
                                            {{ __('Mot de passe oublié?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
