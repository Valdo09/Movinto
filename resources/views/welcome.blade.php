@extends('frontend.layouts.template')

@section('introsection')
    <?php
        $last_home=$homes->last();
        $last_land=$lands->last();
        $last_room=$rooms->last();
    ?>
    <div class="intro intro-carousel swiper position-relative">

        <div class="swiper-wrapper">
            @foreach ($rooms as $room)
            <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url({{ asset('images/properties/'.$room->image) }})">
                <div class="overlay overlay-a"></div>
                <div class="intro-content display-table">
                    <div class="table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="intro-body">
                                        <p class="intro-title-top">{{$room->adresse}}
                                            {{-- <br> Adressse --}}
                                        </p>
                                        <h1 class="intro-title mb-4 ">
                                            <span class="color-b">{{$room->superficie}} m2 </span> {{$room->intitule}}
                                            {{-- <br> Intitule --}}
                                        </h1>
                                        <p class="intro-subtitle intro-price">
                                            <a href="{{route('details',$room->id)}}"><span class="price-a">{{$room->status}} |  {{$room->loyer}} FCFA</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

           
        </div>
        <div class="swiper-pagination"></div>
    </div>
@endsection


@section('content')

       <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Dernières maisons </h2>
                        </div>
                        <div class="title-link">
                            <a href="/homes">Toutes les maisons
                                <span class="bi bi-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="property-carousel" class="swiper">
                <div class="swiper-wrapper">
                    @foreach($homes as $home)
                    <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{ asset('images/properties/'.$home->image) }}" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{route('details',$home->id)}}">{{$home->intitule}}</a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">{{$home->status}} |  {{$home->loyer}} FCFA</span>
                                        </div>
                                        <a href="{{route("details",$home->id)}}" class="link-a">Consulter les details
                                            <span class="bi bi-chevron-right"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Superficie</h4>
                                                <span>{{$home->superficie}}
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
                   

                    {{-- <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{ asset('front/img/property-3.jpg') }}" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="property-single.html">157 West
                                                <br /> Central Park</a>
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

                    <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{ asset('front/img/property-7.jpg') }}" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="property-single.html">245 Azabu
                                                <br /> Nishi Park let</a>
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

                    <div class="carousel-item-b swiper-slide">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{ asset('front/img/property-10.jpg') }}" alt="" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="property-single.html">204 Montal
                                                <br /> South Bela Two</a>
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
                    </div> --}}
                </div>
            </div>
            <div class="propery-carousel-pagination carousel-pagination"></div>

        </div>
    </section><!-- End Latest Properties Section -->

    <!-- ======= Latest News Section ======= -->
    <section class="section-news section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Dernières parcelles</h2>
                        </div>
                        <div class="title-link">
                            <a href="/lands">Toutes les parcelles
                                <span class="bi bi-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="news-carousel" class="swiper">
                <div class="swiper-wrapper">
                    @foreach($lands as $land)
                    <div class="carousel-item-c swiper-slide">
                        <div class="card-box-b card-shadow news-box">
                            <div class="img-box-b">
                                <img src="{{ asset('images/properties/'.$land->image) }}" alt="" class="img-b img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-category-b">
                                        <a href="{{route('details',$land->id)}}" class="category-b">{{$land->superficie}} m2</a>
                                    </div>
                                    <div class="card-title-b">
                                        <h2 class="title-2">
                                            <a href="{{route('details',$land->id)}}">{{$land->intitule}}
                                                </a>
                                        </h2>
                                    </div>
                                    <div class="card-date">
                                        {{-- <span class="date-b">18 Sep. 2017</span> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{-- <div class="carousel-item-c swiper-slide">
                        <div class="card-box-b card-shadow news-box">
                            <div class="img-box-b">
                                <img src="{{ asset('front/img/post-5.jpg') }}" alt="" class="img-b img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-category-b">
                                        <a href="#" class="category-b">Travel</a>
                                    </div>
                                    <div class="card-title-b">
                                        <h2 class="title-2">
                                            <a href="blog-single.html">Travel is comming
                                                <br> new</a>
                                        </h2>
                                    </div>
                                    <div class="card-date">
                                        <span class="date-b">18 Sep. 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="carousel-item-c swiper-slide">
                        <div class="card-box-b card-shadow news-box">
                            <div class="img-box-b">
                                <img src="{{ asset('front/img/post-7.jpg') }}" alt="" class="img-b img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-category-b">
                                        <a href="#" class="category-b">Park</a>
                                    </div>
                                    <div class="card-title-b">
                                        <h2 class="title-2">
                                            <a href="blog-single.html">Park is comming
                                                <br> new</a>
                                        </h2>
                                    </div>
                                    <div class="card-date">
                                        <span class="date-b">18 Sep. 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="carousel-item-c swiper-slide">
                        <div class="card-box-b card-shadow news-box">
                            <div class="img-box-b">
                                <img src="{{ asset('front/img/post-3.jpg') }}" alt="" class="img-b img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-header-b">
                                    <div class="card-category-b">
                                        <a href="#" class="category-b">Travel</a>
                                    </div>
                                    <div class="card-title-b">
                                        <h2 class="title-2">
                                            <a href="#">Travel is comming
                                                <br> new</a>
                                        </h2>
                                    </div>
                                    <div class="card-date">
                                        <span class="date-b">18 Sep. 2017</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>

            <div class="news-carousel-pagination carousel-pagination"></div>
        </div>
    </section><!-- End Latest News Section -->


@endsection
