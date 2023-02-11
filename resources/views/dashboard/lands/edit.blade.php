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
                    <li class="breadcrumb-item " aria-current="page">Parcelles</li>
                    <li class="breadcrumb-item active" aria-current="page">Modifier une parcelle</li>
                </ol>
            </nav>
            <h2 class="h4">Modifier une parcelle</h2>
        </div>

    </div>
@endsection

@section('content')
@foreach ($land as $item)
<form action="{{route('admin.lands.update',$item->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
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
                                <input type="text" name="intitule" id="" class="form-control" value="{{$item->intitule}}">
                                <small class="form-text text-muted">ex. 1 parcelle salon à</small>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="email">Adresse</label>
                                <input type="text" name="adress" id="" class="form-control" value="{{$item->adresse}}">
                                <small class="form-text text-muted">Calavi, Cxxx</small>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="email">Superficie</label>
                                <input type="text" name="superficie" id="" class="form-control" value="{{$item->superficie}}">
                                <small class="form-text text-muted">Calavi, Cxxx</small>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="email">Loyer/Prix</label>
                                <input type="number" name="rent" id="" class="form-control" value="{{$item->loyer}}">
                                <small class="form-text text-muted">15000</small>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="email">Description</label>
                                <input type="text" name="description" id="" class="form-control" value="{{$item->description}}">
                                <small class="form-text text-muted">ex. ~9.99 ~9.99 999</small>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="email">Image</label>
                                <input type="file" name="photo" id="" class="form-control">
                                <small class="form-text text-muted">ex. ~9.99 ~9.99 999</small>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="email">Lien de la visite virtuelle</label>
                                <input type="text" name="visite_virtuelle" id="" class="form-control" value="{{$item->visite_virtuelle}}">
                                <small class="form-text text-muted">ex. 9999 9999 9999 9999</small>
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
                                <label for="email">Recasé</label>
                                <select class="form-select" id="country" aria-label="Default select example">
                                    @if($item->isRehoused)
                                    <option selected value="Yes">Oui</option>
                                    <option value="No">Non</option>
                                    
                                    @else
                                    <option selected value="No">Non</option>
                                    <option value="Yes">Oui</option>
                                    @endif

                                </select>
                                <small class="form-text text-muted">Calavi, Cxxx</small>
                            </div>

                        </div>
                        
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="email">A louer/vendre</label>
                                <select class="form-select" id="country" aria-label="Default select example" name="status">
                                    @if($item->status=="A louer")
                                    <option selected value="A louer">A louer</option>
                                    <option value="A vendre">A vendre</option>
                                    
                                    @else
                                    <option selected value="A vendre">A vendre</option>
                                    <option value="A louer">A louer</option>
                                    @endif

                                </select>
                                <small class="form-text text-muted">Calavi, Cxxx</small>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="email">Autres</label>
                                <textarea name="details" class="form-control" placeholder="Entrer votre message..." id="textarea" rows="4">{{$item->details}}</textarea>
                                <small class="form-text text-muted">Calavi, Cxxx</small>
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <label for="email">Propriétaire</label>
                                <select class="form-select" id="country" aria-label="Default select example" name="owner_id">
                                    @php
                                        $proprio=\App\Models\User::where('id',$item->owner_id)->get();
                                    @endphp
                                    @foreach ($proprio as $pro)
                                        <option value="{{$pro->id}}" label="" >{{$pro->first_name." ".$pro->last_name}}</option>
                                    @endforeach
                                    @foreach ($owners as $owner)
                                        <option value="{{$owner->id}}" label="" >{{$owner->first_name." ".$owner->last_name}}</option>
                                    @endforeach

                                </select>
                                <small class="form-text text-muted">Calavi, Cxxx</small>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="d-flex gap-3 py-3">
                <button type="reset" class="btn btn-danger">Annuler</button>
                <button type="submit" class="btn btn-success text-white">Enregistrer</button>
            </div>
        </div>
    </div>
</form>
    
@endforeach
@endsection
