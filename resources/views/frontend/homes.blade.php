@extends('frontend.layouts.template')

@section('content')

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">Nos jolies maisons</h1>
                        <span class="color-text-a">liste des maisons</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Accueil</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                              Maisons
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
        <div class="container">
            <div class="row">


                {{--template de base pour le foreach--}}
                <div class="col-md-4">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="{{ asset('front/img/property-1.jpg')}}" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="#">Intitule</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">A louer | Montant</span>
                                    </div>
                                    <a href="property-single.html" class="link-a">Consulter les details
                                        <span class="bi bi-chevron-right"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">Superficie</h4>
                                            <span>340m
                          <sup>2</sup>
                        </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Nbr de chambres</h4>
                                            <span>2</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-md-4">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="{{ asset('front/img/property-3.jpg')}}" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="#">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">rent | $ 12.000</span>
                                    </div>
                                    <a href="property-single.html" class="link-a">Click here to view
                                        <span class="bi bi-chevron-right"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">Area</h4>
                                            <span>340m
                          <sup>2</sup>
                        </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="{{ asset('front/img/property-6.jpg')}}" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="#">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">rent | $ 12.000</span>
                                    </div>
                                    <a href="property-single.html" class="link-a">Click here to view
                                        <span class="bi bi-chevron-right"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">Area</h4>
                                            <span>340m
                          <sup>2</sup>
                        </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="{{ asset('front/img/property-7.jpg')}}" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="#">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">rent | $ 12.000</span>
                                    </div>
                                    <a href="property-single.html" class="link-a">Click here to view
                                        <span class="bi bi-chevron-right"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">Area</h4>
                                            <span>340m
                          <sup>2</sup>
                        </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="{{ asset('front/img/property-8.jpg')}}" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="#">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">rent | $ 12.000</span>
                                    </div>
                                    <a href="property-single.html" class="link-a">Click here to view
                                        <span class="bi bi-chevron-right"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">Area</h4>
                                            <span>340m
                          <sup>2</sup>
                        </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="{{ asset('front/img/property-10.jpg')}}" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="#">204 Mount
                                            <br /> Olive Road Two</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">rent | $ 12.000</span>
                                    </div>
                                    <a href="property-single.html" class="link-a">Click here to view
                                        <span class="bi bi-chevron-right"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">Area</h4>
                                            <span>340m
                          <sup>2</sup>
                        </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Beds</h4>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Baths</h4>
                                            <span>4</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Garages</h4>
                                            <span>1</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <nav class="pagination-a">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <span class="bi bi-chevron-left"></span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item next">
                                <a class="page-link" href="#">
                                    <span class="bi bi-chevron-right"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section><!-- End Property Grid Single-->


@endsection
