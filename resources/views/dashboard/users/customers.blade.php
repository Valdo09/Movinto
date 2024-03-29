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
            <h2 class="h4">Liste des clients</h2>
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
                <th class="border-gray-200">Action</th>

            </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <td class="serial">{{$customer->id}}.</td>

                    <td> {{$customer->first_name}} </td>
                    <td>  <span class="name">{{$customer->last_name}}</span> </td>
                    <td> <span class="product">{{$customer->email}}</span> </td>
                    <td><span class="">{{$customer->phone_number}}</span></td>

                    <td>{{$customer->birthdate}}</td>
                    <td>{{$customer->sex}}</td>
                    <td>
                        <form action="{{route('customers.change.owners',$customer->id)}}" method="POST">
                            @csrf
                            <button type="submit">Rendre propriétaire</button>
                        </form>
                        
                    </td>

                    

                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $customers->links('backend.layouts.paginate') }}

    </div>
@endsection
