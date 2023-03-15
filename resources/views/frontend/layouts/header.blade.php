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

                <li class="nav-item">
                    <a class="nav-link  @if(\Illuminate\Support\Facades\Request::routeIs('accueil')) active @endif " href="{{ route("accueil") }}">Accueil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link  @if(\Illuminate\Support\Facades\Request::is('rooms')) active @endif" href="{{ route("rooms.listing") }}">Chambres</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link   @if(\Illuminate\Support\Facades\Request::is('homes')) active @endif" href="{{ route('homes.listing') }}">Maisons</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link  @if(\Illuminate\Support\Facades\Request::is('lands')) active @endif " href="{{ route('lands.listing') }}">Parcelles</a>
                </li>



            </ul>
        </div>
        @auth
        <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
            <i class="bi bi-person"></i>
        </button>
        @endauth

        <ul class="nav">
            @auth
            <li class="nav-item">
                <a class="nav-link" href="{{ route("users.profile",Auth::user()->id) }}">
                    {{Auth::user()->first_name ." ". Auth::user()->last_name}}</a>
            </li>


            @if(Auth::user()->role_id==1)
            <li class="nav-item">
                <a class="btn btn-danger" href="{{route('dashboard')}}">Espace admin</a>
            </li>
            @endif
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register.show') }}">
                      Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-success" href="{{ route('login.show') }}">
                      Connexion</a>
                </li>

            @endauth
        </ul>


    </div>
</nav><!-- End Header/Navbar -->
