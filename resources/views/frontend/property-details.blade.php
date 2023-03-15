@extends('frontend.layouts.template')
@section('content')
<section class="intro-single">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                    <h1 class="title-single">{{$property->intitule}}</h1>
                    <span class="color-text-a">{{$property->details}}</span>
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
                    @if($property->visite_virtuelle)
                    <iframe width='950' height='480' src='{{$property->visite_virtuelle}}' frameborder='0' allowfullscreen allow='xr-spatial-tracking'></iframe>
                    @else 
                    <img src="{{asset('iamges/properties/'.$property->image)}}" class="img-fuild" alt="">
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
<div class=" post-content color-text-a">
    <p class="post-intro">
      {{$property->intitule}}
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
                                    <h5 class="title-c">{{$property->loyer}} FCFA</h5>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="property-summary">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d section-t4">
                                        <h3 class="title-d">Lien de la visite virtuelle</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="summary-list">
                                <a href="" class="text-success">{{$property->visite_virtuelle}}</a>
                            </div>
                        </div> --}}

                        <div class="property-summary">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d section-t4">
                                        <h3 class="title-d">Propriétaire</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="summary-list">
                                <a class="description color-text-a" target="_blank" href="https://wa.me/{{App\Models\User::where('id',$property->owner_id)->first()->phone_number}}?text=Bonjour à vous.J'ai vu votre {{$property->intitule}} sur la plateforme Movinto et je suis intéressé">{{App\Models\User::where('id',$property->owner_id)->first()->first_name." ".App\Models\User::where('id',$property->owner_id)->first()->last_name }}</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-7 col-lg-7 section-md-t3">
                        <div class="row">
                            <div class="col-sm-12 col-md-9">
                                <div class="title-box-d ">
                                    <h3 class="title-d">Détails de la propriété</h3>

                                </div>

                            </div>

                            <div class="col-md-3">
                                <button class="btn btn-danger fw-bold w-100">{{$property->status}}</button>
                            </div>


                        </div>
                        <div class="summary-list">
                            <ul class="list">
                                <li class="d-flex justify-content-between">
                                    <strong>Superficie:</strong>
                                    <span>{{$property->superficie}} m
                          <sup>2</sup>
                        </span>
                                </li>
                                @if($property->type_id==2)
                                @php
                                $home=App\Models\Home::where('id',$property->home_id)->first();
                                
                                @endphp
                                <li class="d-flex justify-content-between">
                                    <strong>Nombre de chambres:</strong>
                                    <span>{{$home->rooms_number}}</span>
                                </li>
                                @endif
                                @if($property->type_id==3)
                                @php
                                    $land=App\Models\Land::where('id',$property->land_id)->first();
                                @endphp

                                <li class="d-flex justify-content-between">
                                    <strong>Recasé:</strong>
                                    <span>{{$land->isRehoused?"Oui":"Non"}}</span>
                                </li>
                                @endif
                                @if($property->type_id==1)
                                @php
                                $room=App\Models\Room::where('id',$property->room_id)->first();
                                 @endphp
                                <li class="d-flex justify-content-between">
                                    <strong>Meublé:</strong>
                                    <span>{{$room->isFurnished?"Oui":"Non"}}</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <strong>Carrelé:</strong>
                                    <span>{{$room->isTiled?"Oui":"Non"}}</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <strong>Peint:</strong>
                                    <span>{{$room->isPainted?"Oui":"Non"}}</span>
                                </li>
                            @endif
                            @if($property->type_id==2)
                                @php
                                $room=App\Models\Home::where('id',$property->home_id)->first();
                                 @endphp
                                <li class="d-flex justify-content-between">
                                    <strong>Meublé:</strong>
                                    <span>{{$home->isFurnished?"Oui":"Non"}}</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <strong>Carrelé:</strong>
                                    <span>{{$home->isTiled?"Oui":"Non"}}</span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <strong>Peint:</strong>
                                    <span>{{$home->isPainted?"Oui":"Non"}}</span>
                                </li>
                            @endif
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
                                {{$property->description}}

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
                               {{$property->details}}

                            </p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
