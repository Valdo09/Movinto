@extends('layouts.dashboard')
@section('content')

    <div class="content">
        <div class="card m-5">
            <div class="card-header">
                <strong class="card-title">Liste des Utilisateurs</strong>
            </div>
            <div class="table-stats order-table ov-h">
                <table class="table ">
                    <thead>
                    <tr>
                        <th class="serial">#</th>
                        <th class="avatar">Prénom</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Date de naissance</th>
                        <th>Sexe</th>
                        <th>Type</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="serial">{{$user->id}}.</td>

                            <td> {{$user->first_name}} </td>
                            <td>  <span class="name">{{$user->last_name}}</span> </td>
                            <td> <span class="product">{{$user->email}}</span> </td>
                            <td><span class="">{{$user->phone_number}}</span></td>

                            <td>{{$user->birthdate}}</td>
                            <td>{{$user->sex}}</td>

                            <td>
                                @if($user->role_id==1)
                                    Admin
                                @elseif($user->role_id==2)
                                    Propriétaire
                                @elseif($user->role_id==3)
                                    Client
                                @endif

                            </td>

                            {{-- <td>
                              <span class="badge badge-{{$room->isTiled?'complete':'danger'}}">{{$room->isTiled?'Oui':'Non'}}</span>
                             </td>
                             <td>
                                 <span class="badge badge-{{$room->isPainted?'complete':'danger'}}">{{$room->isPainted?'Oui':'Non'}}</span>
                            </td>
                            <td>
                             <span class="badge badge-pending">{{$room->status}}</span>
                            </td> --}}

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
    </div>

@endsection
