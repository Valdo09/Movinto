@extends('authentification.layouts.template')
@section('content')
    <div class="row justify-content-center form-bg-image"
         data-background-lg="{{ asset('back/assets/img/illustrations/signin.svg') }}">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                <div class="text-center text-md-center mb-4 mt-md-0">
                    <h1 class="mb-0 h3">Creer un compte</h1>
                </div>
                <form action="#" class="mt-4">

                    <div class="form-group mb-4">
                        <label for="email">Nom</label>
                        <input type="text" class="form-control"  id="email" autofocus
                               required>

                    </div>

                    <div class="form-group mb-4">
                        <label for="email">Prénoms</label>
                        <input type="text" class="form-control"  id="email" autofocus
                               required>

                    </div>

                    <div class="form-group mb-4">
                        <label for="email">Adresse email</label>
                        <input type="email" class="form-control"  id="email" autofocus
                               required>

                    </div>

                    <div class="form-group mb-4">
                        <label for="email">Numéro de téléphone</label>
                        <input type="text" class="form-control"  id="email" autofocus
                               required>

                    </div>

                    <div class="mb-4">
                        <legend class="h6">Sexe</legend>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
                            <label class="form-check-label" for="exampleRadios1">
                                Masculin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Féminin
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Autres
                            </label>
                        </div>
                    </div>
                        <!-- Form -->
                        <div class="form-group mb-4">
                            <label for="password">Mot de passe </label>
                            <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2">
                                                <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path
                                                        fill-rule="evenodd"
                                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                        clip-rule="evenodd"></path></svg>
                                            </span>
                                <input type="password" placeholder="Password" class="form-control" id="password"
                                       required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="password">Confirmer le mot de passe </label>
                            <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2">
                                                <svg class="icon icon-xs text-gray-600" fill="currentColor"
                                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path
                                                        fill-rule="evenodd"
                                                        d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                        clip-rule="evenodd"></path></svg>
                                            </span>
                                <input type="password" placeholder="Password" class="form-control" id="password"
                                       required>
                            </div>
                        </div>


                    <div class="d-grid">
                        <button type="submit" class="btn btn-success text-white">Sign in</button>
                    </div>
                </form>

                <div class="d-flex justify-content-center align-items-center mt-4">
                                <span class="fw-normal">
                                  Déjà enregistré ?
                                    <a href="" class="fw-bold">Se connecter</a>
                                </span>
                </div>
            </div>
        </div>
    </div>
@endsection
