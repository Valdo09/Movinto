@extends('frontend.layouts.template')

@section('content')
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Camille GRIMAUD</h1>
                        <span class="color-text-a">Propriétaire</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Accueil</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Utilisateurs</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Camille GRIMAUD
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <section class="agent-single">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="agent-avatar-box bg-success h-100 w-100  d-flex justify-content-center align-items-center ">
                                    <p class="display-1 text-white  fw-bold">CG</p>
                            </div>
                        </div>
                        <div class="col-md-5 offset-md-1 section-md-t3">
                            <div class="agent-info-box">
                                <div class="agent-title">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Camille
                                            GRIMAUD
                                        </h3>
                                    </div>
                                </div>
                                <div class="agent-content mb-3">

                                    <div class="info-agents color-a">
                                        <p>
                                            <strong>Phone: </strong>
                                            <span class="color-text-a"> +54 356 945234 </span>
                                        </p>

                                        <p>
                                            <strong>skype: </strong>
                                            <span class="color-text-a"> Margaret.Es</span>
                                        </p>
                                        <p>
                                            <strong>Email: </strong>
                                            <span class="color-text-a"> agents@example.com</span>
                                        </p>
                                        <p>
                                            <strong>Sexe: </strong>
                                            <span class="color-text-a">Masculin</span>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
