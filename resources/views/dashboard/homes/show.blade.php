@extends('backend.layouts.template')

@section('header')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item " aria-current="page">Maisons</li>
                    <li class="breadcrumb-item active" aria-current="page">Details d'une maison</li>
                </ol>
            </nav>
            <h2 class="h4">Details d'une maison</h2>
        </div>

    </div>
@endsection

@section('content')
@foreach ($home as $index)
    <div class="row py-4">
        <div class="col-12 col-lg-6">
            <div class="card border-0 shadow">
                <div class="card-header border-gray-100 d-flex justify-content-between align-items-center">
                    <h2 class="h6 mb-0">Informations générales</h2>

                </div>
                <div class="card-body">
                    
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="email">Intitulé</label>
                                <div class="h5"> {{$index->intitule}}</div>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="email">Adresse</label>
                                <div class="h5"> {{$index->adresse}}</div>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="email">Superficie</label>
                                <div class="h5"> {{$index->superficie}}</div>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="email">Loyer/Prix</label>
                                <div class="h5"> {{$index->loyer}}</div>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="email">Description</label>
                                <div class="h5"> {{$index->description}}</div>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="email">Image</label>
                                <div class="h5"> oui</div>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="email">Lien de la visite virtuelle</label>
                                <div class="h5"> {{$index->visite_virtuelle}}</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="card border-0 shadow">
                <div class="card-header border-gray-100 d-flex justify-content-between align-items-center">
                    <h2 class="h6 mb-0">Autres informations</h2>

                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="email">Nombre de chambres</label>
                                <div class="h5"> {{$index->rooms_number}}</div>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="email">Meublé</label>
                               <div class="h5"> {{$index->isFurnished ? " Oui": "Non"}}</div>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="email">Carrelé</label>
                               <div class="h5"> {{$index->isTiled ? "Oui": "Non"}}</div>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="email">Peint</label>
                                <div class="h5"> {{$index->isPainted ? "Oui": "Non"}}</div>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="email">A louer/vendre</label>
                                <div class="h5"> {{$index->status}}</div>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="email">Autres</label>
                                <div class="h5"> {{$index->details}}</div>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="email">Propriétaire</label>
                                <div class="h5"> {{App\Models\User::find($index->owner_id)->first_name ." ".App\Models\User::find($index->owner_id)->last_name}}</div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection
