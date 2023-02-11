@extends('frontend.layouts.template')

@section('content')
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">{{$user->first_name}} {{$user->last_name}}</h1>
                        @if($user->role_id==1)
                        <span class="color-text-a">Admnistrateur</span>
                        @elseif($user->role_id==2)
                        <span class="color-text-a">Propriétaire</span>
                        @else
                        <span class="color-text-a">Admnistrateur</span>
                        @endif

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
                               {{$user->first_name}} {{$user->last_name}}
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
                                    <p class="display-1 text-white  fw-bold">{{$user->first_name[0]}}{{$user->last_name[0]}}</p>
                            </div>
                        </div>
                        <div class="col-md-5 offset-md-1 section-md-t3">
                            <div class="agent-info-box">
                                <div class="agent-title">
                                    <div class="title-box-d">
                                        <h3 class="title-d">{{$user->first_name}} {{$user->last_name}}
                                        </h3>
                                    </div>
                                </div>
                                <div class="agent-content mb-3">

                                    <div class="info-agents color-a">
                                        <p>
                                            <strong>Phone: </strong>
                                            <span class="color-text-a"> {{$user->phone_number}}</span>
                                        </p>

                                        
                                        <p>
                                            <strong>Email: </strong>
                                            <span class="color-text-a"> {{$user->email}}</span>
                                        </p>
                                        <p>
                                            <strong>Sexe: </strong>
                                            @if($user->sex=="Male")
                                            <span class="color-text-a">Masculin</span>
                                            @elseif($user->sex=="Female")
                                            <span class="color-text-a">Féminin</span>
                                            @else
                                            <span class="color-text-a">Autre</span>
                                            @endif
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
