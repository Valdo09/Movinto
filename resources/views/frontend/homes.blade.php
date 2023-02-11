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


            @foreach($homes as $home)
                <div class="col-md-4">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="{{ asset('images/properties/'.$home->image)}}" alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="#">{{$home->intitule}}</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">{{$home->status}} | {{$home->loyer}}</span>
                                    </div>
                                    <a href="{{route('details',$home->id)}}" class="link-a">Consulter les details
                                        <span class="bi bi-chevron-right"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">Superficie</h4>
                                            <span>{{$home->superficie}}m
                          <sup>2</sup>
                        </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Nbr de chambres</h4>
                                            <span>{{$home->rooms_number}}</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            </div>
            {{ $homes->links('frontend.layouts.paginate') }} 
        </div>
    </section><!-- End Property Grid Single-->
   


@endsection
