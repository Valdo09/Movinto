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
                    <li class="breadcrumb-item active" aria-current="page">Utilisateurs</li>
                </ol>
            </nav>
            <h2 class="h4">Liste des utilisateurs</h2>
        </div>

    </div>
@endsection

@section('content')

    <div class="card card-body border-0 shadow table-wrapper table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th class="border-gray-200">#</th>
                <th class="border-gray-200">Nom</th>
                <th class="border-gray-200">Prénoms</th>
                <th class="border-gray-200">Email</th>
                <th class="border-gray-200">Téléphone</th>
                <th class="border-gray-200">Date de naissance</th>
                <th class="border-gray-200">Sexe</th>

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
            </tbody>
        </table>
        <div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
            <nav aria-label="Page navigation example">
                <ul class="pagination mb-0">
                    <li class="page-item">
                        <a class="page-link" href="#">Previous</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">5</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
            <div class="fw-normal small mt-4 mt-lg-0">Showing <b>5</b> out of <b>25</b> entries</div>
        </div>
    </div>
@endsection
