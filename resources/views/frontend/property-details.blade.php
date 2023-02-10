@extends('frontend.layouts.template')
@section('content')
<section class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single">Intitule</h1>
                    <span class="color-text-a">Détails</span>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Accueil</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                           Détails d'une propriété
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="property-single nav-arrow-b">
    <div class="container">

        <div class="row mb-5">
            <div class="col-sm-12">
                <div class="news-img-box">
                    <img src="{{ asset('front/img/slide-3.jpg') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
<div class=" post-content color-text-a">
    <p class="post-intro">
      Intitulé de la propriété
    </p>
</div>
                <div class="row justify-content-between">
                    <div class="col-md-5 col-lg-4">
                        <div class="property-price d-flex justify-content-center foo">
                            <div class="card-header-c d-flex">
                                <div class="card-box-ico">
                                    <span class="bi bi-cash"></span>
                                </div>
                                <div class="card-title-c align-self-center">
                                    <h5 class="title-c">150 000 FCFA</h5>
                                </div>
                            </div>
                        </div>

                        <div class="property-summary">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d section-t4">
                                        <h3 class="title-d">Lien de la visite virtuelle</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="summary-list">
                                <a href="" class="text-success">https://www.klapty.com/fr/fonctionnalit%C3%A9s#home-section-37</a>
                            </div>
                        </div>

                        <div class="property-summary">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d section-t4">
                                        <h3 class="title-d">Propriétaire</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="summary-list">
                                <h4 class="description color-text-a">Camille GRIMAUD</h4>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-7 col-lg-7 section-md-t3">
                        <div class="row">
                            <div class="col-sm-12 col-md-9">
                                <div class="title-box-d ">
                                    <h3 class="title-d">Details de la propriété</h3>

                                </div>

                            </div>

                            <div class="col-md-3">
                                <button class="btn btn-danger fw-bold w-100">A LOUER / A VENDRE</button>
                            </div>


                        </div>
                        <div class="summary-list">
                            <ul class="list">
                                <li class="d-flex justify-content-between">
                                    <strong>Superficie:</strong>
                                    <span>340m
                          <sup>2</sup>
                        </span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <strong>Nombre de chambres:</strong>
                                    <span>4</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <strong>Recasé:</strong>
                                    <span>Oui</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <strong>Meublé:</strong>
                                    <span>Oui</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <strong>Carrelé:</strong>
                                    <span>Oui</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <strong>Peint:</strong>
                                    <span>Oui</span>
                                </li>
                            </ul>
                        </div>
                        <div class="row section-t3">
                            <div class="col-sm-12">
                                <div class="title-box-d">
                                    <h3 class="title-d">Description</h3>
                                </div>
                            </div>
                        </div>
                        <div class="property-description">
                            <p class="description color-text-a">
                                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                                neque, auctor sit amet

                            </p>

                        </div>
                        <div class="row section-t3">
                            <div class="col-sm-12">
                                <div class="title-box-d">
                                    <h3 class="title-d">Autres</h3>
                                </div>
                            </div>
                        </div>
                        <div class="property-description">
                            <p class="description color-text-a">
                                Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                                neque, auctor sit amet

                            </p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
