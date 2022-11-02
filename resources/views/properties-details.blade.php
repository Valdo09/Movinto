    
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <title>Movinto</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    
      
        
        <link rel="stylesheet" href="{{URL::asset('css/open-iconic-bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/aos.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/animate.css')}}">
        
        <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/magnific-popup.css')}}">
    
        <link rel="stylesheet" href="{{URL::asset('css/ionicons.min.css')}}">
    
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/jquery.timepicker.css')}}">
    
        
        <link rel="stylesheet" href="{{URL::asset('css/flaticon.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/icomoon.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    
      </head>
      <body>
        
          <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
              <a class="navbar-brand" href="/">Mov<span>into</span></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
              </button>
    
              <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    @if (Auth::user())
                    <li class="nav-item "><a href="/" class="nav-link">Accueil</a></li>
                    <li class="nav-item active"><a href="{{route('cars')}}" class="nav-link">Nos voitures</a></li>
               
                    <li class="nav-item"><a href="{{route('locations.index')}} " class="nav-link">Mon activité</a></li>
               
                         @if (Auth::user()->role_id==1) 
                            <li class="nav-item">
                            <a href="/admin" class="nav-link">Espace admin</a>
                            </li>
                    
                          @endif 
    
             <li class="nav-item ">
               <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Déconnexion</button>
              </form>
             </li>
               
              @else
              <li class="nav-item active"><a href="#" class="nav-link">Accueil</a></li>
                  <li class="nav-item"><a href="{{route('login.show')}}" class="nav-link">Connexion</a></li>
                  <li class="nav-item"><a href="{{route('register.show')}}" class="nav-link">Inscription</a></li>
                  {{-- <li class="nav-item"><a href="/cars" class="nav-link">Nos voitures</a></li>
                  <li class="nav-item"><a href="#" class="nav-link">Contact</a></li> --}}
                 
             @endif
           
            
                  
                </ul>
              </div>
            </div>
          </nav>
        
              {{-- @php
                 $car->image_1=str_replace('\\','/',$car->image_1);
              @endphp --}}
         
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{asset('images/bg_1.jpg')}}')"data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-9  pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Accueil <i class="ion-ios-arrow-forward"></i></a></span> <span>Détails du bien <i class="ion-ios-arrow-forward"></i></span></p>
              <h1 class="mb-3 bread">Détails du bien </h1>
            </div>
          </div>
        </div>
    </section>
      {{-- @php
          $car->image_2=str_replace('\\','/',$property->image);
      @endphp --}}
      <section class="ftco-section ftco-car-details">
        <div class="container">
       <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="car-details">
              <div class="container">
                
              </div>
               
                <div class="text text-center">
                    
                    <h2>{{$property->intitule}}</h2>
                </div>
            </div>
        </div>
    </div>
  </div>
      </section>
      
      {{-- <div class="img rounded" style="background-image: url('{{url('/storage/'.$car->image_2)}}'));">wtf</div> --}}
      <div class="container mt-4 w-100">    
        <iframe width='853' height='480' src='{{$property->visite_virtuelle}}' frameborder='0' allowfullscreen allow='xr-spatial-tracking'></iframe>

        </div>
 
          
  
      <section class="ftco-section ftco-car-details">
        <div class="container">
           
           
            <div class="row">
                <div class="col-md-12 pills">
                          <div class="bd-example bd-example-tabs">
                              <div class="d-flex justify-content-center">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  
                                  <li class="nav-item">
                                    <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Caractéristiques</a>
                                  </li>
                                
                                  
                                </ul>
                              </div>
  
                            <div class="tab-content" id="pills-tabContent">
                              <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                  <div class="row">
                                    @php
                                        if($property->type_id==1)
                                        {
                                            $room=App\Models\Room::where('id',$property->room_id)->get();
                                           
                                        
                                      
                                        
                                        
                                    @endphp
                                    @foreach ($room as $item)
                                      <div class="col-md-4">
                                          <ul class="features">
                                            
                                                
                                            
                                              <li class="{{$item->isFurnished?'check':'remove'}}"><span class="ion-ios-checkmark"></span>Avec meubles</li>
                                              <li class="{{$item->isPainted?'check':'remove'}}"><span class="ion-ios-checkmark"></span>Murs peints</li>
                                              <li class="{{$item->isTiled?'check':'remove'}}"><span class="ion-ios-checkmark"></span>Carrelé</li>
                                             
                                              {{-- <li class="check"><span class="ion-ios-checkmark"></span>Musique</li> --}}
                                          </ul>
                                      </div>
                                    @endforeach
                                    @php
                                        }
                                    @endphp
                                      @php
                                       if($property->type_id==2)
                                        {
                                            $home=App\Models\Home::where('id',$property->home_id)->get();
                                           
                                        
                                          
                                      @endphp
                                       @foreach ($home as $item)
                                      <div class="col-md-4">

                                          <ul class="features">
                                           
                                                
                                            
                                              
                                            <li class="{{$item->isFurnished?'check':'remove'}}"><span class="ion-ios-checkmark"></span>Avec meubles</li>
                                            <li class="{{$item->isPainted?'check':'remove'}}"><span class="ion-ios-checkmark"></span>Murs peints</li>
                                            <li class="{{$item->isTiled?'check':'remove'}}"><span class="ion-ios-checkmark"></span>Carrelé</li>
                                              {{-- <li class="check"><span class="ion-ios-checkmark"></span>Bluetooth</li>
                                              <li class="remove"><span class="ion-ios-close"></span>Ordinateur embarqué</li> --}}

                                          
                                          </ul>
                                      </div>
                                      @endforeach
                                      @php
                                          }
                                        if($property->type_id==3)
                                        {
                                            $land=App\Models\Land::where('id',$property->land_id)->get();

                                        
                                      @endphp
                                        @foreach($land as $item)

                                       <div class="col-md-4">
                                          <ul class="features">
                                              <li class="{{$item->Rehoused?'check':'remove'}}"><span class="ion-ios-checkmark"></span>Recasé</li>
                            
                                            
                                          </ul>
                                      </div> 
                                      @endforeach
                                      @php
                                    }
                                    @endphp
                                  </div>
                              </div>
  
                              
  
                              
                            </div>
                          </div>
                </div>
                  </div>
        </div>
      </section>
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
                  <li><a href="#" class="py-2 d-block">Confidentialité &amp; Politique des cookies</a></li>
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
                    <li><span class="icon icon-map-marker"></span><span class="text">Abomey-Calavi, carré 0x0x0x</span></li>
                    <li><span><a href="#"><span class="icon icon-phone"></span><span class="text">+229 62 06 59 77</span></a></li>
                    <li><span><a href="#"><span class="icon icon-envelope"></span><span class="text">theEntreprise@gmail.com</span></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
  
              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    {{-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Ce site est conçu avec <i class="icon-heart color-danger" aria-hidden="true"></i> par <a href="#" target="_blank">Oswaldo Grimaud et Alim Allassane</a> --}}
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>
      </footer>
      
    
  
    <!-- loader -->
    {{-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> --}}
  
  
    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{URL::asset('js/popper.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{URL::asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL::asset('js/aos.js')}}"></script>
    <script src="{{URL::asset('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{URL::asset('js/jquery.timepicker.min.js')}}"></script>
    <script src="{{URL::asset('js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{URL::asset('js/google-map.js')}}"></script>
    <script src="{{URL::asset('js/main.js')}}"></script>
      
      
      
    </body>
  </html>
  
  
      
      