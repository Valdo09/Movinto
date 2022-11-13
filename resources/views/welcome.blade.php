@extends('layouts.app')

@section('content')
    <!-- END nav -->

    <div class="hero-wrap ftco-degree-bg"
        style="background-image: url('{{ asset('images/tierra-mallorca-rgJ1J8SDEAY-unsplash.jpg') }}')"
        data-stellar-background-ratio="0.5">
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
                                <h3 class="heading-section mb-4 text-center">Retrouvez rapidement une maison ou une chambre
                                    à louer/acheter</h3>
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
                        <div class="card mb-4 mb-lg-0  shadow ">

                            <span class="notify-badge">{{ $item->status }}</span>
                            <img class="card-img-top" src="{{ asset('images/properties/' . $item->image) }}">
                            <div class="card-body">
                                <div class="card-title">
                                    <h5>{{ $item->intitule }}</h5>
                                </div>

                                <p class="card-text"> {{ $item->description }}</p>
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="row">
                                            <div class="col-md-6  ">
                                                <a href=""><button class="btn btn-success">Réserver</button></a>

                                            </div>
                                            <div class="col-md-6">
                                                <a href=" {{ route('details', $item->id) }}" class="text-right"><button
                                                        class="btn btn-primary">Détails</button></a>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mr-0 pr-0">
                                        <p>{{ $item->loyer }} FCFA/ mois</p>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="background-image: url('{{ asset('images/about.jpg') }}')">
                </div>
                <div class="col-md-6 wrap-about  ">
                    <div class="heading-section heading-section-white pl-md-5">
                        <span class="subheading">A propos de nous</span>
                        <h2 class="mb-4">Bienvenue chez Movinto</h2>

                        <p>
                        </p>
                        <p>
                        </p>
                        <p><a href="#" class="btn btn-primary py-3 px-4">Rechercher une chambre une maison ou une
                                parcelle</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
@endsection
