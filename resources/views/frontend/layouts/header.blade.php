<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <a class="navbar-brand text-brand" href="{{ route('accueil') }}">Mov<span class="color-b">Into</span></a>

        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">

                <li class="nav-item {{request()->requestUri=='/accueil' ? 'active' : '' }}"  >
                    <a class="nav-link " href="{{ route("accueil") }}">Accueil</a>
                    {{-- @php dd(request()->pathInfo)@endphp --}}
                </li>

                <li class="nav-item">
                    <a class="nav-link {{request()->is('/rooms') ? 'active' : '' }}" href="{{ route("rooms.listing") }}">Chambres</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{request()->is('/homes') ? 'active' : '' }}" href="{{ route('homes.listing') }}">Maisons</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{request()->is('/lands') ? 'active' : ''}}" href="{{ route('lands.listing') }}">Parcelles</a>
                </li>

                

            </ul>
        </div>

       
        @if(Auth::user())
        <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
            <i class="bi bi-person"></i>
        </button>
        <ul class="nav">

            <li class="nav-item">
                <a class="nav-link" href="{{ route("users.profile",Auth::user()->id) }}">
                    {{Auth::user()->first_name ." ". Auth::user()->last_name}}</a>
            </li>


            @if(Auth::user()->role_id==1)
            <li class="nav-item">
                <a class="btn btn-danger" href="{{route('dashboard')}}">Espace admin</a>
            </li>
            @endif
        </ul>
        @endif

    </div>
</nav><!-- End Header/Navbar -->
