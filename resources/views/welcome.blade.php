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
    <style>
      .item {
    position:relative;
    padding-top:20px;
    display:inline-block;
}
.notify-badge{
    position: absolute;
    right:-20px;
    top:10px;
    background:orange;
    text-align: center;
    border-radius: 30px 30px 30px 30px;
    color:white;
    padding:5px 10px;
    font-size:20px;
}
    </style>

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
                <li class="nav-item active"><a href="#" class="nav-link">Accueil</a></li>
	            <!-- <li class="nav-item"><a href="{{route('cars')}}" class="nav-link">Nos voitures</a></li> -->

              <li class="nav-item"><a href="{{route('locations.index')}}" class="nav-link">Mon activité</a></li>
	       
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
	          <!-- <li class="nav-item"><a href="/cars" class="nav-link">Nos voitures</a></li> -->
	          <!-- <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li> -->
             
         @endif
       
        
	          
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('{{asset('images/bg_2.jpg')}}')" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">Trouvez une maison ou une chambre rapidement sans vous déplacer</h1>
	         
            </div>
          </div>
        </div>
      </div>
    </div>

     <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters">
	  					{{-- <div class="col-md-4 d-flex align-items-center">
	  						<form action="{{route('locations.store')}}" class="request-form   bg-primary" method="POST">
                  @csrf
		          		<h2>Faites votre réservation</h2>
			    				<div class="form-group">
			    					<label for="" class="label">Lieu de prise</label>
                   
			    					<input type="text" class="form-control" placeholder="En ville, A l'aéroport etc" name="pickup_place">
			    				</div>
			    				<div class="form-group">
			    					<label for="" class="label">Lieu de remise</label>
			    					<input type="text" class="form-control" placeholder="En ville, A l'aéroport etc" name="dropoff_place">
			    				</div>
			    				<div class="d-flex">
			    					<div class="form-group mr-2">
			                <label for="" class="label">Date de location</label>
			                <input type="date" class="form-control" id="book_pick_date" placeholder="Date" name="pickup_date">
			              </div>
			              <div class="form-group ml-2">
			                <label for="" class="label">Date de remise</label>
			                <input type="date" class="form-control" id="book_off_date" placeholder="Date" name="dropoff_date">
			              </div>
		              </div>
		              <div class="form-group">
		                <label for="" class="label">Heure de location</label>
		                <input type="text" class="form-control" id="time_pick" placeholder="Heure">
		              </div>
			            <div class="form-group">
			              <input type="submit" value="Louer une voiture maintenant" class="btn btn-secondary py-3 px-4">
			            </div>
			    			</form>
	  					</div> --}}
	  					<div class="col-md-12 d-flex align-items-center">
	  						<div class="services-wrap rounded-right w-100">
	  							 <h3 class="heading-section mb-4 text-center">Retrouvez rapidement une maison ou une chambre à louer/acheter</h3>
	  							<!-- <div class="row d-flex mb-4">
					          <div class="col-md-4 d-flex align-self-stretch  ">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Choisissez votre lieu de location</h3>
				                </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch  ">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Choisissez le meilleur plan pour vous</h3>
					              </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch  ">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Réservez votre voiture d'occasion</h3>
					              </div>
					            </div>      
					          </div>
					        </div> -->
					        {{-- <p><a href="#" class="btn btn-primary py-3 px-4">Réservez la voiture qu'il vous faut</a></p> --}}
	  						</div>
	  					</div>
	  				</div>
				</div>
  		</div>
    </section>
                

    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center   mb-5">
          	<span class="subheading">Qu'offrons-nous?</span>
            <h2 class="mb-2">Nos meilleurs biens immobiliers</h2>
          </div>
        </div>
    		<div class="row">
          @foreach ($properties as $item)

          
            <div class="col-12 col-lg-4">
                <div class="card mb-4 mb-lg-0  shadow item" >

                    <span class="notify-badge">{{$item->status}}</span>
                    <img class="card-img-top" src="{{asset('images/properties/'.$item->image)}}">
                    <div class="card-body">
                        <div class="card-title">
                            <h5>{{$item->intitule}}</h5>
                        </div>
                        
                        <p class="card-text"> {{$item->description}}</p>
                            <div class="row">
                              <div class="col-md-6">
                               
                                <div class="row">
                                  <div class="col-md-6  ">
                                    <a href=""><button class="btn btn-success">Réserver</button></a>

                                  </div>
                                  <div class="col-md-6">
                                    <a href=" {{route('details',$item->id)}}" class="text-right"><button class="btn btn-primary">Détails</button></a>

                                  </div>
                                </div>
                                
                              </div>
                              <div class="col-md-6 mr-0 pr-0">
                                <p>{{$item->loyer}} FCFA/ mois</p>
                              </div>
                            </div>
                           
        
        
                    
                    </div>
                </div>
                </div>
           
                @endforeach
        
        </div>
    	</div>
    </section>

    <!-- <section class="ftco-section ftco-about">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url('{{asset('images/about.jpg')}}')">
					</div>
					<div class="col-md-6 wrap-about  ">
	          <div class="heading-section heading-section-white pl-md-5">
	          	<span class="subheading">A propos de nous</span>
	            <h2 class="mb-4">Bienvenue chez Car Rent</h2>

	            <p>Vous souhaitez louer une voiture en aller simple ? L'entreprise Car Rent offre des locations de voiture pratiques en aller simple. Nous disposons d’une vaste sélection de véhicules pour les déplacements dans une ville, dans un pays ou depuis un aéroport. tendez vos jambes (et rangez votre tente et vos jouets sans effort) en profitant de nos voitures de location 5 à 7 placeso 
                    </p>
	            <p>Louez un véhicule avec Enterprise partout en Afrique dans nos agences en ville, en aéroports et en gares. Partir à la découverte de l’Afrique par vos propres moyens n’a jamais été aussi simple !
                    </p>
	            <p><a href="#" class="btn btn-primary py-3 px-4">Rechercher un véhicule</a></p>
	          </div>
					</div>
				</div>
			</div>
		</section> -->
<!-- 
		<section class="ftco-section">
			<div class="container">
			    <div class="row justify-content-center mb-5">
                    <div class="col-md-7 text-center heading-section  ">
                        <span class="subheading">Services</span>
                        <h2 class="mb-3">Nos récents services</h2>
                    </div>
            </div>
				<div class="row">
					<div class="col-md-4">
						<div class="services services-2 w-100 text-center">
            	            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
            	                <div class="text w-100">
                                     <h3 class="heading mb-2">Une cérémonie de mariage</h3>
                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper elit sapien, sit amet elementum purus egestas non.</p>
                                 </div>
                            
					</div>
					
					</div>
					<div class="col-md-4">
						<div class="services services-2 w-100 text-center">
            	            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
            	                <div class="text w-100">
                                    <h3 class="heading mb-2">Transport depuis l'aéroport</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper elit sapien, sit amet elementum purus egestas non</p>
                                </div>
                            
					    </div>
                    </div>
                    <div class="col-md-4">
                        <div class="services services-2 w-100 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
                                <div class="text w-100">
                                    <h3 class="heading mb-2">Location pour un tour complet de ville</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ullamcorper elit sapien, sit amet elementum purus egestas non</p>
                                </div>
				
				
                           
                    </div>
				</div>
				</div>
			
		</section> -->

		



   

    <!-- <section class="ftco-counter ftco-section img bg-light" id="section-counter">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row">
          <div class="col-md-6 col-lg-4 justify-content-center counter-wrap  ">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="60">13</strong>
                <span>Années  <br>d'expérience</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 justify-content-center counter-wrap  ">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="1090">43</strong>
                <span>de voitures <br>au total</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 justify-content-center counter-wrap  ">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="2590">151</strong>
                <span>De clients  <br>Satisfaits</span>
              </div>
            </div>
          </div>
          
        </div>
    	</div>
    </section>	 -->

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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Ce site est conçu avec <i class="icon-heart color-danger" aria-hidden="true"></i> par <a href="#" target="_blank">Oswaldo Grimaud et Alim Allassane</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  {{-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> --}}


  <script src="{{URL::asset('jquery.min.js')}}"></script>
  <script src="{{URL::asset('jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{URL::asset('popper.min.js')}}"></script>
  <script src="{{URL::asset('bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('jquery.easing.1.3.js')}}"></script>
  <script src="{{URL::asset('jquery.waypoints.min.js')}}"></script>
  <script src="{{URL::asset('jquery.stellar.min.js')}}"></script>
  <script src="{{URL::asset('owl.carousel.min.js')}}"></script>
  <script src="{{URL::asset('jquery.magnific-popup.min.js')}}"></script>
  <script src="{{URL::asset('aos.js')}}"></script>
  <script src="{{URL::asset('jquery.animateNumber.min.js')}}"></script>
  <script src="{{URL::asset('bootstrap-datepicker.js')}}"></script>
  <script src="{{URL::asset('jquery.timepicker.min.js')}}"></script>
  <script src="{{URL::asset('scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{URL::asset('google-map.js')}}"></script>
  <script src="{{URL::asset('main.js')}}"></script>
    
  </body>
</html>