@extends('layouts.dashboard')
@section('content')
<div class="card m-5">
    <div class="card-header">
        <strong class="card-title">Liste des parcelles</strong>
    </div>
    <div class="table-stats order-table ov-h">
        <table class="table ">
            <thead>
                <tr>
                    <th class="serial">#</th>
                    <th class="avatar">Intitulé</th>
                    <th>Adresse</th>
                    
                    <th>Loyer/Prix</th>
                    <th>Détails</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Recasé</th>

                   
                    <th>Statut</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lands as $land)
                <tr>
                    <td class="serial">{{$land->id}}.</td>
                   
                    <td> {{$land->intitule}} </td>
                    <td>  <span class="name">{{$land->adresse}}</span> </td>
                    <td> <span class="product">{{$land->loyer}}</span> </td>
                    <td><span class="">{{$land->details}}</span></td>
                    <td>
                        
                    </td>
                   <td>{{$land->description}}</td>
                   <td>
                        <span class="badge badge-{{$land->isRehoused?'complete':'danger'}}">{{$land->isRehoused?'Oui':'Non'}}</span>
                   </td>
                   
                   <td>
                    <span class="badge badge-pending">{{$land->status}}</span>
                   </td>
                 
                </tr>
                @endforeach
                {{-- <td>{{$land->isFurnished?'Oui':'Non'}}</td>
            <td>{{$land->isPainted?'Oui':'Non'}}</td>
            <td>{{$land->isTiled?'Oui':'Non'}}</td> --}}
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