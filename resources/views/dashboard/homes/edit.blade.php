@extends('layouts.dashboard')
@section('content')
<div class="content">
    <div class="animated fadeIn">

        <div class="">
            Modification d'une maison
            @foreach ($home as $item)
                
           
            <form action="{{route('admin.homes.update',$item->id)}}" class="row" method="POST" enctype="multipart/form-data">
                @method('PUT')
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
                                    <input class="form-control" name="intitule" type="text" value="{{$item->intitule}}">
                                </div>
                                <small class="form-text text-muted">ex. 1 chambre salon à</small>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Adresse</label>
                                <div class="input-group">
                                    {{-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> --}}
                                    <input class="form-control" name="adress" type="text" value="{{$item->adresse}}">
                                </div>
                                <small class="form-text text-muted">Calavi, Cxxx</small>
                            </div>
                            
                            <div class="form-group">
                                <label class=" form-control-label">Superficie</label>
                                <div class="input-group">
                                    {{-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> --}}
                                    <input class="form-control" name="superficie" type="text" value="{{$item->superficie}}">
                                </div>
                                <small class="form-text text-muted">Calavi, Cxxx</small>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Loyer/Prix</label>
                                <div class="input-group">
                                    {{-- <div class="input-group-addon"><i class="fa fa-usd"></i></div> --}}
                                    <input class="form-control" type="number" name="rent" value="{{$item->loyer}}">
                                </div>
                                <small class="form-text text-muted">15000</small>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Description</label>
                                <div class="input-group">
                                    {{-- <div class="input-group-addon"><i class="fa fa-male"></i></div> --}}
                                    <input class="form-control" type="text" name="description" value="{{$item->description}}">
                                </div>
                                <small class="form-text text-muted">ex. 999-99-9999</small>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Image</label>
                                <div class="input-group">
                                    <input class="form-control" type="file" name="photo">
                                </div>
                                <small class="form-text text-muted">ex. ~9.99 ~9.99 999</small>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Lien de la visite virtuelle</label>
                                <div class="input-group">
                                    {{-- <div class="input-group-addon"><i class="fa fa-credit-card"></i></div> --}}
                                    <input class="form-control" type="text" name="visite_virtuelle" value="{{$item->visite_virtuelle}}">
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
                                <label class=" form-control-label">Nombre de chambres</label>
                                <div class="input-group">
                                    {{-- <div class="input-group-addon"><i class="fa fa-phone"></i></div> --}}
                                    <input class="form-control" name="rooms_number" type="number" value="{{$item->rooms_number}}">
                                </div>
                                <small class="form-text text-muted">Calavi, Cxxx</small>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Meublé</label>

                                <select data-placeholder="Meublé" class="standardSelect" tabindex="1" name="furnished">
                                    @if($item->isFurnished)
                                    <option value="Yes">Oui</option>
                                    <option value="No">Non</option>
                                    @else
                                    <option value="No">Non</option>
                                    <option value="Yes">Oui</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Carrelé</label>

                                <select data-placeholder="Carrelé" class="standardSelect" tabindex="1" name="tiled">
                                    @if($item->isTiled)
                                    <option value="Yes">Oui</option>
                                    <option value="No">Non</option>
                                    @else
                                    <option value="No">Non</option>
                                    <option value="Yes">Oui</option>
                                    @endif
                                    
                                </select>

                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Peint</label>

                                <select data-placeholder="Carrelé" class="standardSelect" tabindex="1" name="painted">
                                    @if($item->isPainted)
                                    <option value="Yes">Oui</option>
                                    <option value="No">Non</option>
                                    @else
                                    <option value="No">Non</option>
                                    <option value="Yes">Oui</option>
                                    @endif
                                    
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">A louer/vendre</label>

                                <select data-placeholder="A louer/vendre" class="standardSelect" tabindex="1" name="status">
                                    @if($item->status=="A louer")
                                    <option value="A louer">A louer</option>
                                    <option value="A vendre">A vendre</option>
                                    @else
                                    <option value="A vendre">A vendre</option>
                                    <option value="A louer">A louer</option>
                                    @endif
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Autres</label>

                                <textarea name="details" id="" cols="30" rows="8" class="form-control">{{$item->details}}</textarea>
                                
                            </div>
                         
                            <div class="form-group">
                                <label class=" form-control-label">Propriétaire</label>

                                <select data-placeholder="Propriétaire" class="standardSelect" tabindex="1" name="owner_id">
                                    @php
                                        $proprio=\App\Models\User::where('id',$item->owner_id)->get();
                                    @endphp
                                    @foreach ($proprio as $pro)
                                        <option value="{{$pro->id}}" label="" >{{$pro->first_name." ".$pro->last_name}}</option>
                                    @endforeach
                                    @foreach ($owners as $owner)
                                        <option value="{{$owner->id}}" label="" >{{$owner->first_name." ".$owner->last_name}}</option>
                                    @endforeach
                                    
                                </select>
                                
                            </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" value="Modifier" class="btn btn-primary py-3 px-5">
                  </div>
            </form>
            @endforeach
            

            

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