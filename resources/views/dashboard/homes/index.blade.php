@extends('layouts.dashboard')
@section('content')
<div class="card m-5">
    <div class="card-header">
        <strong class="card-title">Liste des maisons</strong>
    </div>
    <div class="table-stats order-table ov-h">
        <table class="table ">
            <thead>
                <tr>
                    <th class="serial">#</th>
                    <th class="avatar">Intitulé</th>
                    <th>Adresse</th>
                    <th>Nb chambres</th>
                    <th>Loyer/Prix</th>
                    <th>Détails</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Meublé</th>
                    <th>Carrelé</th>
                    <th>Peint</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($homes as $home)
                <tr>
                    <td class="serial">{{$home->id}}.</td>
                   
                    <td> {{$home->intitule}} </td>
                    <td>  <span class="name">{{$home->adresse}}</span> </td>
                    <td>{{$home->rooms_number}}</td>
                    <td> <span class="product">{{$home->loyer}}</span> </td>
                    <td><span class="">{{$home->details}}</span></td>
                    <td>
                        
                    </td>
                   <td>{{$home->description}}</td>
                   <td>
                        <span class="badge badge-{{$home->isFurnished?'complete':'danger'}}">{{$home->isFurnished?'Oui':'Non'}}</span>
                   </td>
                   <td>
                     <span class="badge badge-{{$home->isTiled?'complete':'danger'}}">{{$home->isTiled?'Oui':'Non'}}</span>
                    </td>
                    <td>
                        <span class="badge badge-{{$home->isPainted?'complete':'danger'}}">{{$home->isPainted?'Oui':'Non'}}</span>
                   </td>
                   <td>
                    <span class="badge badge-pending">{{$home->status}}</span>
                   </td>
                   <td>
                    <a href="{{route('admin.homes.edit',$home->id)}}" class="btn btn-primary me-3"><i class="bi bi-pencil-fill"></i></a>

                    <button class="btn btn-danger" onclick="document.getElementById('model-open-{{$home->id}}').style.display='block'"><i class="bi bi-trash-fill"></i></button>
                    <form action="{{route('admin.homes.destroy',$home->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <div class="modal" id="model-open-{{$home->id}}">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <p>Etes-vous sûr de vouloir supprimer cette maison?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Confirmer</button>
                                        <button type="button" class="btn btn-danger"  onclick="document.getElementById('model-open-{{$home->id}}').style.display='none'" data-bs-dismiss="modal">Annuler</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                   </td>
                 
                </tr>
                @endforeach
                {{-- <td>{{$home->isFurnished?'Oui':'Non'}}</td>
            <td>{{$home->isPainted?'Oui':'Non'}}</td>
            <td>{{$home->isTiled?'Oui':'Non'}}</td> --}}
{{--                 
                <tr>
                    <td class="serial">2.</td>
                    <td class="avatar">
                        <div class="round-img">
                            <a href="#"><img class="rounded-circle" src="images/avatar/2.jpg" alt=""></a>
                        </div>
                    </td>
                    <td> #5468 </td>
                    <td>  <span class="name">Gregory Dixon</span> </td>
                    <td> <span class="product">iPad</span> </td>
                    <td><span class="count">250</span></td>
                    <td>
                        <span class="badge badge-complete">Complete</span>
                    </td>
                </tr>
                <tr>
                    <td class="serial">3.</td>
                    <td class="avatar">
                        <div class="round-img">
                            <a href="#"><img class="rounded-circle" src="images/avatar/3.jpg" alt=""></a>
                        </div>
                    </td>
                    <td> #5467 </td>
                    <td>  <span class="name">Catherine Dixon</span> </td>
                    <td> <span class="product">SSD</span> </td>
                    <td><span class="count">250</span></td>
                    <td>
                        <span class="badge badge-complete">Complete</span>
                    </td>
                </tr>
                <tr>
                    <td class="serial">4.</td>
                    <td class="avatar">
                        <div class="round-img">
                            <a href="#"><img class="rounded-circle" src="images/avatar/4.jpg" alt=""></a>
                        </div>
                    </td>
                    <td> #5466 </td>
                    <td>  <span class="name">Mary Silva</span> </td>
                    <td> <span class="product">Magic Mouse</span> </td>
                    <td><span class="count">250</span></td>
                    <td>
                        <span class="badge badge-pending">Pending</span>
                    </td>
                </tr> --}}
            </tbody>
        </table>
    </div> <!-- /.table-stats -->
</div>
@endsection