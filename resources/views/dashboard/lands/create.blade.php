@extends('layouts.dashboard')
@section('content')
<div class="content">
    <div class="animated fadeIn">

        <div class="">
            <form action="{{route('admin.lands.save')}}" class="row" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-xs-6 col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            {{-- <strong>Masked Input</strong> <small> Small Text Mask</small> --}}
                        </div>
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label class=" form-control-label">Intitulé</label>
                                <div class="input-group">
                                    {{-- <div class="input-group-addon"><i class="fa fa-calendar"></i></div> --}}
                                    <input class="form-control" name="intitule" type="text">
                                </div>
                                <small class="form-text text-muted">ex. 1 chambre salon à</small>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Adresse</label>
                                <div class="input-group">
                                    {{-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> --}}
                                    <input class="form-control" name="adress" type="text">
                                </div>
                                <small class="form-text text-muted">Calavi, Cxxx</small>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Superficie</label>
                                <div class="input-group">
                                    {{-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> --}}
                                    <input class="form-control" name="superficie" type="text">
                                </div>
                                <small class="form-text text-muted">Calavi, Cxxx</small>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Loyer/Prix</label>
                                <div class="input-group">
                                    {{-- <div class="input-group-addon"><i class="fa fa-usd"></i></div> --}}
                                    <input class="form-control" type="number" name="rent">
                                </div>
                                <small class="form-text text-muted">15000</small>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Description</label>
                                <div class="input-group">
                                    {{-- <div class="input-group-addon"><i class="fa fa-male"></i></div> --}}
                                    <input class="form-control" type="text" name="description">
                                </div>
                                <small class="form-text text-muted">ex. 999-99-9999</small>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Image</label>
                                <div class="input-group">
                                    {{-- <div class="input-group-addon"><i class="fa fa-asterisk"></i></div> --}}
                                    <input class="form-control" type="file" name="photo">
                                </div>
                                <small class="form-text text-muted">ex. ~9.99 ~9.99 999</small>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Lien de la visite virtuelle</label>
                                <div class="input-group">
                                    {{-- <div class="input-group-addon"><i class="fa fa-credit-card"></i></div> --}}
                                    <input class="form-control" type="text" name="visite_virtuelle">
                                </div>
                                <small class="form-text text-muted">ex. 9999 9999 9999 9999</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            {{-- <strong class="card-title">Standard Select</strong> --}}
                        </div>
                        <div class="card-body">
                           
                            
                            <div class="form-group">
                                <label class=" form-control-label">Recasé</label>

                                <select data-placeholder="Recasé" class="standardSelect" tabindex="1" name="rehoused">
                                    <option value="" label="default"></option>
                                    <option value="Yes">Oui</option>
                                    <option value="No">Non</option>
                                    
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">A louer/vendre</label>

                                <select data-placeholder="A louer/vendre" class="standardSelect" tabindex="1" name="status">
                                    <option value="" label="default"></option>
                                    <option value="A louer">A louer</option>
                                    <option value="A vendre">A vendre</option>
                                    
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Autres</label>

                                <textarea name="details" id="" cols="30" rows="8" class="form-control"></textarea>
                                
                            </div>
                         
                            <div class="form-group">
                                <label class=" form-control-label">Propriétaire</label>

                                <select data-placeholder="Propriétaire" class="standardSelect" tabindex="1" name="owner_id">
                                    <option value="" label="default"></option>
                                    @foreach ($owners as $owner)
                                    <option value="{{$owner->id}}" label="" >{{$owner->first_name." ".$owner->last_name}}</option>
                                    @endforeach
                                    
                                </select>
                                
                            </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Enregistrer" class="btn btn-primary py-3 px-5">
                  </div>
            </form>
            

            

            {{-- <div class="card">
                <div class="card-header">
                    <strong class="card-title">Multi Select</strong>
                </div>
                <div class="card-body">

                  <select data-placeholder="Choose a country..." multiple class="standardSelect">
                    <option value="" label="default"></option>
                    <option value="United States">United States</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Aland Islands">Aland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                </select>

            </div> --}}
        </div>

        {{-- <div class="card">
            <div class="card-header">
                <strong class="card-title">Multi Select with Groups</strong>
            </div>
            <div class="card-body">

              <select data-placeholder="Your Favorite Football Team" multiple class="standardSelect" tabindex="5">
                <option value="" label="default"></option>
                <optgroup label="NFC EAST">
                  <option>Dallas Cowboys</option>
                  <option>New York Giants</option>
                  <option>Philadelphia Eagles</option>
                  <option>Washington Redskins</option>
              </optgroup>
              <optgroup label="NFC NORTH">
                  <option>Chicago Bears</option>
                  <option>Detroit Lions</option>
                  <option>Green Bay Packers</option>
                  <option>Minnesota Vikings</option>
              </optgroup>
              <optgroup label="NFC SOUTH">
                  <option>Atlanta Falcons</option>
                  <option>Carolina Panthers</option>
                  <option>New Orleans Saints</option>
                  <option>Tampa Bay Buccaneers</option>
              </optgroup>
              <optgroup label="NFC WEST">
                  <option>Arizona Cardinals</option>
                  <option>St. Louis Rams</option>
                  <option>San Francisco 49ers</option>
                  <option>Seattle Seahawks</option>
              </optgroup>
              <optgroup label="AFC EAST">
                  <option>Buffalo Bills</option>
                  <option>Miami Dolphins</option>
                  <option>New England Patriots</option>
                  <option>New York Jets</option>
              </optgroup>
              <optgroup label="AFC NORTH">
                  <option>Baltimore Ravens</option>
                  <option>Cincinnati Bengals</option>
                  <option>Cleveland Browns</option>
                  <option>Pittsburgh Steelers</option>
              </optgroup>
              <optgroup label="AFC SOUTH">
                  <option>Houston Texans</option>
                  <option>Indianapolis Colts</option>
                  <option>Jacksonville Jaguars</option>
                  <option>Tennessee Titans</option>
              </optgroup>
              <optgroup label="AFC WEST">
                  <option>Denver Broncos</option>
                  <option>Kansas City Chiefs</option>
                  <option>Oakland Raiders</option>
                  <option>San Diego Chargers</option>
              </optgroup>
          </select>

      </div> --}}
  </div>

</div>



</div>


</div><!-- .animated -->
</div>
@endsection