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
                    <a class="nav-link active" href="{{ route("front-accueil") }}">Accueil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route("front-rooms") }}">Chambres</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('front-homes') }}">Maisons</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('front-lands') }}">Parcelles</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Templates pages de details</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item " href="{{route("front-property")}}">Property details template</a>
                        <a class="dropdown-item " href="{{route('front-profile')}}">User profile details template</a>

                    </div>
                </li>

            </ul>
        </div>

        <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
            <i class="bi bi-person"></i>
        </button>

        <ul class="nav">

            <li class="nav-item">
                <a class="nav-link  " href="{{ route("front-profile") }}">Camille GRIMAUD</a>
            </li>


                {{--uniquement pour afficher l'espace administrateur--}}
            <li class="nav-item">
                <a class="btn btn-danger" href="#">Espace admin</a>
            </li>

        </ul>

    </div>
</nav><!-- End Header/Navbar -->
