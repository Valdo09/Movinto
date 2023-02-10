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
                    <li class="breadcrumb-item active" aria-current="page">Chambres</li>
                    <li class="breadcrumb-item active" aria-current="page">Liste des chambres</li>

                </ol>
            </nav>
            <h2 class="h4">Liste des chambres</h2>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{route('admin.properties.create',1)}}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                Ajouter une nouvelle chambre
            </a>
        </div>
    </div>
@endsection

@section('content')
   
    <div class="card card-body border-0 shadow table-wrapper table-responsive mt-4">
        <table class="table table-hover">
            <thead>
            <tr>
                <th class="border-gray-200">#</th>
                <th class="border-gray-200">Intitulé</th>
                <th class="border-gray-200">Adresse</th>
                <th class="border-gray-200">Superficie</th>
                <th class="border-gray-200">Statut</th>
                <th class="border-gray-200">Actions</th>

            </tr>
            </thead>
            <tbody>
                @foreach($rooms as $room)
                <tr>
                   <td>{{$room->id}}</td> 
                   <td> {{$room->intitule}}</td>
                   <td>{{$room->adresse}}</td>
                   <td>{{$room->superficie}}</td>
                   <td>{{$room->status}}</td>
                   <td>
                    <a href="{{route('admin.rooms.show',$room->id)}}" class="btn btn-info me-3"><i class="bi bi-eye-fill"></i></a>

                    <a href="{{route('admin.rooms.edit',$room->id)}}" class="btn btn-primary me-3"><i class="bi bi-pencil-fill"></i></a>
                    <button class="btn btn-danger" onclick="document.getElementById('model-open-{{$room->id}}').style.display='block'"><i class="bi bi-trash-fill"></i></button>
                    <form action="{{route('admin.rooms.destroy',$room->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <div class="modal" id="model-open-{{$room->id}}">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <p>Etes-vous sûr de vouloir supprimer cette chambre?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Confirmer</button>
                                        <button type="button" class="btn btn-danger"  onclick="document.getElementById('model-open-{{$room->id}}').style.display='none'" data-bs-dismiss="modal">Annuler</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>


                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $rooms->links('backend.layouts.paginate') }}
    </div>
   
@endsection
