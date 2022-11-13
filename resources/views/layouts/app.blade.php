<!DOCTYPE html>
<html lang="en">

<head>
    <title>Movinto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">



    <link rel="stylesheet" href="{{ URL::asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ URL::asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}">
    <style>
        .item {
            position: relative;
            padding-top: 20px;
            display: inline-block;
        }

        .notify-badge {
            position: absolute;
            right: -20px;
            top: 10px;
            background: orange;
            text-align: center;
            border-radius: 30px 30px 30px 30px;
            color: white;
            padding: 5px 10px;
            font-size: 20px;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">Mov<span>into</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    @if (Auth::user())
                        <li class="nav-item active"><a href="#" class="nav-link">Accueil</a></li>

                        {{-- <li class="nav-item"><a href="{{route('locations.index')}}" class="nav-link">Mon activité</a></li> --}}

                        @if (Auth::user()->role_id == 1)
                            <li class="nav-item">
                                <a href="{{ route('dashboard') }}" class="nav-link">Espace admin</a>
                            </li>
                        @endif

                        <li class="nav-item ">
                            <a href="{{ route('logout.perform') }}"
                                class="nav-link btn btn-danger me-2 text-white shadow-0">Déconnexion</a>

                        </li>
                    @else
                        <li class="nav-item active"><a href="#" class="nav-link">Accueil</a></li>
                        <li class="nav-item"><a href="{{ route('login.show') }}" class="nav-link">Connexion</a></li>
                        <li class="nav-item"><a href="{{ route('register.show') }}" class="nav-link">Inscription</a>
                        </li>
                        <!-- <li class="nav-item"><a href="/cars" class="nav-link">Nos voitures</a></li> -->
                        <!-- <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li> -->

                    @endif



                </ul>
            </div>
        </div>
    </nav>


    <main style="background-image: url('{{ asset('images/tierra-mallorca-rgJ1J8SDEAY-unsplash.jpg') }}')"
        data-stellar-background-ratio="0.5">
        @yield('content')
    </main>
    </div>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2"><a href="#" class="logo">Mov<span>into</span></a></h2>
                        <p></p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class=" "><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class=" "><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class=" "><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Information</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">A propos</a></li>
                            <li><a href="#" class="py-2 d-block">Services</a></li>
                            <li><a href="#" class="py-2 d-block">Termes et conditions</a></li>
                            <li><a href="#" class="py-2 d-block">Confidentialité &amp; Politique des cookies</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Support client</h2>

                    </div>
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Avez-vous des questions?</h2>
                            <div class="block-23 mb-3">
                                <ul>
                                    <li><span class="icon icon-map-marker"></span><span class="text">Abomey-Calavi,
                                            carré 0x0x0x</span></li>
                                    <li><span><a href="#"><span class="icon icon-phone"></span><span
                                                    class="text">+229 62 06 59 77</span></a></li>
                                    <li><span><a href="#"><span class="icon icon-envelope"></span><span
                                                    class="text">theEntreprise@gmail.com</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">

                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            {{-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Ce site est conçu avec <i class="icon-heart color-danger" aria-hidden="true"></i> par <a href="#" target="_blank">Oswaldo Grimaud et Alim Allassane</a> --}}
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
    </footer>
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ URL::asset('js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('js/aos.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ URL::asset('js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ URL::asset('js/google-map.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
</body>

</html>
